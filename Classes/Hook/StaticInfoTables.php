<?php

namespace JambageCom\Party\Hook;


/***************************************************************
*  Copyright notice
*
*  (c) 2013 David Brühlmeier (typo3@bruehlmeier.com)
*  All rights reserved
*
*  This script is part of the Typo3 project. The Typo3 project is
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
 * Updating hotlists for static_info_tables
 *
 *
 * $Id$
 *
 * @author	David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 */



/**
 * Updating hotlists for static_info_tables
 *
 * @author	David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 */
class StaticInfoTables {

	public function processDatamap_postProcessFieldArray(
		$status,
		$table,
		$id,
		$fieldArray,
		$pObj
	) {
		// Check if the current table contains a field with a hotlist to update
		foreach ($GLOBALS['TCA'][$table]['columns'] as $fieldName => $field) {
			if ($field['config']['itemsProcFunc_config']['hotlistApp'] == 'tx_party') {
				if ($fieldArray[$fieldName]) {

					// The hotlist will be updated only if the field changed, because only then it's in the $fieldArray
					tx_staticinfotables_div::updateHotlist(
						$field['config']['itemsProcFunc_config']['table'],
						$fieldArray[$fieldName],
						'uid',
						'tx_party'
					);
				}
			}
		}
	}
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/hooks/class.tx_party_staticinfotables.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/hooks/class.tx_party_staticinfotables.php']);
}

?>
