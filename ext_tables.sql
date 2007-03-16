#
# Table structure for table 'tx_party_birth_signs'
#
CREATE TABLE tx_party_birth_signs (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_ethnicities'
#
CREATE TABLE tx_party_ethnicities (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_habits'
#
CREATE TABLE tx_party_habits (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_hobbies'
#
CREATE TABLE tx_party_hobbies (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_occupation_ranks'
#
CREATE TABLE tx_party_occupation_ranks (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_occupation_roles'
#
CREATE TABLE tx_party_occupation_roles (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_organisation_natures'
#
CREATE TABLE tx_party_organisation_natures (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_person_name_titles'
#
CREATE TABLE tx_party_person_name_titles (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_physical_status'
#
CREATE TABLE tx_party_physical_status (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_qualification_status'
#
CREATE TABLE tx_party_qualification_status (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_religions'
#
CREATE TABLE tx_party_religions (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_types'
#
CREATE TABLE tx_party_types (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	allowed_for varchar(1000) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_vehicle_manufacturer'
#
CREATE TABLE tx_party_vehicle_manufacturer (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l18n_parent int(11) DEFAULT '0' NOT NULL,
	l18n_diffsource mediumblob NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_accounts'
#
CREATE TABLE tx_party_accounts (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	organisation int(11) DEFAULT '0' NOT NULL,
	ownership_type int(11) DEFAULT '0' NOT NULL,
	account_id varchar(30) DEFAULT '' NOT NULL,
	issuing_authority varchar(30) DEFAULT '' NOT NULL,
	account_type blob NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_addresses'
#
CREATE TABLE tx_party_addresses (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	parties tinytext NOT NULL,
	locality varchar(90) DEFAULT '' NOT NULL,
	thoroughfare varchar(90) DEFAULT '' NOT NULL,
	thoroughfare_number varchar(90) DEFAULT '' NOT NULL,
	building_name varchar(90) DEFAULT '' NOT NULL,
	location varchar(90) DEFAULT '' NOT NULL,
	lot varchar(90) DEFAULT '' NOT NULL,
	premise_type blob NOT NULL,
	internal_thoroughfare varchar(90) DEFAULT '' NOT NULL,
	reference_location varchar(90) DEFAULT '' NOT NULL,
	post_code varchar(90) DEFAULT '' NOT NULL,
	rural_delivery varchar(90) DEFAULT '' NOT NULL,
	postal_delivery_point varchar(90) DEFAULT '' NOT NULL,
	post_office varchar(90) DEFAULT '' NOT NULL,
	post_town varchar(90) DEFAULT '' NOT NULL,
	administrative_area int(11) DEFAULT '0' NOT NULL,
	country int(11) DEFAULT '0' NOT NULL,
	latitude_degrees_measure int(11) DEFAULT '0' NOT NULL,
	latitude_minutes_measure int(11) DEFAULT '0' NOT NULL,
	latitude_seconds_measure int(11) DEFAULT '0' NOT NULL,
	latitude_direction_code char(1) DEFAULT '' NOT NULL,
	longitude_degrees_measure int(11) DEFAULT '0' NOT NULL,
	longitude_minutes_measure int(11) DEFAULT '0' NOT NULL,
	longitude_seconds_measure int(11) DEFAULT '0' NOT NULL,
	longitude_direction_code char(1) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_contacts'
#
CREATE TABLE tx_party_contacts (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	type blob NOT NULL,
	contact varchar(90) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_contact_numbers'
#
CREATE TABLE tx_party_contact_numbers (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	parties tinytext NOT NULL,
	media_type varchar(9) DEFAULT '' NOT NULL,
	country_code int(11) DEFAULT '0' NOT NULL,
	area_code varchar(90) DEFAULT '' NOT NULL,
	local_number varchar(90) DEFAULT '' NOT NULL,
	extension varchar(90) DEFAULT '' NOT NULL,
	pin varchar(90) DEFAULT '' NOT NULL,
	contact_hours text NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_countries_of_residence'
#
CREATE TABLE tx_party_countries_of_residence (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	country int(11) DEFAULT '0' NOT NULL,
	residency_type blob NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_disabilities'
#
CREATE TABLE tx_party_disabilities (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	disability varchar(90) DEFAULT '' NOT NULL,
	cause varchar(90) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_documents'
#
CREATE TABLE tx_party_documents (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	document_type blob NOT NULL,
	document_id varchar(90) DEFAULT '' NOT NULL,
	issued_by int(11) DEFAULT '0' NOT NULL,
	issue_place varchar(90) DEFAULT '' NOT NULL,
	privilege varchar(90) DEFAULT '' NOT NULL,
	restriction varchar(90) DEFAULT '' NOT NULL,
	group_name varchar(90) DEFAULT '' NOT NULL,
	name_on_document varchar(90) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_electronic_address_identifiers'
#
CREATE TABLE tx_party_electronic_address_identifiers (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	parties tinytext NOT NULL,
	type int(11) DEFAULT '0' NOT NULL,
	electronic_address_identifier varchar(90) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_images'
#
CREATE TABLE tx_party_images (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	address int(11) DEFAULT '0' NOT NULL,
	image blob NOT NULL,
	title varchar(90) DEFAULT '' NOT NULL,
	description varchar(90) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_languages'
#
CREATE TABLE tx_party_languages (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	language int(11) DEFAULT '0' NOT NULL,
	type int(11) DEFAULT '0' NOT NULL,
	read_skills varchar(4) DEFAULT '' NOT NULL,
	write_skills varchar(4) DEFAULT '' NOT NULL,
	listen_skills varchar(4) DEFAULT '' NOT NULL,
	speak_skills varchar(4) DEFAULT '' NOT NULL,
	preference tinyint(3) DEFAULT '0' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_marks'
#
CREATE TABLE tx_party_marks (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	mark varchar(90) DEFAULT '' NOT NULL,
	body_part varchar(90) DEFAULT '' NOT NULL,
	body_part_mark_location varchar(90) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_nationalities'
#
CREATE TABLE tx_party_nationalities (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	country int(11) DEFAULT '0' NOT NULL,
	nationality_type blob NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_occupations'
#
CREATE TABLE tx_party_occupations (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	role int(11) DEFAULT '0' NOT NULL,
	rank int(11) DEFAULT '0' NOT NULL,
	employment_type int(11) DEFAULT '0' NOT NULL,
	position_title varchar(90) DEFAULT '' NOT NULL,
	cost_centre varchar(90) DEFAULT '' NOT NULL,
	reports_to varchar(90) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_names'
#
CREATE TABLE tx_party_names (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	type int(11) DEFAULT '0' NOT NULL,
	person_name_title int(11) DEFAULT '0' NOT NULL,
	first_name varchar(90) DEFAULT '' NOT NULL,
	middle_name varchar(90) DEFAULT '' NOT NULL,
	ancestor_name varchar(90) DEFAULT '' NOT NULL,
	last_name varchar(90) DEFAULT '' NOT NULL,
	other_name varchar(90) DEFAULT '' NOT NULL,
	preceding_title varchar(90) DEFAULT '' NOT NULL,
	alias varchar(90) DEFAULT '' NOT NULL,
	generation_identifier varchar(90) DEFAULT '' NOT NULL,
	place_name varchar(90) DEFAULT '' NOT NULL,
	organisation_name_type varchar(17) DEFAULT '' NOT NULL,
	organisation_name varchar(90) DEFAULT '' NOT NULL,
	abbreviation varchar(90) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_qualifications'
#
CREATE TABLE tx_party_qualifications (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	qualification_name varchar(90) DEFAULT '' NOT NULL,
	status int(11) DEFAULT '0' NOT NULL,
	institution int(11) DEFAULT '0' NOT NULL,
	start_date int(11) DEFAULT '0' NOT NULL,
	completion_date int(11) DEFAULT '0' NOT NULL,
	way_of_study varchar(90) DEFAULT '' NOT NULL,
	major_subject varchar(90) DEFAULT '' NOT NULL,
	minor_subject varchar(90) DEFAULT '' NOT NULL,
	mark varchar(90) DEFAULT '' NOT NULL,
	course_duration varchar(90) DEFAULT '' NOT NULL,
	award varchar(90) DEFAULT '' NOT NULL,
	restriction varchar(90) DEFAULT '' NOT NULL,
	registration varchar(90) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_relationship_types'
#
CREATE TABLE tx_party_relationship_types (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	relationship_type varchar(90) DEFAULT '' NOT NULL,
	description_as_primary varchar(90) DEFAULT '' NOT NULL,
	description_as_secondary varchar(90) DEFAULT '' NOT NULL,
	organisation_allowed_as_primary tinyint(3) DEFAULT '0' NOT NULL,
	organisation_allowed_as_secondary tinyint(3) DEFAULT '0' NOT NULL,
	person_allowed_as_primary tinyint(3) DEFAULT '0' NOT NULL,
	person_allowed_as_secondary tinyint(3) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_revenues'
#
CREATE TABLE tx_party_revenues (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	currency int(11) DEFAULT '0' NOT NULL,
	amount varchar(90) DEFAULT '0.00' NOT NULL,
	amount_precision varchar(90) DEFAULT '0.00' NOT NULL,
	after_tax tinyint(3) DEFAULT '0' NOT NULL,
	type blob NOT NULL,
	period_from int(11) DEFAULT '0' NOT NULL,
	period_to int(11) DEFAULT '0' NOT NULL,
	source varchar(90) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_stock_markets'
#
CREATE TABLE tx_party_stock_markets (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	market int(11) DEFAULT '0' NOT NULL,
	listed_code varchar(10) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_vehicles'
#
CREATE TABLE tx_party_vehicles (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	make int(11) DEFAULT '0' NOT NULL,
	type blob NOT NULL,
	model varchar(90) DEFAULT '' NOT NULL,
	license_place varchar(90) DEFAULT '' NOT NULL,
	manufacture_date varchar(90) DEFAULT '' NOT NULL,
	engine_number varchar(90) DEFAULT '' NOT NULL,
	chassis_number varchar(90) DEFAULT '' NOT NULL,
	body_number varchar(90) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_visas'
#
CREATE TABLE tx_party_visas (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	country int(11) DEFAULT '0' NOT NULL,
	number varchar(90) DEFAULT '' NOT NULL,
	code varchar(90) DEFAULT '' NOT NULL,
	issue_date varchar(90) DEFAULT '' NOT NULL,
	issue_place varchar(90) DEFAULT '' NOT NULL,
	maximum_stay varchar(90) DEFAULT '' NOT NULL,
	restriction varchar(90) DEFAULT '' NOT NULL,
	privilege varchar(90) DEFAULT '' NOT NULL,
	special_condition varchar(90) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);




#
# Table structure for table 'tx_party_parties_hobbies_mm'
# 
#
CREATE TABLE tx_party_parties_hobbies_mm (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);




#
# Table structure for table 'tx_party_parties_habits_mm'
# 
#
CREATE TABLE tx_party_parties_habits_mm (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);




#
# Table structure for table 'tx_party_parties_allergies_mm'
# 
#
CREATE TABLE tx_party_parties_allergies_mm (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  tablenames varchar(30) DEFAULT '' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,
  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);



#
# Table structure for table 'tx_party_parties'
#
CREATE TABLE tx_party_parties (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	type int(11) DEFAULT '0' NOT NULL,
	marital_status varchar(9) DEFAULT '' NOT NULL,
	religion int(11) DEFAULT '0' NOT NULL,
	birth_place varchar(90) DEFAULT '' NOT NULL,
	birth_date_time int(11) DEFAULT '0' NOT NULL,
	birth_date_time_precision varchar(90) DEFAULT '' NOT NULL,
	birth_sign int(11) DEFAULT '0' NOT NULL,
	birth_star varchar(90) DEFAULT '' NOT NULL,
	weight int(11) DEFAULT '0' NOT NULL,
	height int(11) DEFAULT '0' NOT NULL,
	breast int(11) DEFAULT '0' NOT NULL,
	waist int(11) DEFAULT '0' NOT NULL,
	hip int(11) DEFAULT '0' NOT NULL,
	hair_colour varchar(90) DEFAULT '' NOT NULL,
	eye_colour varchar(5) DEFAULT '' NOT NULL,
	skin_colour varchar(90) DEFAULT '' NOT NULL,
	blood_group varchar(11) DEFAULT '' NOT NULL,
	physical_status int(11) DEFAULT '0' NOT NULL,
	ethnicity int(11) DEFAULT '0' NOT NULL,
	gender int(11) DEFAULT '0' NOT NULL,
	hobbies int(11) DEFAULT '0' NOT NULL,
	habits int(11) DEFAULT '0' NOT NULL,
	organisation_type int(11) DEFAULT '0' NOT NULL,
	organisation_nature int(11) DEFAULT '0' NOT NULL,
	company_registration_id varchar(90) DEFAULT '' NOT NULL,
	company_registration_date int(11) DEFAULT '0' NOT NULL,
	number_of_employees int(11) DEFAULT '0' NOT NULL,
	remarks text NOT NULL,
	names tinytext NOT NULL,
	addresses tinytext NOT NULL,
	accounts tinytext NOT NULL,
	contact_numbers tinytext NOT NULL,
	countries_of_residence tinytext NOT NULL,
	documents tinytext NOT NULL,
	electronic_address_identifiers tinytext NOT NULL,
	images tinytext NOT NULL,
	nationalities tinytext NOT NULL,
	relationships tinytext NOT NULL,
	revenues tinytext NOT NULL,
	vehicles tinytext NOT NULL,
	contacts tinytext NOT NULL,
	visas tinytext NOT NULL,
	disabilities tinytext NOT NULL,
	languages tinytext NOT NULL,
	marks tinytext NOT NULL,
	occupations tinytext NOT NULL,
	qualifications tinytext NOT NULL,
	stock_markets tinytext NOT NULL,
	events tinytext NOT NULL,
	identifiers tinytext NOT NULL,
	memberships tinytext NOT NULL,
	allergies int(11) DEFAULT '0' NOT NULL,
	favourites tinytext NOT NULL,
	preferences tinytext NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_events'
#
CREATE TABLE tx_party_events (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	type int(11) DEFAULT '0' NOT NULL,
	date int(11) DEFAULT '0' NOT NULL,
	date_from int(11) DEFAULT '0' NOT NULL,
	date_to int(11) DEFAULT '0' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_identifiers'
#
CREATE TABLE tx_party_identifiers (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	type int(11) DEFAULT '0' NOT NULL,
	identifier varchar(90) DEFAULT '' NOT NULL,
	issue_date int(11) DEFAULT '0' NOT NULL,
	expiry_date int(11) DEFAULT '0' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_memberships'
#
CREATE TABLE tx_party_memberships (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	type int(11) DEFAULT '0' NOT NULL,
	organisation int(11) DEFAULT '0' NOT NULL,
	issue_date int(11) DEFAULT '0' NOT NULL,
	expiry_date int(11) DEFAULT '0' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_allergies'
#
CREATE TABLE tx_party_allergies (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_favourites'
#
CREATE TABLE tx_party_favourites (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	type int(11) DEFAULT '0' NOT NULL,
	favourite varchar(90) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_preferences'
#
CREATE TABLE tx_party_preferences (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	type int(11) DEFAULT '0' NOT NULL,
	preference varchar(90) DEFAULT '' NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_address_usages'
#
CREATE TABLE tx_party_address_usages (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	address int(11) DEFAULT '0' NOT NULL,
	address_usage int(11) DEFAULT '0' NOT NULL,
	standard tinyint(3) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_contact_number_usages'
#
CREATE TABLE tx_party_contact_number_usages (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	contact_number blob NOT NULL,
	contact_number_usage int(11) DEFAULT '0' NOT NULL,
	standard tinyint(3) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_electronic_address_identifier_usages'
#
CREATE TABLE tx_party_electronic_address_identifier_usages (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	party int(11) DEFAULT '0' NOT NULL,
	electronic_address_identifier int(11) DEFAULT '0' NOT NULL,
	electronic_address_identifier_usage int(11) DEFAULT '0' NOT NULL,
	standard tinyint(3) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_usages'
#
CREATE TABLE tx_party_usages (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	short_title varchar(30) DEFAULT '' NOT NULL,
	title varchar(60) DEFAULT '' NOT NULL,
	long_title varchar(90) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);



#
# Table structure for table 'tx_party_relationships'
#
CREATE TABLE tx_party_relationships (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	primary_party int(11) DEFAULT '0' NOT NULL,
	secondary_party int(11) DEFAULT '0' NOT NULL,
	relationship_type int(11) DEFAULT '0' NOT NULL,
	date_established int(11) DEFAULT '0' NOT NULL,
	date_lapsed int(11) DEFAULT '0' NOT NULL,
	reason_lapsed text NOT NULL,
	remarks text NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);