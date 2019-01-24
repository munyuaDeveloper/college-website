/*** This is the college database script**/

CREATE SCHEMA `college` ;

/*** This is the table of departments***/
CREATE TABLE `college`.`departments` (
  `department_id` INT NOT NULL AUTO_INCREMENT,
  `department_name` VARCHAR(45) NOT NULL,
  `department_location` VARCHAR(45) NOT NULL,
  `department_chairperson` VARCHAR(45) NOT NULL,
  `number_course` INT NOT NULL,
  `department_desc` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`department_id`));

/*** This is the transport table ***/
CREATE TABLE `college`.`transport` (
  `transport_id` INT NOT NULL AUTO_INCREMENT,
  `vehicle` VARCHAR(45) NOT NULL,
  `transport_manager` VARCHAR(45) NOT NULL,
  `transport_desc` VARCHAR(45) NOT NULL,
  `transport_images` VARCHAR(45) NULL,
  PRIMARY KEY (`transport_id`));

/*** This is the library table ***/
CREATE TABLE `college`.`library` (
  `library_id` INT NOT NULL AUTO_INCREMENT,
  `library_name` VARCHAR(45) NOT NULL,
  `library_manager` VARCHAR(45) NOT NULL,
  `library_desc` VARCHAR(45) NULL,
  `library_images` VARCHAR(45) NULL,
  PRIMARY KEY (`library_id`));

/*** This is the sports table ***/
CREATE TABLE `college`.`sports` (
  `sport_id` INT NOT NULL AUTO_INCREMENT,
  `game` VARCHAR(45) NOT NULL,
  `gamet_manager` VARCHAR(45) NOT NULL,
  `game_desc` VARCHAR(45) NOT NULL,
  `sport_images` VARCHAR(45) NULL,
  PRIMARY KEY (`sport_id`));


/*** This is the laboratory table ***/
CREATE TABLE `college`.`laboratory` (
  `lab_id` INT NOT NULL,
  `lab_name` VARCHAR(45) NOT NULL,
  `lab_manager` VARCHAR(45) NOT NULL,
  `lab_desc` VARCHAR(45) NOT NULL,
  `lab_images` VARCHAR(45) NULL,
  PRIMARY KEY (`lab_id`));

/*** This is the fee statement table ***/
CREATE TABLE `college`.`fee_statements` (
  `reg_no` VARCHAR(45) NOT NULL,
  `names` VARCHAR(45) NOT NULL,
  `source` VARCHAR(45) NOT NULL,
  `amount` VARCHAR(45) NOT NULL,
  `date` VARCHAR(45) NOT NULL,
  `balance` VARCHAR(45) NULL,
  PRIMARY KEY (`reg_no`));

/*** This is the results table ***/
CREATE TABLE `college`.`results_y1s1` (
  `reg_no` VARCHAR(45) NOT NULL,
  `academic_year` DATE NOT NULL,
  `year_study` INT NOT NULL,
  `sem` INT NOT NULL,
  `unit_code` VARCHAR(45) NOT NULL,
  `unit_name` VARCHAR(45) NOT NULL,
  `unit(s)` VARCHAR(45) NOT NULL,
  `grade` VARCHAR(45) NOT NULL);
 
 /*** This is the students table ***/
CREATE TABLE `college`.`students` (
  `reg_no` VARCHAR(45) NOT NULL,
  `student_Fname` VARCHAR(45) NOT NULL,
  `student_Lname` VARCHAR(45) NOT NULL,
  `id_no` VARCHAR(45) NOT NULL,
  `student_email` VARCHAR(45) NOT NULL,
  `year_of_study` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`reg_no`));

/*** This is the contact table ***/
CREATE TABLE `college`.`contact_information` (
  `reg_no` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `city` VARCHAR(45) NOT NULL,
  `postal_code` VARCHAR(45) NULL,
  `postal_address` VARCHAR(45) NULL,
  `home_address` VARCHAR(45) NULL,
  PRIMARY KEY (`reg_no`));

/*** This is the basic info table ***/
CREATE TABLE `college`.`basic_information` (
  `reg_no` VARCHAR(45) NOT NULL,
  `names` VARCHAR(45) NOT NULL,
  `id_no` VARCHAR(45) NOT NULL,
  `sex` VARCHAR(45) NOT NULL,
  `date_birth` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`reg_no`));

/*** This is the financial info table ***/
CREATE TABLE `college`.`financial_information` (
  `reg_no` VARCHAR(45) NOT NULL,
  `total_billed` INT NOT NULL,
  `total_paid` INT NOT NULL,
  `balance` INT NOT NULL,
  PRIMARY KEY (`reg_no`));


