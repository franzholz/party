<?php
namespace JambageCom\Party\Model;

/***************************************************************
*  Copyright notice
*
*  (c) 2014 David Bruehlmeier (typo3@bruehlmeier.com)
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
 * $Id: class.tx_party_models_object.php 81705 2013-11-23 10:37:30Z franzholz $
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage party
 */


abstract class AbstractObject extends \DmitryDulepov\Simplemvc\Model\AbstractModel {

	/**
	 * Builds a label from the 'label'-field according to $TCA.
	 *
	 * @return	string		Label of the object
	 */
	public function getLabel () {
		if (!$this->hasRecord()) {
			$result = FALSE;
		} else {
			$currentRow = $this->getCurrentRawData();
			$result = $currentRow[$GLOBALS['TCA'][$this->getTableName()]['ctrl']['label']];
		}
		return $result;
	}
}

?>