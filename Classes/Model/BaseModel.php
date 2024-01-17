<?php

namespace JambageCom\Party\Model;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */


/**
 * Abstract base class for all models.
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


abstract class BaseModel
{
    protected $table = '';		// Table which the concrete model is based on.

    /**
     * Loads the object from the table defined in $this->table.
     * Only used for 'simple' models, more complex model overwrite this function.
     *
     * @param	integer		$uid: UID of the object
     * @return	void		The data is loaded into the object
     */
    public function load($uid): void
    {
        $uid = (int) $uid;
        $deleteClause = \JambageCom\Div2007\Utility\TableUtility::deleteClause($this->table);
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
     * Builds a label from the 'label'-field according to $GLOBALS['TCA']. This function is usually overwritten for
     * more complex models.
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the object
     */
    public function getLabel()
    {
        return $this->isEmpty() ? false : $this->get($GLOBALS['TCA'][$this->table]['ctrl']['label']);
    }
}
