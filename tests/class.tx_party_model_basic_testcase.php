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

require_once(t3lib_extMgm::extPath('div').'class.tx_div.php');

/**
 * Basic test case for checking the Party Model.
 * 
 * WARNING!!: Never ever run a unit test like this on a live site!!
 * WARNING!!: DELETES _ALL_ party data from the database!!
 *         
 *
 * @author	David Bruehlmeier <typo3@bruehlmeier.com>
 */
class tx_party_model_basic_testcase extends tx_t3unit_testcase {

	private $fixture;				// Instance of the fixture class
	private $useFixture = false;	// If false, the fixture will _not_ be loaded. Much faster, but the consitency of the test data is not assured.
	private $testPage;				// PID of the test page with the fixture
	
	public function __construct($name) {
		$this->fixture = tx_div::makeInstance('tx_party_tests_fixture');
		parent::__construct($name);
	}

	public function setUp() {
		if ($this->useFixture) {			
			$this->fixture->deleteAll();					// Delete all party data
			$this->testPage = $this->fixture->create(1);	// Write basic test dataset to a new page
		}
	}
	
	public function tearDown () {
		if ($this->useFixture) {
			$this->fixture->deletePage($this->testPage);	// Delete the fixture from the test page
		}
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
		$object = tx_div::makeInstance('tx_party_models_person');
		$object->load(12);
		self::assertSame($object->get('marital_status'),'SEPARATED');
		self::assertSame($object->get('last_name'),'Omini');
		self::assertSame($object->get('locality'),'Fairfax');
		self::assertSame($object->get('electronic_address_identifier'),'safiye.omini@googlemail.com');
		self::assertSame($object->getLabel(),'Omini, Safiye - Fairfax');
	}
	
	public function test_readOrganisation_basic() {
		$object = tx_div::makeInstance('tx_party_models_organisation');
		$object->load(1);
		self::assertSame($object->get('company_registration_id'),'2D43EE391CAFB86F8BBC463DD9D4B6C7');
		self::assertSame($object->get('organisation_name'),'Newton Mearns Church');
		self::assertSame($object->get('locality'),'Vendlincourt');
		self::assertSame($object->get('electronic_address_identifier'),'info@newton-mearns-church.com');
		self::assertSame($object->getLabel(),'Newton Mearns Church - Vendlincourt');
		
	}
	
	public function test_readPersonName_basic() {
		$object = tx_div::makeInstance('tx_party_models_personname');
		$object->load(12);
		self::assertSame($object->get('last_name'),'Omini');
		self::assertSame($object->getLabel(),'Omini, Safiye');
	}
	
	public function test_readOrganisationName_basic() {
		$object = tx_div::makeInstance('tx_party_models_organisationname');
		$object->load(1);
		self::assertSame($object->get('organisation_name'),'Newton Mearns Church');
		self::assertSame($object->getLabel(),'Newton Mearns Church');
	}
	

	public function test_readAddress_basic() {
		$object = tx_div::makeInstance('tx_party_models_address');
		$object->load(1578);
		self::assertSame($object->get('locality'),'Vendlincourt');
		self::assertSame($object->getLabel(),'ch. du Fontenay 3, 2943 Vendlincourt (JU)');
	}

	
	public function test_readElectronicAddressIdentifier_basic() {
		$object = tx_div::makeInstance('tx_party_models_electronicaddressidentifier');
		$object->load(1);
		self::assertSame($object->get('electronic_address_identifier'),'info@newton-mearns-church.com');
		self::assertSame($object->getLabel(),'info@newton-mearns-church.com');
	}
	
	public function test_readCollectionParties_byPid() {
		$object = tx_div::makeInstance('tx_party_models_parties');
		
		// Get current PID
		if ($this->testPage) {
			$pid = $this->testPage;	// Only available if useFixture is true
		} else {
			$rec = t3lib_BEfunc::getRecord('tx_party_parties',1,'pid');
			$pid = $rec['pid'];
		}
		
		$object->loadByPid($pid);
		self::assertSame($object->get('list')->count(),22);
	}
	
	public function test_readCollectionParties_byCountry() {
		$object = tx_div::makeInstance('tx_party_models_parties');
		$object->loadByCountry(41,TRUE);
		self::assertSame($object->get('list')->count(),3);
		
		$object = tx_div::makeInstance('tx_party_models_parties');
		$object->loadByCountry(41,FALSE);
		self::assertSame($object->get('list')->count(),5);
	}
	
	public function test_readAccount_basic() {
		$object = tx_div::makeInstance('tx_party_models_account');
		$object->load(6);
		self::assertSame($object->get('account_id'),'YG-4603893db1cbf');
		self::assertSame($object->getLabel(),'YG-4603893db1cbf (Anheuser-Busch - Genthod)');
	}
	
	public function test_readAllergy_basic() {
		$object = tx_div::makeInstance('tx_party_models_allergy');
		$object->load(1);
		self::assertSame($object->get('short_title'),'Allergic Dermatitis');
		self::assertSame($object->getLabel(),'Allergic Dermatitis');
	}
	
	public function test_readBirthSign_basic() {
		$object = tx_div::makeInstance('tx_party_models_birthsign');
		$object->load(1);
		self::assertSame($object->get('short_title'),'Aries');
		self::assertSame($object->getLabel(),'Aries');
	}
	
	public function test_readContact_basic() {
		$object = tx_div::makeInstance('tx_party_models_contact');
		$object->load(808);
		self::assertSame($object->get('contact'),'Excepteur sint occaecat cupidatat non proident.');
		self::assertSame($object->getLabel(),'Excepteur sint occaecat cupidatat non proident.');
	}
	
	public function test_readCountryOfResidence_basic() {
		$object = tx_div::makeInstance('tx_party_models_countryofresidence');
		$object->load(1113);
		self::assertSame($object->get('party'),'2565');
		self::assertSame($object->getLabel(),'Palestine (Balshagray Victoria Park Church)');
	}
	
	public function test_readDisability_basic() {
		$object = tx_div::makeInstance('tx_party_models_disability');
		$object->load(24);
		self::assertSame($object->get('disability'),'Alzheimers disease');
		self::assertSame($object->getLabel(),'Alzheimers disease (Schrago, Fernand)');
	}
	
	public function test_readDocument_basic() {
		$object = tx_div::makeInstance('tx_party_models_document');
		$object->load(1417);
		self::assertSame($object->get('document_id'),'2D4EC0869D');
		self::assertSame($object->getLabel(),'Credit Card (Master Card): 2D4EC0869D (Lehmann, Charles)');
	}
	
	public function test_readType_basic() {
		$object = tx_div::makeInstance('tx_party_models_type');
		$object->load(42);
		self::assertSame($object->get('short_title'),'Taxation ID');
		self::assertSame($object->getLabel(),'Taxation ID');
	}
	
	public function test_type_isAllowedForAnyPartyType() {
		$object = tx_div::makeInstance('tx_party_models_type');
		$object->load(42);
		self::assertSame($object->isAllowedForPartyType(0),true);
		self::assertSame($object->isAllowedForPartyType(1),true);
	}
	
	public function test_type_isAllowedOnlyForPersons() {
		$object = tx_div::makeInstance('tx_party_models_type');
		$object->load(37);
		self::assertSame($object->isAllowedForPartyType(1),false);
		self::assertSame($object->isAllowedForPartyType(0),true);
	}
	
	public function test_type_isAllowedOnlyForOrganisations() {
		$object = tx_div::makeInstance('tx_party_models_type');
		$object->load(57);
		self::assertSame($object->isAllowedForPartyType(0),false);
		self::assertSame($object->isAllowedForPartyType(1),true);
	}
	
	public function test_type_isAllowedForField() {
		$object = tx_div::makeInstance('tx_party_models_type');
		$object->load(1);
		self::assertSame($object->isAllowedForField('TX_PARTY_ACCOUNTS-ACCOUNT_TYPE'),true);
		self::assertSame($object->isAllowedForField('TX_PARTY_CONTACTS-TYPE'),false);
	}
	
	public function test_readEthnicity_basic() {
		$object = tx_div::makeInstance('tx_party_models_ethnicity');
		$object->load(11);
		self::assertSame($object->get('long_title'),'African');
		self::assertSame($object->getLabel(),'African');
	}
	
	public function test_readEvent_basic() {
		$object = tx_div::makeInstance('tx_party_models_event');
		$object->load(937);
		self::assertSame($object->get('remarks'),'Consectetur adipisicing elit.');
		self::assertSame($object->getLabel(),'Marriage (Schrago, Fernand)');
	}
	
	public function test_readFavourite_basic() {
		$object = tx_div::makeInstance('tx_party_models_favourite');
		$object->load(153);
		self::assertSame($object->get('favourite'),'Excepteur sint occaecat cupidatat non proident.');
		self::assertSame($object->getLabel(),'Excepteur sint occaecat cupidatat non proident. (Delgado, Hubert - Fairfax)');
	}
	
	public function test_readHabit_basic() {
		$object = tx_div::makeInstance('tx_party_models_habit');
		$object->load(1);
		self::assertSame($object->get('title'),'Smoking');
		self::assertSame($object->getLabel(),'Smoking');
	}
	
	public function test_readHobby_basic() {
		$object = tx_div::makeInstance('tx_party_models_hobby');
		$object->load(24);
		self::assertSame($object->get('title'),'Educational Courses');
		self::assertSame($object->getLabel(),'Educational Courses');
	}
	
	public function test_readIdentifier_basic() {
		$object = tx_div::makeInstance('tx_party_models_identifier');
		$object->load(250);
		self::assertSame($object->get('identifier'),'02FA9F33');
		self::assertSame($object->getLabel(),'Taxation ID: 02FA9F33 (Cumbernauld Old Church)');
	}
	
	public function test_readImage_basic() {
		$object = tx_div::makeInstance('tx_party_models_image');
		$object->load(1);
		$image = substr($object->get('image'),0,19);	// The suffix changes with every import
		self::assertSame($image,'10049064_3409d92e27');
		self::assertSame($object->getLabel(),'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.');
	}
	
	public function test_readLanguage_basic() {
		$object = tx_div::makeInstance('tx_party_models_language');
		$object->load(120);
		self::assertSame($object->get('read_skills'),'POOR');
		self::assertSame($object->getLabel(),'Sanskrit (Balestra, Daniela)');
	}
	
	public function test_readMark_basic() {
		$object = tx_div::makeInstance('tx_party_models_mark');
		$object->load(1);
		self::assertSame($object->get('body_part'),'Arm');
		self::assertSame($object->getLabel(),'Arm: Cut');
	}
	
	public function test_readMembership_basic() {
		$object = tx_div::makeInstance('tx_party_models_membership');
		$object->load(1);
		self::assertSame($object->get('issue_date'),'1177538400');
		self::assertSame($object->getLabel(),'Trial: T3 Sports (Meyer, Caroline)');
	}
	
	public function test_readNationality_basic() {
		$object = tx_div::makeInstance('tx_party_models_nationality');
		$object->load(3);
		self::assertSame($object->get('country'),'153');
		self::assertSame($object->getLabel(),'By Naturalization: Niger (Anheuser-Busch - Genthod)');
	}
	
	public function test_readOccupationRank_basic() {
		$object = tx_div::makeInstance('tx_party_models_occupationrank');
		$object->load(1);
		self::assertSame($object->get('short_title'),'Officer');
		self::assertSame($object->getLabel(),'Officer');
	}
	
	public function test_readOccupationRole_basic() {
		$object = tx_div::makeInstance('tx_party_models_occupationrole');
		$object->load(1);
		self::assertSame($object->get('long_title'),'Coach');
		self::assertSame($object->getLabel(),'Coach');
	}
	
	public function test_readOccupation_basic() {
		$object = tx_div::makeInstance('tx_party_models_occupation');
		$object->load(1);
		self::assertSame($object->get('remarks'),'');
		self::assertSame($object->getLabel(),'Coach: Lead Coach (Miller, Steve)');
	}
	
	public function test_readOrganisationNature_basic() {
		$object = tx_div::makeInstance('tx_party_models_organisationnature');
		$object->load(3);
		self::assertSame($object->get('title'),'Association');
		self::assertSame($object->getLabel(),'Association');
	}
	
	public function test_readPersonNameTitle_basic() {
		$object = tx_div::makeInstance('tx_party_models_personnametitle');
		$object->load(2);
		self::assertSame($object->get('long_title'),'Misses');
		self::assertSame($object->getLabel(),'Mrs.');
	}
	
	public function test_readPhysicalStatus_basic() {
		$object = tx_div::makeInstance('tx_party_models_physicalstatus');
		$object->load(1);
		self::assertSame($object->get('long_title'),'Alive');
		self::assertSame($object->getLabel(),'Alive');
	}
	
	public function test_readPreference_basic() {
		$object = tx_div::makeInstance('tx_party_models_preference');
		$object->load(2);
		self::assertSame($object->get('preference'),'Ut aliquip ex ea commodo consequat.');
		self::assertSame($object->getLabel(),'Airplane seating: Ut aliquip ex ea commodo consequat. (Kobler, Maria)');
	}
	
	public function test_readQualificationStatus_basic() {
		$object = tx_div::makeInstance('tx_party_models_qualificationstatus');
		$object->load(2);
		self::assertSame($object->get('title'),'In Training');
		self::assertSame($object->getLabel(),'In Training');
	}
	
	public function test_readQualification_basic() {
		$object = tx_div::makeInstance('tx_party_models_qualification');
		$object->load(6);
		self::assertSame($object->get('start_date'),'1555562496');
		self::assertSame($object->getLabel(),'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi. (Dzung, Stefan)');
	}
	
	public function test_readRelationshipType_basic() {
		$object = tx_div::makeInstance('tx_party_models_relationshiptype');
		$object->load(1);
		self::assertSame($object->get('description_as_primary'),'Has wife');
		self::assertSame($object->getLabel(),'Marriage');
		self::assertSame($object->isRelationshipAllowed(0,0),true);
		self::assertSame($object->isRelationshipAllowed(0,1),false);
		self::assertSame($object->isRelationshipAllowed(1,0),false);
		self::assertSame($object->isRelationshipAllowed(1,1),false);
	}
	
	public function test_readRelationship_basic() {
		$object = tx_div::makeInstance('tx_party_models_relationship');
		$object->load(1);
		self::assertSame($object->get('date_established'),'1178056800');
		self::assertSame($object->getLabel(),'Finn, Roger Has wife: Finn, Heather');
	}
	
	public function test_readReligion_basic() {
		$object = tx_div::makeInstance('tx_party_models_religion');
		$object->load(1);
		self::assertSame($object->get('title'),'Christianity');
		self::assertSame($object->getLabel(),'Christianity');
	}
	
	public function test_readRevenue_basic() {
		$object = tx_div::makeInstance('tx_party_models_revenue');
		$object->load(214);
		self::assertSame($object->get('period_from'),'854589440');
		self::assertSame($object->getLabel(),'AED 332120.00 (Delgado, Hubert - Fairfax)');
	}
	
	public function test_readStockMarket_basic() {
		$object = tx_div::makeInstance('tx_party_models_stockmarket');
		$object->load(3);
		self::assertSame($object->get('listed_code'),'EHHQ');
		self::assertSame($object->getLabel(),'EHHQ: MARCHE INTERBANCAIRE DES DEVISES M.I.D. (Anheuser-Busch - Genthod)');
	}
	
	public function test_readUsage_basic() {
		$object = tx_div::makeInstance('tx_party_models_usage');
		$object->load(1);
		self::assertSame($object->get('short_title'),'Home');
		self::assertSame($object->getLabel(),'Home');
	}
	
	public function test_readVehicleManufacturer_basic() {
		$object = tx_div::makeInstance('tx_party_models_vehiclemanufacturer');
		$object->load(1);
		self::assertSame($object->get('title'),'Ford');
		self::assertSame($object->getLabel(),'Ford');
	}
	
	public function test_readVehicle_basic() {
		$object = tx_div::makeInstance('tx_party_models_vehicle');
		$object->load(4);
		self::assertSame($object->get('license_plate'),'XL-7664');
		self::assertSame($object->getLabel(),'Ford: XL-7664 (Anheuser-Busch - Genthod)');
	}
	
	public function test_readVisa_basic() {
		$object = tx_div::makeInstance('tx_party_models_visa');
		$object->load(1);
		self::assertSame($object->get('number'),'4711');
		self::assertSame($object->getLabel(),'Andorra (Finn, Roger)');
	}
	
	
	
/*
	public function test_exportFixture() {
		$fixture = tx_div::makeInstance('tx_party_tests_fixture');
		$fixture->export(13);
	}
*/
	

}

?>