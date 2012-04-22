<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 David Bruehlmeier (typo3@bruehlmeier.com)
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
 * Abstract base class for all models.
 *
 * $Id$
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


abstract class tx_party_models_object extends tx_div2007_object {

	protected $table;		// Table which the concrete model is based on.

	/**
	 * Loads the object from the table defined in $this->table.
	 * Only used for 'simple' models, more complex model overwrite this function.
	 *
	 * @param	integer		$uid: UID of the object
	 * @return	void		The data is loaded into the object
	 */
	public function load ($uid) {
		$uid = intval($uid);
		$deleteClause = t3lib_BEfunc::deleteClause($this->table);
		$groupBy = '';
		$orderBy = '';

		// Load the data from the database and build the object
		$query = $GLOBALS['TYPO3_DB']->SELECTquery(
			'*',
			$this->table,
			$this->table . '.uid=' . $uid . $deleteClause,
			$groupBy,
			$orderBy
		);
		$result = $GLOBALS['TYPO3_DB']->sql_query($query);

		if($result) {
			$row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($result);
			$this->overwriteArray($row);
			$GLOBALS['TYPO3_DB']->sql_free_result($result);
		}
	}

	/**
	 * Builds a label from the 'label'-field according to $TCA. This function is usually overwritten for
	 * more complex models.
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the object
	 */
	public function getLabel () {
		if ($this->isEmpty()) {
			$result = FALSE;
		} else {
			$result = $this->get($GLOBALS['TCA'][$this->table]['ctrl']['label']);
		}
		return $result;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_object.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_object.php']);
}


?>