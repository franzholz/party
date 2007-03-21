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
/**
 * Building (backend) labels, using label_userFunc.
 *
 * @author David Bruehlmeier <typo3@bruehlmeier.com>
 */



/**
 * Building (backend) labels, using label_userFunc
 *
 */
class tx_party_labels {
		
	
	
	/**
	 * Factory function which is called by label_userFunc. The function decides how to build the label.
	 * The result is directly written to $params['title'], since this parameter is passed by reference.
	 * 
	 * TEMPORARY! This will be refactored using the API once it's available.
	 *
	 * @param	array		$params: Parameters, passed by reference!
	 * @param	object		$pObj: Parent object from the calling function, passed by reference, not used.
	 * @return	void		The result is directly written to $params['title']
	 */
	public function getLabel(&$params, &$pObj)	{
		
		// Only get labels for tx_party* tables
		if (!substr($params['table'],0,8) == 'tx_party') return '';
		
		// Init
		$label = '';
		$table = $params['table'];
	
		// Get complete record
		$rec = t3lib_BEfunc::getRecord($params['table'], $params['row']['uid']);
		
		// Assemble the label
		switch ($table) {
			case 'tx_party_names':
				$label = $this->getNameLabel($rec);			
				break;
				
			case 'tx_party_parties':
				// TODO: A dirty hack... the _standard_ name and address should be taken, not just the first one!
				$names = t3lib_BEfunc::getRecordsByField('tx_party_names','party',$params['row']['uid']);
				if (is_array($names)) {
					$label = $this->getNameLabel(reset($names));
				} else {
					$label = $params['row']['uid'];
				}
				
				$addressUsages = t3lib_BEfunc::getRecordsByField('tx_party_address_usages','party',$params['row']['uid']);
				if (is_array($addressUsages)) {
					$addressUsage = reset($addressUsages);
					$address = t3lib_BEfunc::getRecord('tx_party_addresses',$addressUsage['address']);
					$label.= ' - '.$this->getAddressLabel($address);
				}
				break;
				
			default:
				debug ('No label defined for table '.$table);
				break;
		}
		
		// Write new label back to the params-array (passed by reference)
		if ($label != '') $params['title'] = $label;
	}
	
	
	
	/**
	 * Builds a name label based on the passed record.
	 *
	 * @param	array		$rec: Record from tx_party_names
	 * @return	string		Name label
	 */
	private function getNameLabel($rec) {
		if ($rec['type'] == 0) {	// Person Name
			if ($rec['last_name']) $label.= $rec['last_name'].', ';
			if ($rec['first_name']) $label.= $rec['first_name'].' ';
			if ($rec['middle_name']) $label.= strtoupper(substr($rec['middle_name'],0,1)).'. ';					
		}
		if ($rec['type'] == 1) {	// Organisation Name
			$label = $rec['organisation_name'];
		}
		
		return $label;
	}
	
	/**
	 * Builds an address label based on the passed record.
	 *
	 * @param	array		$rec: Record from tx_party_addresses
	 * @return	string		Name label
	 */
	private function getAddressLabel($rec) {
		$label = $rec['locality'];
		
		return $label;
	}
	
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/hooks/class.tx_party_labels.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/hooks/class.tx_party_labels.php']);
}


?>