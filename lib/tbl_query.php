<?php
//include "config.php";
//include "database.php";
$db = new database();

$user_tbl = "CREATE TABLE IF NOT EXISTS tbl_user(
	id INT(11) NOT NULL AUTO_INCREMENT,
	userEmail VARCHAR(255),
	mobile VARCHAR(255),
	userPass VARCHAR(255),
	auth VARCHAR(255),
	picture VARCHAR(255),
	randnum VARCHAR(25),
	PRIMARY KEY (id,userEmail)
	)";
	

$user_tbl_info = "CREATE TABLE IF NOT EXISTS tbl_signup_info(
	id INT(11) NOT NULL AUTO_INCREMENT,
	fname VARCHAR(255),
	lname VARCHAR(255),
	nname VARCHAR(255),
	birthdate VARCHAR(255),
	gender VARCHAR(255),
	mstatus VARCHAR(255),
	blood VARCHAR(255),
	nationality VARCHAR(255),
	religion VARCHAR(255),
	StudentID VARCHAR(255),
	Department VARCHAR(255),
	mobile VARCHAR(255),
	email VARCHAR(255),
	PRIMARY KEY (id,email)
	)";

$user_tbl_guardian_info = "CREATE TABLE IF NOT EXISTS tbl_guardian_info(
	id INT(11) NOT NULL AUTO_INCREMENT,
	father_name VARCHAR(255),
	FatherMobile VARCHAR(255),
	FatherOccupation VARCHAR(255),
	FatherDesignation VARCHAR(255),
	mother_name VARCHAR(255),
	MotherMobile VARCHAR(255),
	MotherOccupation VARCHAR(255),
	MotherDesignation VARCHAR(255),
	LocalGuardianName VARCHAR(255),
	LocalGuardianContact VARCHAR(255),
	RelationwithLocalGuardian VARCHAR(255),
	LocalGuardianAddress VARCHAR(255),
	email VARCHAR(255),
	PRIMARY KEY (id,email)
	)";
	
$user_tbl_present_info = "CREATE TABLE IF NOT EXISTS tbl_present_info(
	id INT(11) NOT NULL AUTO_INCREMENT,
	PAddress VARCHAR(255),
	PPostOffice VARCHAR(255),
	PPoliceStation VARCHAR(255),
	PDistrictCity VARCHAR(255),
	PDivisionState VARCHAR(255),
	PCountry VARCHAR(255),
	PZipCode VARCHAR(255),
	PHostelAddress VARCHAR(255),
	PMessAddress VARCHAR(255),
	POtherAddress VARCHAR(255),
	email VARCHAR(255),
	PRIMARY KEY (id,email)
	)";

$user_tbl_permanent_info = "CREATE TABLE IF NOT EXISTS tbl_permanent_info(
	id INT(11) NOT NULL AUTO_INCREMENT,
	Address VARCHAR(255),
	PostOffice VARCHAR(255),
	PoliceStation VARCHAR(255),
	DistrictCity VARCHAR(255),
	DivisionState VARCHAR(255),
	Country VARCHAR(255),
	ZipCode VARCHAR(255),
	email VARCHAR(255),
	PRIMARY KEY (id,email)
	)";
	
$user_tbl_education_info = "CREATE TABLE IF NOT EXISTS tbl_education_info(
	id INT(11) NOT NULL AUTO_INCREMENT,
	Degree VARCHAR(255),
	Institute VARCHAR(255),
	UniversityBoard VARCHAR(255),
	PassingYear VARCHAR(255),
	GradeDevision VARCHAR(255),
	CGPA VARCHAR(255),
	email VARCHAR(255),
	PRIMARY KEY (id,email)
	)";

	
$admin_tbl = "CREATE TABLE IF NOT EXISTS tbl_admin(
	id INT(11) NOT NULL AUTO_INCREMENT,
	adminEmail VARCHAR(255),
	mobile VARCHAR(255),
	adminPass VARCHAR(255),
	auth VARCHAR(255),
	picture VARCHAR(255),
	role VARCHAR(50),
	randnum VARCHAR(25),
	PRIMARY KEY (id,adminEmail)
	)";
$admin_tbl_info = "CREATE TABLE IF NOT EXISTS tbl_admin_info(
	id INT(11) NOT NULL AUTO_INCREMENT,
	fname VARCHAR(255),
	lname VARCHAR(255),
	nname VARCHAR(255),
	birthdate VARCHAR(255),
	gender VARCHAR(255),
	mstatus VARCHAR(255),
	blood VARCHAR(255),
	nationality VARCHAR(255),
	religion VARCHAR(255),
	EmployeeID VARCHAR(255),
	mobile VARCHAR(255),
	email VARCHAR(255),
	PRIMARY KEY (id,email)
	)";


$db->create($user_tbl);	
$db->create($user_tbl_info);
$db->create($user_tbl_guardian_info);
$db->create($user_tbl_present_info);
$db->create($user_tbl_permanent_info);
$db->create($user_tbl_education_info);
$db->create($admin_tbl);
$db->create($admin_tbl_info);





