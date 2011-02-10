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


require_once(t3lib_extMgm::extPath('div2007').'class.tx_div2007.php');

tx_div2007::load('tx_party_models_person');
tx_div2007::load('tx_party_models_organisation');
tx_div2007::load('tx_party_models_personname');
tx_div2007::load('tx_party_models_language');
tx_div2007::load('tx_party_models_nationality');
tx_div2007::load('tx_party_models_visa');
tx_div2007::load('tx_party_models_countryofresidence');
tx_div2007::load('tx_party_models_organisationname');
tx_div2007::load('tx_party_models_address');
tx_div2007::load('tx_party_models_occupation');
tx_div2007::load('tx_party_models_addresses');
tx_div2007::load('tx_party_models_event');
tx_div2007::load('tx_party_models_membership');
tx_div2007::load('tx_party_models_contactnumberusage');
tx_div2007::load('tx_party_models_electronicaddressidentifierusage');
tx_div2007::load('tx_party_models_relationship');

/**
 * Building (backend) labels, using label_userFunc.
 *
 * @author David Bruehlmeier <typo3@bruehlmeier.com>
 */
class tx_party_labels {



	/**
	 * Factory function which is called by label_userFunc. The function decides how to build the label.
	 * The result is directly written to $params['title'], since this parameter is passed by reference.
	 *
	 * The function gets the label from the proper model.
	 *
	 * @param	array		$params: Parameters, passed by reference!
	 * @param	object		$pObj: Parent object from the calling function, not used.
	 * @return	void		The result is directly written to $params['title']
	 */
	public function getLabel(&$params, $pObj)	{

		// Only get labels for tx_party* tables
		if (!substr($params['table'],0,8) == 'tx_party') return '';

		// Init
		$label = '';
		$className = '';

		// Get the className of the model
		switch ($params['table']) {
			case 'tx_party_names':
				if ($params['row']['type'] == 0) $className = 'tx_party_models_personname';
				if ($params['row']['type'] == 1) $className = 'tx_party_models_organisationname';
				break;

			case 'tx_party_parties':
				if ($params['row']['type'] == 0) $className = 'tx_party_models_person';
				if ($params['row']['type'] == 1) $className = 'tx_party_models_organisation';
				break;

			case 'tx_party_addresses':
				$className = 'tx_party_models_address';
				break;

			case 'tx_party_languages':
				$className = 'tx_party_models_language';
				break;

			case 'tx_party_nationalities':
				$className = 'tx_party_models_nationality';
				break;

			case 'tx_party_visas':
				$className = 'tx_party_models_visa';
				break;

			case 'tx_party_events':
				$className = 'tx_party_models_event';
				break;

			case 'tx_party_memberships':
				$className = 'tx_party_models_membership';
				break;

			case 'tx_party_countries_of_residence':
				$className = 'tx_party_models_countryofresidence';
				break;

			case 'tx_party_occupations':
				$className = 'tx_party_models_occupation';
				break;

			case 'tx_party_address_usages':
				$className = 'tx_party_models_addresses';
				break;

			case 'tx_party_contact_number_usages':
				$className = 'tx_party_models_contactnumberusage';
				break;

			case 'tx_party_electronic_address_identifier_usages':
				$className = 'tx_party_models_electronicaddressidentifierusage';
				break;

			case 'tx_party_relationships':
				$className = 'tx_party_models_relationship';
				break;

			default:
				debug ('No model className found for table '.$params['table'].'. (hooks/tx_party_labels)');
				break;
		}

		// Get the label from the model
		if ($className) {
			$model = t3lib_div::makeInstance($className);
			$model->load($params['row']['uid']);
			$label = $model->getLabel();
		}

		// Write new label back to the params-array (passed by reference)
		if ($label != '') $params['title'] = $label;
	}

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/hooks/class.tx_party_labels.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/hooks/class.tx_party_labels.php']);
}


?>