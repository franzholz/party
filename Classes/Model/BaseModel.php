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
     * Only used for 'simple' models, more complex models overwrite this function.
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
    

	/**
	 * Overwrite some of the internal array values
	 *
	 * Overwrite a selection of the internal values by providing new ones
	 * in form of a data structure of the tx_div2007 hash family.
	 *
	 * @param	mixed		hash array, SPL object or2007 hash string ( i.e. "key1 : value1, key2 : valu2, ... ")
	 * @param	string		possible split charaters in case the first parameter is a hash string
	 * @return	void
	 * @see		tx_div2007::toHashArray()
	 */
	public function overwriteArray ($hashData, $splitCharacters = ',;:\s') {
        
        // TDOO: +++ 
        // 
        // md5(serialize())
		$array = tx_div2007::toHashArray($hashData, $splitCharacters); 
		foreach((array) $array as $key => $value) {
			$this->set($key, $value);
		}
	}

	static public function toHashArray ($mixed, $splitCharacters = ',;:\s' ) {
        if(is_string($mixed)) {
            $array = self::explode($mixed, $splitCharacters); // TODO: Enable empty values by defining a better explode functions.
            for($i = 0; $i < count($array); $i = $i + 2) {
                $hashArray[$array[$i]] = $array[$i+1];
            }
        } elseif(is_array($mixed)) {
            $hashArray = $mixed;
        } elseif(is_object($mixed) && method_exists($mixed, 'getArrayCopy')) {
            $hashArray = $mixed->getArrayCopy();
        } else {
            $hashArray = array();
        }
        return $hashArray;
    }
    
	/**
	 * Explode a list into an array
	 *
	 * Explodes a string by any number of the given charactrs.
	 * By default it uses comma, semicolon, colon and whitespace.
	 *
	 * The returned values are trimmed.
	 *
	 * @param	string		string to split
	 * @param	string		regular expression that defines the splitter
	 * @return	array		with the results
	 */
	static public function explode ($value, $splitCharacters = ',;:\s') {
		$pattern = '/[' . $splitCharacters . ']+/';
		$results = preg_split($pattern, $value, -1, PREG_SPLIT_NO_EMPTY);
		$return = array();
		foreach($results as $result)
		 $return[] = trim($result);
		return (array) $return;
	}
	
	/**
	 * Assign a value to a key
	 *
	 * It's just a convenient way to use the offsetSet() function from _div2007_spl_arrayObject.
	 *
	 * @param	mixed		key
	 * @param	mixed		value
	 * @return	void
	 * @see		div2007_spl_arrayObject::offsetSet()
	 */
	public function set ($key, $value) {
		$this->offsetSet($key, $value);
	}

}
