<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 David Bruehlmeier (typo3@bruehlmeier.com)
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
 * Static utility functions for the People Management Framework.
 *
 * The functions can only be used se non-instantiated, e.g.
 * tx_party_div2007::getAllTypeFields()
 *
 *
 * $Id$
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class tx_party_div {

	/**
	 * Returns a comma-separated list with all relevant fields for the table, according to the
	 * 'type' of the record.
	 *
	 * Based on t3lib_BEfunc::getTCAtypes(). Problems with the core-function:
	 * - Doesn't account for the fields in palettes
	 * - Doesn't account for the common fields, i.e. uid, pid, etc.
	 * - Also returns 'special' fields, i.e. --div-- and --palette--
	 *
	 * @param	string		$table: The name of the table for which to get the fields
	 * @param	array		$rec: The record which contains the type
	 * @return	string		Comma-separated list with all type fields for the record
	 */
	public static function getAllTypeFields ($table,$rec) {
		global $TCA;

		// Add 'common fields'
		$out = 'uid,pid,tstamp,crdate,cruser_id,deleted,';

		// Get all type fields with the core function.
		$typeFields = t3lib_BEfunc::getTCAtypes($table,$rec,true);

		// Add all fields from palettes and exclude 'special fields'
		foreach ($typeFields as $k=>$theTypeField) {
			if ($k == '--div--' || $k == '--palette--') {
				continue;	// Exclude 'special' fields
			}
			$out.= $k.',';
			if ($theTypeField['palette']) {
				$paletteFields = t3lib_div::rm_endcomma($TCA[$table]['palettes'][$theTypeField['palette']]['showitem']);
				$out.= $paletteFields.',';
			}
		}

		// Return result
		$out = t3lib_div::rm_endcomma($out);
		return $out;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/div/class.tx_party_div.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/div/class.tx_party_div.php']);
}


?>