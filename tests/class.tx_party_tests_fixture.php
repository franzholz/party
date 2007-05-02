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
require_once (PATH_t3lib.'class.t3lib_tcemain.php');



/**
 * Generate fixture for the Unit-Tests of the Party Information Framework.
 *
 */
class tx_party_tests_fixture {

	/**
	 * Creates a set of test data. The test data must be available in the extension directory
	 * in party/tests/fixture in the form of T3D files.
	 * 
	 * Test datasets:
	 * 1. Basic
	 *
	 * @param	integer		$dataset: ID of the test dataset
	 * @return	integer		$pid: The PID where the data is written to
	 */
	public function create($dataset) {
		$dataset = intval($dataset);
		$pid = $this->createPage();

		// Determine which files to load for the specified dataset. If no dataset is provided, return.
		switch ($dataset) {
			case 1:
				$files[] = t3lib_extMgm::extPath('party').'tests/fixture/0001_o.t3d';
				$files[] = t3lib_extMgm::extPath('party').'tests/fixture/0012_p.t3d';
				$files[] = t3lib_extMgm::extPath('party').'tests/fixture/0013_p.t3d';
				$files[] = t3lib_extMgm::extPath('party').'tests/fixture/habit.t3d';
				$files[] = t3lib_extMgm::extPath('party').'tests/fixture/mark.t3d';
				$files[] = t3lib_extMgm::extPath('party').'tests/fixture/membership.t3d';
				$files[] = t3lib_extMgm::extPath('party').'tests/fixture/occupation.t3d';
				$files[] = t3lib_extMgm::extPath('party').'tests/fixture/relationship.t3d';
				$files[] = t3lib_extMgm::extPath('party').'tests/fixture/vehicle.t3d';
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
			$import->importData($pid);		// Import the data to the new test page
		}
		
		return $pid;
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
		$this->export->setCharset('utf-8');
		
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
	
	/**
	 * Creates a new Page on PID 0
	 * 
	 * @return	integer		PID of the page created
	 */
	private function createPage() {
		$tempId = uniqid('NEW');
		$data = array();		
		$data['pages'][$tempId] = array(
			'title' => '### Party Information Framework - Unit Tests ###',
			'hidden' => 0,
			'pid' => 0,
			'doktype' => 254,	// SysFolder
		);
		
		$tce = t3lib_div::makeInstance('t3lib_TCEmain');
		$tce->stripslashes_values = 0;
		$tce->start($data, array());
		$tce->process_datamap();
		$pid = $tce->substNEWwithIDs[$tempId];
		
		return $pid;
	}
	
	/**
	 * Deletes a page and all the tx_party records inside.
	 * 
	 * @param	integer		$pid: PID of the page to be deleted
	 * @return	void
	 */
	public function deletePage($pid) {
		$pid = intval($pid);
		$allTables = $this->getAllTables();
		foreach ($allTables as $table) {
			$GLOBALS['TYPO3_DB']->exec_DELETEquery($table,'pid='.$pid);
		}
		$GLOBALS['TYPO3_DB']->exec_DELETEquery('pages','uid='.$pid);
	}
	
	/**
	 * Deletes _all_ data from all tables starting with tx_party*
	 * 
	 * @return	void
	 */
	public function deleteAll() {
		$allTables = $this->getAllTables();
		foreach ($allTables as $table) {
			$GLOBALS['TYPO3_DB']->sql_query('TRUNCATE '.$table);
		}
	}
	
	/**
	 * Gets all tables starting with tx_party*
	 * 
	 * @return	array	All tables starting with tx_party*
	 */
	private function getAllTables() {
		$out = array();
		$allTables = $GLOBALS['TYPO3_DB']->admin_get_tables(TYPO3_db);
		foreach ($allTables as $table) {
			if (substr($table,0,8) == 'tx_party') {
				$out[] = $table;
			}
		}
		return $out;
	}
	
	

}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/tests/class.tx_party_tests_fixture.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/tests/class.tx_party_tests_fixture.php']);
}

?>
