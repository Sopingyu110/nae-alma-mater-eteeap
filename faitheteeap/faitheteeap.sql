/*	Database for FAITH's ETEEAP (Extended Tertiary Education
	Equivalency and Accreditation Program) by Andrew A. Veracruz
    veracruzandrew at gmail dot com
    
    Last updated May 26, 2016 17:50 PM PST
*/

CREATE DATABASE faitheteeap;
USE faitheteeap;
DROP DATABASE faitheteeap;

--
--

CREATE TABLE IF NOT EXISTS `faitheteeap`.`applicant` (
  `applicant_id` INT NOT NULL AUTO_INCREMENT,
  `applicant_firstname` VARCHAR(30) NOT NULL,
  `applicant_middlename` VARCHAR(30) NOT NULL,
  `applicant_lastname` VARCHAR(45) NOT NULL,
  `applicant_address` VARCHAR(80) NOT NULL,
  `applicant_emailaddress` VARCHAR(90) NOT NULL,
  `applicant_zipcode` CHAR(4) NOT NULL,
  `applicant_birthyear` CHAR(4) NOT NULL,
  `applicant_birthmonth` VARCHAR(2) NOT NULL,
  `applicant_birthday` VARCHAR(2) NOT NULL,
  `applicant_birthplace` VARCHAR(100) NOT NULL,
  `applicant_civstatus` ENUM('Single', 'Married', 'Separated', 'Divorced') NOT NULL,
  `applicant_gender` ENUM('Male', 'Female', 'Other') NOT NULL,
  `applicant_nationality` VARCHAR(30) NOT NULL,
  `applicant_firstprioritydegree` VARCHAR(100) NOT NULL,
  `applicant_secondprioritydegree` VARCHAR(100) NOT NULL,
  `applicant_thirdprioritydegree` VARCHAR(100) NOT NULL,
  `applicant_goalstatements` TEXT NOT NULL,
  `applicant_devotetime` TEXT NOT NULL,
  `applicant_overseaapplicantplan` TEXT NULL,
  `applicant_howsooncompleteoption` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`applicant_id`))
ENGINE = InnoDB;

--
--

CREATE TABLE IF NOT EXISTS `faitheteeap`.`formal_education` (
  `educ_id` INT NOT NULL AUTO_INCREMENT,
  `educ_coursedegree` VARCHAR(100) NOT NULL,
  `educ_schoolname` VARCHAR(100) NOT NULL,
  `educ_schooladdress` VARCHAR(120) NOT NULL,
  `educ_inclusivedateformal` VARCHAR(25) NOT NULL,
  `educ_formaleduccerfphoto` BLOB NOT NULL,
  `applicant_id` INT NULL,
  PRIMARY KEY (`educ_id`),
  CONSTRAINT `applicant_id`
    FOREIGN KEY (`applicant_id`)
    REFERENCES `faitheteeap`.`applicant` (`applicant_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

--
--

CREATE TABLE IF NOT EXISTS `faitheteeap`.`non_formal_education` (
  `nf_educ_id` INT NOT NULL AUTO_INCREMENT,
  `nf_educ_titletrainingprogram` VARCHAR(100) NULL,
  `nf_educ_titlecerfobtained` VARCHAR(100) NULL,
  `nf_educ_inclusivedatenonformal` VARCHAR(25) NULL,
  `nf_educ_cerfphoto` BLOB NULL,
  `applicant_id1` INT NULL,
  PRIMARY KEY (`nf_educ_id`),
  INDEX `applicant_id_idx` (`applicant_id1` ASC),
  CONSTRAINT `applicant_id1`
    FOREIGN KEY (`applicant_id1`)
    REFERENCES `faitheteeap`.`applicant` (`applicant_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

--
--

CREATE TABLE IF NOT EXISTS `faitheteeap`.`other_cerf_exams` (
  `othercerf_id` INT NOT NULL AUTO_INCREMENT,
  `othercerf_titlecerfexam` VARCHAR(100) NULL,
  `othercerf_awardagencyname` VARCHAR(100) NULL,
  `othercerf_inclusivedateother` VARCHAR(25) NULL,
  `othercerf_othercerfphoto` BLOB NULL,
  `applicant_id2` INT NULL,
  PRIMARY KEY (`othercerf_id`),
  INDEX `applicant_id_idx` (`applicant_id2` ASC),
  CONSTRAINT `applicant_id2`
    FOREIGN KEY (`applicant_id2`)
    REFERENCES `faitheteeap`.`applicant` (`applicant_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

--
--

CREATE TABLE IF NOT EXISTS `faitheteeap`.`work_experience` (
  `workexp_id` INT NOT NULL AUTO_INCREMENT,
  `workexp_isselfemployed` TINYINT(1) NULL,
  `workexp_postdesignation` VARCHAR(70) NULL,
  `workexp_startyear` CHAR(4) NULL,
  `workexp_startmonth` VARCHAR(2) NULL,
  `workexp_startday` VARCHAR(2) NULL,
  `workexp_companyname` VARCHAR(120) NULL,
  `workexp_companyaddress` VARCHAR(150) NULL,
  `workexp_employmentstatus` VARCHAR(20) NOT NULL,
  `workexp_supervisorname` VARCHAR(105) NULL,
  `workexp_supervisordesignation` VARCHAR(70) NULL,
  `workexp_reasonleavingjobdesc` VARCHAR(150) NULL,
  `workexp_actualjobfunctiondesc` VARCHAR(250) NULL,
  `workexp_referencepersons` VARCHAR(70) NULL,
  `applicant_id6` INT NULL,
  PRIMARY KEY (`workexp_id`, `workexp_employmentstatus`),
  INDEX `applicant_id_idx` (`applicant_id6` ASC),
  CONSTRAINT `applicant_id6`
    FOREIGN KEY (`applicant_id6`)
    REFERENCES `faitheteeap`.`applicant` (`applicant_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

--
--
SELECT * FROM applicant;

CREATE TABLE IF NOT EXISTS `faitheteeap`.`acad_awards` (
  `acadaward_id` INT NOT NULL AUTO_INCREMENT,
  `acadaward_awardname` VARCHAR(80) NULL,
  `acadaward_awardconferringorg` VARCHAR(100) NULL,
  `acadaward_conferringorgaddress` VARCHAR(150) NULL,
  `acadaward_awardyear` CHAR(4) NULL,
  `acadaward_awardmonth` CHAR(2) NULL,
  `acadaward_awardday` CHAR(2) NULL,
  `applicant_id3` INT NULL,
  PRIMARY KEY (`acadaward_id`),
  INDEX `applicant_id_idx` (`applicant_id3` ASC),
  CONSTRAINT `applicant_id3`
    FOREIGN KEY (`applicant_id3`)
    REFERENCES `faitheteeap`.`applicant` (`applicant_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

--
--

CREATE TABLE IF NOT EXISTS `faitheteeap`.`com_civ_org_awards` (
  `ccoaward_id` INT NOT NULL AUTO_INCREMENT,
  `ccoaward_awardname` VARCHAR(80) NULL,
  `ccoaward_awardconferringorg` VARCHAR(100) NULL,
  `ccoaward_conferringorgaddress` VARCHAR(150) NULL,
  `ccoaward_awardyear` CHAR(4) NULL,
  `ccoaward_awardmonth` CHAR(2) NULL,
  `acadaward_awardday` CHAR(2) NULL,
  `applicant_id4` INT NULL,
  PRIMARY KEY (`ccoaward_id`),
  INDEX `applicant_id_idx` (`applicant_id4` ASC),
  CONSTRAINT `applicant_id4`
    FOREIGN KEY (`applicant_id4`)
    REFERENCES `faitheteeap`.`applicant` (`applicant_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

--
--

CREATE TABLE IF NOT EXISTS `faitheteeap`.`work_related_awards` (
  `wraward_id` INT NOT NULL AUTO_INCREMENT,
  `wraward_awardname` VARCHAR(80) NULL,
  `wraward_awardconferringorg` VARCHAR(100) NULL,
  `wraward_conferringorgaddress` VARCHAR(150) NULL,
  `wraward_awardyear` CHAR(4) NULL,
  `wraward_awardmonth` CHAR(2) NULL,
  `wraward_awardday` CHAR(2) NULL,
  `applicant_id5` INT NULL,
  PRIMARY KEY (`wraward_id`),
  INDEX `applicant_id_idx` (`applicant_id5` ASC),
  CONSTRAINT `applicant_id5`
    FOREIGN KEY (`applicant_id5`)
    REFERENCES `faitheteeap`.`applicant` (`applicant_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

--
--

CREATE TABLE IF NOT EXISTS `faitheteeap`.`creative_works` (
  `cw_id` INT NOT NULL AUTO_INCREMENT,
  `cw_description` TEXT NULL,
  `cw_year` CHAR(4) NULL,
  `cw_month` CHAR(2) NULL,
  `cw_day` CHAR(2) NULL,
  `cw_publishingagencyname` VARCHAR(80) NULL,
  `cw_publishingagencyaddress` VARCHAR(120) NULL,
  `applicant_id7` INT NULL,
  PRIMARY KEY (`cw_id`),
  INDEX `applicant_id_idx` (`applicant_id7` ASC),
  CONSTRAINT `applicant_id7`
    FOREIGN KEY (`applicant_id7`)
    REFERENCES `faitheteeap`.`applicant` (`applicant_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

--
--

CREATE TABLE IF NOT EXISTS `faitheteeap`.`lifelong_learning_experience` (
  `lle_id` INT NOT NULL AUTO_INCREMENT,
  `lle_hobbies` TEXT NULL,
  `lle_specialskills` TEXT NULL,
  `lle_workrelatedactivities` TEXT NULL,
  `lle_volunteeractivities` TEXT NULL,
  `lle_travel` TEXT NULL,
  `application_id8` INT NULL,
  PRIMARY KEY (`lle_id`),
  INDEX `applicant_id_idx` (`application_id8` ASC),
  CONSTRAINT `applicant_id8`
    FOREIGN KEY (`application_id8`)
    REFERENCES `faitheteeap`.`applicant` (`applicant_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

--
--

CREATE TABLE IF NOT EXISTS `faitheteeap`.`summary` (
  `summary_id` INT NOT NULL AUTO_INCREMENT,
  `summary` TEXT NULL,
  `applicant_id9` INT NULL,
  PRIMARY KEY (`summary_id`),
  INDEX `applicant_id_idx` (`applicant_id9` ASC),
  CONSTRAINT `applicant_id9`
    FOREIGN KEY (`applicant_id9`)
    REFERENCES `faitheteeap`.`applicant` (`applicant_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

--
--
