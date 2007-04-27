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

require_once (t3lib_extMgm::extPath('party').'tests/class.tx_party_fixture.php');

tx_div::load('tx_party_models_person');
tx_div::load('tx_party_models_organisation');
tx_div::load('tx_party_models_personname');
tx_div::load('tx_party_models_organisationname');
tx_div::load('tx_party_models_address');
tx_div::load('tx_party_models_electronicaddressidentifier');
tx_div::load('tx_party_models_parties');
tx_div::load('tx_party_models_account');
tx_div::load('tx_party_models_allergy');
tx_div::load('tx_party_models_birthsign');
tx_div::load('tx_party_models_contact');
tx_div::load('tx_party_models_countryofresidence');
tx_div::load('tx_party_models_disability');
tx_div::load('tx_party_models_document');
tx_div::load('tx_party_models_type');
tx_div::load('tx_party_models_ethnicity');
tx_div::load('tx_party_models_event');
tx_div::load('tx_party_models_favourite');
tx_div::load('tx_party_models_habit');
tx_div::load('tx_party_models_hobby');
tx_div::load('tx_party_models_identifier');
tx_div::load('tx_party_models_image');
tx_div::load('tx_party_models_language');
tx_div::load('tx_party_models_mark');
tx_div::load('tx_party_models_membership');
tx_div::load('tx_party_models_nationality');
tx_div::load('tx_party_models_occupationrank');
tx_div::load('tx_party_models_occupationrole');
tx_div::load('tx_party_models_occupation');
tx_div::load('tx_party_models_organisationnature');

/**
 * Basic test case for checking the Party Model.
 * 
 * WARNING!!: Never ever run a unit test like this on a live site!!
 * WARNING!!: Writes and overwrites arbitrary records to PID 1!!
 *         
 *
 * @author	David Bruehlmeier <typo3@bruehlmeier.com>
 */
class tx_party_model_basic_testcase extends tx_t3unit_testcase {

	private $useFixture = false;
	
	public function __construct($name) {
		parent::__construct($name);
	}

	public function setUp() {
		if ($this->useFixture) {
			$fixture = t3lib_div::makeInstance('tx_party_fixture');
			$fixture->create(1,1);	// basic test dataset to PID
		}
	}
	
	public function tearDown () {
		// TODO: Delete all records and files
	}

	/*********************************************************
	 *
	 * READING TESTS
	 *
	 *********************************************************/

	public function test_getPartyInstance() {
		$object = tx_party_models_party::getInstance(534);

		self::assertSame(get_class($object),'tx_party_models_person');
		self::assertSame($object->getLabel(),'Delgado, Hubert - Fairfax');
		
		$object = tx_party_models_party::getInstance(2);
		self::assertSame(get_class($object),'tx_party_models_organisation');
		self::assertSame($object->getLabel(),'CFM Corporation - S. Carlo (Poschiavo)');
	}

	public function test_readPerson_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_person');
		$object->load(12);
				
		self::assertSame($object->get('marital_status'),'SEPARATED');
		self::assertSame($object->get('last_name'),'Omini');
		self::assertSame($object->get('locality'),'Fairfax');
		self::assertSame($object->get('electronic_address_identifier'),'safiye.omini@googlemail.com');
		self::assertSame($object->getLabel(),'Omini, Safiye - Fairfax');
	}
	
	public function test_readOrganisation_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_organisation');
		$object->load(1);

		self::assertSame($object->get('company_registration_id'),'2D43EE391CAFB86F8BBC463DD9D4B6C7');
		self::assertSame($object->get('organisation_name'),'Newton Mearns Church');
		self::assertSame($object->get('locality'),'Vendlincourt');
		self::assertSame($object->get('electronic_address_identifier'),'info@newton-mearns-church.com');
		self::assertSame($object->getLabel(),'Newton Mearns Church - Vendlincourt');
		
	}
	
	public function test_readPersonName_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_personname');
		$object->load(12);

		self::assertSame($object->get('last_name'),'Omini');
		self::assertSame($object->getLabel(),'Omini, Safiye');
	}
	
	public function test_readOrganisationName_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_organisationname');
		$object->load(1);
		
		self::assertSame($object->get('organisation_name'),'Newton Mearns Church');
		self::assertSame($object->getLabel(),'Newton Mearns Church');
	}
	

	public function test_readAddress_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_address');
		$object->load(1578);

		self::assertSame($object->get('locality'),'Vendlincourt');
		self::assertSame($object->getLabel(),'ch. du Fontenay 3, 2943 Vendlincourt (JU)');
	}

	
	public function test_readElectronicAddressIdentifier_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_electronicaddressidentifier');
		$object->load(1);

		self::assertSame($object->get('electronic_address_identifier'),'info@newton-mearns-church.com');
		self::assertSame($object->getLabel(),'info@newton-mearns-church.com');
	}
	
	public function test_readCollectionParties_byPid() {
		$object = t3lib_div::makeInstance('tx_party_models_parties');
		$object->loadByPid(1);
		
		self::assertSame($object->get('list')->count(),20);
	}
	
	public function test_readCollectionParties_byCountry() {
		$object = t3lib_div::makeInstance('tx_party_models_parties');
		$object->loadByCountry(41,TRUE);

		self::assertSame($object->get('list')->count(),3);
		
		$object = t3lib_div::makeInstance('tx_party_models_parties');
		$object->loadByCountry(41,FALSE);

		self::assertSame($object->get('list')->count(),5);
	}
	
	public function test_readAccount_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_account');
		$object->load(6);

		self::assertSame($object->get('account_id'),'YG-4603893db1cbf');
		self::assertSame($object->getLabel(),'YG-4603893db1cbf (Anheuser-Busch - Genthod)');
	}
	
	public function test_readAllergy_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_allergy');
		$object->load(1);
		
		self::assertSame($object->get('short_title'),'Allergic Dermatitis');
		self::assertSame($object->getLabel(),'Allergic Dermatitis');
	}
	
	public function test_readBirthSign_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_birthsign');
		$object->load(1);
		
		self::assertSame($object->get('short_title'),'Aries');
		self::assertSame($object->getLabel(),'Aries');
	}
	
	public function test_readContact_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_contact');
		$object->load(808);
		
		self::assertSame($object->get('contact'),'Excepteur sint occaecat cupidatat non proident.');
		self::assertSame($object->getLabel(),'Excepteur sint occaecat cupidatat non proident.');
	}
	
	public function test_readCountryOfResidence_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_countryofresidence');
		$object->load(1113);
		
		self::assertSame($object->get('party'),'2565');
		self::assertSame($object->getLabel(),'Palestine (Balshagray Victoria Park Church)');
	}
	
	public function test_readDisability_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_disability');
		$object->load(24);
		
		self::assertSame($object->get('disability'),'Alzheimers disease');
		self::assertSame($object->getLabel(),'Alzheimers disease (Schrago, Fernand)');
	}
	
	public function test_readDocument_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_document');
		$object->load(1417);
		
		self::assertSame($object->get('document_id'),'2D4EC0869D');
		self::assertSame($object->getLabel(),'Credit Card (Master Card): 2D4EC0869D (Lehmann, Charles)');
	}
	
	public function test_readType_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_type');
		$object->load(42);
		
		self::assertSame($object->get('short_title'),'Taxation ID');
		self::assertSame($object->getLabel(),'Taxation ID');
	}
	
	public function test_type_isAllowedForPartyType() {
		// Any partyType is allowed
		$object = t3lib_div::makeInstance('tx_party_models_type');
		$object->load(42);
		self::assertSame($object->isAllowedForPartyType(0),true);
		self::assertSame($object->isAllowedForPartyType(1),true);
		
		// Only persons are allowed
		$object = t3lib_div::makeInstance('tx_party_models_type');
		$object->load(37);
		self::assertSame($object->isAllowedForPartyType(1),false);
		self::assertSame($object->isAllowedForPartyType(0),true);
		
		// Only organisations are allowed
		$object = t3lib_div::makeInstance('tx_party_models_type');
		$object->load(57);
		self::assertSame($object->isAllowedForPartyType(0),false);
		self::assertSame($object->isAllowedForPartyType(1),true);
	}
	
	public function test_type_isAllowedForField() {
		$object = t3lib_div::makeInstance('tx_party_models_type');
		$object->load(1);
		
		self::assertSame($object->isAllowedForField('TX_PARTY_ACCOUNTS-ACCOUNT_TYPE'),true);
		self::assertSame($object->isAllowedForField('TX_PARTY_CONTACTS-TYPE'),false);
	}
	
	public function test_readEthnicity_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_ethnicity');
		$object->load(11);
		
		self::assertSame($object->get('long_title'),'African');
		self::assertSame($object->getLabel(),'African');
	}
	
	public function test_readEvent_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_event');
		$object->load(937);
		
		self::assertSame($object->get('remarks'),'Consectetur adipisicing elit.');
		self::assertSame($object->getLabel(),'Marriage (Schrago, Fernand)');
	}
	
	public function test_readFavourite_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_favourite');
		$object->load(153);
		
		self::assertSame($object->get('favourite'),'Excepteur sint occaecat cupidatat non proident.');
		self::assertSame($object->getLabel(),'Excepteur sint occaecat cupidatat non proident. (Delgado, Hubert - Fairfax)');
	}
	
	public function test_readHabit_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_habit');
		$object->load(1);
		
		self::assertSame($object->get('title'),'Smoking');
		self::assertSame($object->getLabel(),'Smoking');
	}
	
	public function test_readHobby_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_hobby');
		$object->load(24);
		
		self::assertSame($object->get('title'),'Educational Courses');
		self::assertSame($object->getLabel(),'Educational Courses');
	}
	
	public function test_readIdentifier_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_identifier');
		$object->load(250);
		
		self::assertSame($object->get('identifier'),'02FA9F33');
		self::assertSame($object->getLabel(),'Taxation ID: 02FA9F33 (Cumbernauld Old Church)');
	}
	
	public function test_readImage_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_image');
		$object->load(1);

		$image = substr($object->get('image'),0,19);	// The suffix changes with every import
		self::assertSame($image,'10049064_3409d92e27');
		self::assertSame($object->getLabel(),'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.');
	}
	
	public function test_readLanguage_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_language');
		$object->load(120);
		
		self::assertSame($object->get('read_skills'),'POOR');
		self::assertSame($object->getLabel(),'Sanskrit (Balestra, Daniela)');
	}
	
	public function test_readMark_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_mark');
		$object->load(1);

		self::assertSame($object->get('body_part'),'Arm');
		self::assertSame($object->getLabel(),'Arm: Cut');
	}
	
	public function test_readMembership_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_membership');
		$object->load(1);

		self::assertSame($object->get('issue_date'),'1177538400');
		self::assertSame($object->getLabel(),'Trial: T3 Sports (Meyer, Caroline)');
	}
	
	public function test_readNationality_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_nationality');
		$object->load(3);

		self::assertSame($object->get('country'),'153');
		self::assertSame($object->getLabel(),'By Naturalization: Niger (Anheuser-Busch - Genthod)');
	}
	
	public function test_readOccupationRank_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_occupationrank');
		$object->load(1);

		self::assertSame($object->get('short_title'),'Officer');
		self::assertSame($object->getLabel(),'Officer');
	}
	
	public function test_readOccupationRole_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_occupationrole');
		$object->load(1);

		self::assertSame($object->get('long_title'),'Coach');
		self::assertSame($object->getLabel(),'Coach');
	}
	
	public function test_readOccupation_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_occupation');
		$object->load(1);

		self::assertSame($object->get('remarks'),'');
		self::assertSame($object->getLabel(),'Coach: Lead Coach (Miller, Steve)');
	}
	
	public function test_readOrganisationNature_basic() {
		$object = t3lib_div::makeInstance('tx_party_models_organisationnature');
		$object->load(3);

		self::assertSame($object->get('title'),'Association');
		self::assertSame($object->getLabel(),'Association');
	}
	
	
/*
	public function test_exportFixture() {
		debug ($object);
		debug ($object->getLabel());
		$fixture = t3lib_div::makeInstance('tx_party_fixture');
		$fixture->export(19);
	}
*/
	

}

?>