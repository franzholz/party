<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2007 David Bruehlmeier (typo3@bruehlmeier.com)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


t3lib_extMgm::isLoaded('impexp',1);
require_once (t3lib_extMgm::extPath('impexp').'class.tx_impexp.php');



/**
 * Generate fixture for the Unit-Tests of the Party Information Framework.
 *
 */
class tx_party_fixture {


	/**
	 * Creates a set of test data. The test data must be available in the extension directory
	 * in party/tests/fixture in the form of T3D files.
	 * 
	 * Test datasets:
	 * 1. Basic (Two persons and one organisation)
	 *
	 * @param	integer		$dataset: ID of the test dataset
	 * @param	integer		$pid: PID where to wirte the dataset to
	 * @return	void		The fixture is written to the database/the filesystem
	 */
	public function create($dataset,$pid=1) {
		$dataset = intval($dataset);
		$pid = intval($pid);

		// Determine which files to load for the specified dataset. If no dataset is provided, return.
		switch ($dataset) {
			case 1:
				$files[] = t3lib_extMgm::extPath('party').'tests/fixture/0001_o.t3d';
				$files[] = t3lib_extMgm::extPath('party').'tests/fixture/0012_p.t3d';
				$files[] = t3lib_extMgm::extPath('party').'tests/fixture/0013_p.t3d';
			break;
			
			default:
				return false;
			break;
		}
		
		// Get and configure a new instance of the import/export system extension
		$import = t3lib_div::makeInstance('tx_impexp');
		$import->init(1,'import');			// Use compressed files
		$import->update = TRUE;				// Update records with the same UID
		$import->enableLogging = FALSE;		// No logging
		$import->force_all_UIDS = TRUE;		// The UID's from the test dataset must be kept
		$import->showDiff = FALSE;			// No difference to show
		$import->allowPHPScripts = FALSE;	// We don't want PHP scripts

		// Import the files
		foreach ($files as $theFile) {
			$import->loadFile($theFile,1);	// 1 = import all, including files etc.
			$import->importData($pid);
		}
	}
	

	/**
	 * Creates a T3D file for a party in the directory party/tests/fixture.
	 * 
	 *
	 * @param	integer		$uid: UID of the party to export
	 * @return	void		The T3D file is written to the filesystem
	 */
	public function export($uid) {

		//Create and initialize
		$this->export = t3lib_div::makeInstance('tx_impexp');
		$this->export->init();
		$this->export->relOnlyTables[]='_ALL';	// Allow all tables as relationships
		
		// Add record
		$rec = t3lib_BEfunc::getRecord('tx_party_parties',$uid);
		$this->export->export_addRecord('tx_party_parties',$rec);

		
		// Add all relations (recursively in 5 levels so relations has THEIR relations registered as well)
		for($a=0;$a<5;$a++)	{
			$addR = $this->export->export_addDBRelations($a);
			if (!count($addR)) break;
		}
		
		// Finally load all the files
		$this->export->export_addFilesFromRelations();	// MUST be after the DBrelations are set so that file from ALL added records are included!
		
		// Now the internal DAT array is ready to export
		#debug($this->export->dat);
		
		// Write export
		if ($rec['type'] == 0) $type = '_p';
		if ($rec['type'] == 1) $type = '_o';
		$out = $this->export->compileMemoryToFileContent();
		t3lib_div::writeFile(t3lib_extMgm::extPath('party').'tests/fixture/'.$uid.$type.'.t3d',$out);
		#debug(strlen($out));
	}

}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/tests/class.tx_party_fixture.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/tests/class.tx_party_fixture.php']);
}

?>
