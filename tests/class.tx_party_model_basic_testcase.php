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


require_once (t3lib_extMgm::extPath('party').'models/class.tx_party_models_person.php');
require_once (t3lib_extMgm::extPath('party').'models/class.tx_party_models_organisation.php');
require_once (t3lib_extMgm::extPath('party').'models/class.tx_party_models_person_name.php');
require_once (t3lib_extMgm::extPath('party').'models/class.tx_party_models_organisation_name.php');
require_once (t3lib_extMgm::extPath('party').'models/class.tx_party_models_address.php');
require_once (t3lib_extMgm::extPath('party').'models/class.tx_party_models_electronic_address_identifier.php');

/**
 * Basic test case for checking the Party Model.
 * 
 * WARNING: Never ever run a unit test like this on a live site!
 *         
 *
 * @author	David Bruehlmeier <typo3@bruehlmeier.com>
 * @todo	Add permanent fixture
 */
class tx_party_model_basic_testcase extends tx_t3unit_testcase {
	
	public function __construct ($name) {
		global $TYPO3_DB, $BE_USER;

		parent::__construct ($name);
		$TYPO3_DB->debugOutput = TRUE;
	}

	public function setUp() {
		global $TYPO3_DB;
	}
	
	public function tearDown () {
		global $TYPO3_DB;
	}

	/*********************************************************
	 *
	 * READING TESTS
	 *
	 *********************************************************/

	public function test_readPerson_basic() {
		$person = t3lib_div::makeInstance('tx_party_models_person');
		$person->load(12);
				
		self::assertSame($person->get('marital_status'),'SEPARATED','The marital status is not "separated"');
		self::assertSame($person->get('last_name'),'Omini','The last name of the standard name is not "Omini"');
		self::assertSame($person->get('locality'),'Fairfax','The locality of the standard address is not "Fairfax"');
		self::assertSame($person->get('electronic_address_identifier'),'safiye.omini@googlemail.com','The locality of the standard address is not "safiye.omini@googlemail.com"');
		self::assertSame($person->getLabel(),'Omini, Safiye - Fairfax','The label is not "Omini, Safiye - Fairfax"');
	}
	
	public function test_readOrganisation_basic() {
		$organisation = t3lib_div::makeInstance('tx_party_models_organisation');
		$organisation->load(1);

		self::assertSame($organisation->get('company_registration_id'),'2D43EE391CAFB86F8BBC463DD9D4B6C7','The company registration ID is not "2D43EE391CAFB86F8BBC463DD9D4B6C7"');
		self::assertSame($organisation->get('organisation_name'),'Newton Mearns Church','The organisation name of the standard name is not "Newton Mearns Church"');
		self::assertSame($organisation->get('locality'),'Vendlincourt','The locality of the standard address is not "Vendlincourt"');
		self::assertSame($organisation->get('electronic_address_identifier'),'info@newton-mearns-church.com','The locality of the standard address is not "info@newton-mearns-church.com"');
		self::assertSame($organisation->getLabel(),'Newton Mearns Church - Vendlincourt','The label is not "Newton Mearns Church - Vendlincourt"');
		
	}
	
	public function test_readPersonName_basic() {
		$personName = t3lib_div::makeInstance('tx_party_models_person_name');
		$personName->load(12);

		self::assertSame($personName->get('last_name'),'Omini','The last name is not "Omini"');
		self::assertSame($personName->getLabel(),'Omini, Safiye','The label is not "Omini, Safiye"');
	}
	
	public function test_readOrganisationName_basic() {
		$organisationName = t3lib_div::makeInstance('tx_party_models_organisation_name');
		$organisationName->load(1);
		
		self::assertSame($organisationName->get('organisation_name'),'Newton Mearns Church','The last name is not "Newton Mearns Church"');
		self::assertSame($organisationName->getLabel(),'Newton Mearns Church','The label is not "Newton Mearns Church"');
	}
	
	public function test_readAddress_basic() {
		$address = t3lib_div::makeInstance('tx_party_models_address');
		$address->load(1);

		self::assertSame($address->get('locality'),'Bonfol','The locality is not "Bonfol"');
		self::assertSame($address->getLabel(),'rue du Chasseron 35, 2944 Bonfol (JU)','The label is not "rue du Chasseron 35, 2944 Bonfol (JU)"');
	}
	
	public function test_readElectronicAddressIdentifier_basic() {
		$electronicAddressIdentifier = t3lib_div::makeInstance('tx_party_models_electronic_address_identifier');
		$electronicAddressIdentifier->load(1);

		self::assertSame($electronicAddressIdentifier->get('electronic_address_identifier'),'info@newton-mearns-church.com','The electronic address identifier is not "info@newton-mearns-church.com"');
		self::assertSame($electronicAddressIdentifier->getLabel(),'info@newton-mearns-church.com','The label is not "info@newton-mearns-church.com"');
	}
	

}

?>