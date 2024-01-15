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
 * Model for the class Mark
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

class Mark extends BaseModel
{
    protected $table = 'tx_party_marks';

    /**
     * Returns the label of the Mark in the following format:
     * "[body_part]: [mark] ([party])"
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the Mark
     */
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $label = array();
        $out = '';

        // Get all relevant parts
        $bodyPart = $this->get('body_part');
        $mark = $this->get('mark');
        $party = tx_party_models_party::getInstance($this->get('party'));

        // Assemble the label
        if ($bodyPart) {
            $label[0] = $bodyPart . ':';
        }
        if ($mark) {
            $label[1] = $mark;
        }
        if (!$party->isEmpty()) {
            $label[2] = '(' . $party->getLabel() . ')';
        }

        $out = implode(' ', $label);
        return $out;
    }
}
