<?php

namespace JambageCom\Party\Hook;

use TYPO3\CMS\Core\Utility\GeneralUtility;

/***************************************************************
*  Copyright notice
*
*  (c) 2013 David Bruehlmeier (typo3@bruehlmeier.com)
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
class Labels
{
    /**
     * Factory function which is called by label_userFunc. The function decides how to build the label.
     * The result is directly written to $params['title'], since this parameter is passed by reference.
     *
     * The function gets the label from the proper model.
     *
     * @param	array		$params: Parameters, passed by reference!
     * @param	object		$pObj: Parent object from the calling function, not used.
     * @return	string		The result is also written into $params['title']
     */
    public function getLabel(
        &$params,
        $pObj
    ) {
        // Only get labels for tx_party* tables
        if (!substr((string) $params['table'], 0, 8) == 'tx_party') {
            return '';
        }

        // Init
        $label = '';
        $className = '';

        // Get the className of the model
        switch ($params['table']) {
            case 'tx_party_addresses':
                $className = \JambageCom\Party\Model\Address::class;
                break;

            case 'tx_party_languages':
                $className = \JambageCom\Party\Model\Language::class;
                break;

            case 'tx_party_nationalities':
                $className = \JambageCom\Party\Model\Nationality::class;
                break;

            case 'tx_party_names':
                if ($params['row']['type'] == 0) {
                    $className = \JambageCom\Party\Model\PersonName::class;
                }
                if ($params['row']['type'] == 1) {
                    $className = \JambageCom\Party\Model\OrganisationName::class;
                }
                break;

            case 'tx_party_parties':
                if ($params['row']['type'] == 0) {
                    $className = \JambageCom\Party\Model\Person::class;
                }
                if ($params['row']['type'] == 1) {
                    $className = \JambageCom\Party\Model\Organisation::class;
                }
                break;

            case 'tx_party_visas':
                $className = \JambageCom\Party\Model\Visa::class;
                break;

            case 'tx_party_events':
                $className = \JambageCom\Party\Model\Event::class;
                break;

            case 'tx_party_memberships':
                $className = \JambageCom\Party\Model\Membership::class;
                break;

            case 'tx_party_countries_of_residence':
                $className = \JambageCom\Party\Model\CountryOfResidence::class;
                break;

            case 'tx_party_occupations':
                $className = \JambageCom\Party\Model\Occupation::class;
                break;

            case 'tx_party_address_usages':
                $className = \JambageCom\Party\Model\Addresses::class;
                break;

            case 'tx_party_contact_number_usages':
                $className = \JambageCom\Party\Model\ContactNumberUsage::class;
                break;

            case 'tx_party_electronic_address_identifier_usages':
                $className = \JambageCom\Party\Model\ElectronicAddressIdentifierUsage::class;
                break;

            case 'tx_party_relationships':
                $className = \JambageCom\Party\Model\Relationship::class;
                break;

            default:
                debug('No model className found for table ' . $params['table'] . '. (Hook/Labels)'); // keep this
                break;
        }

        // Get the label from the model
        if ($className !== '' && $className !== '0') {
            $model = GeneralUtility::makeInstance($className);
            $model->load($params['row']['uid']);
            $label = $model->getLabel();
        }

        // Write new label back to the params-array (passed by reference)
        if ($label != '') {
            $params['title'] = $label;
        }

        return $label;
    }
}
