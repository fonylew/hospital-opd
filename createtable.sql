CREATE TABLE IF NOT EXISTS Patient(
	HN varchar(10) NOT NULL,
	id varchar(20) NOT NULL,
	initial varchar(10),
	fName varchar(100),
	lName varchar(100),
	address varchar(200),
	tel varchar(15) NOT NULL,
	email varchar(50),
	PRIMARY KEY (HN),
	CONSTRAINT uc_PersonID UNIQUE (id,fName,lName)
);

CREATE TABLE IF NOT EXISTS User(
	username varchar(20) PRIMARY KEY,
	password varchar(20),
	id varchar(20),
	tel varchar(15),
	initial varchar(10),
	fName varchar(100),
	lName varchar(100),
	address varchar(200),
	email varchar(50),
	userType varchar(10) NOT NULL,
	doctor_department varchar(50)
);

-- has default value
CREATE TABLE IF NOT EXISTS WorkTime(
	worktime_id int NOT NULL AUTO_INCREMENT,
	status varchar(10),
	worktime_date date,
	starttime time NOT NULL,
	finishtime time NOT NULL,
	doctor_username varchar(20),
	PRIMARY KEY (worktime_id),
	FOREIGN KEY (doctor_username) REFERENCES User(username)
);

CREATE TABLE IF NOT EXISTS MedicalRecord(
	HN varchar(10),
	diagnose_datetime datetime,
	code varchar(20),
	description varchar(200),
	weight int UNSIGNED,
	height int UNSIGNED,
	bloodPressure varchar(10),
	temperature int UNSIGNED,
	heartRate int UNSIGNED,
	nurse_username varchar(20),
	doctor_username varchar(20),
	KEY (diagnose_datetime),
	FOREIGN KEY (HN) REFERENCES Patient(HN),
	PRIMARY KEY (HN,diagnose_datetime),
	FOREIGN KEY (nurse_username) REFERENCES User(username),
	FOREIGN KEY (doctor_username) REFERENCES User(username)
);

-- Is HN also FOREIGN KEY too?
-- I wrote starttime all lowercase (in reportis worktime_Starttime) 
CREATE TABLE IF NOT EXISTS Appointment(
	appoint_id int NOT NULL AUTO_INCREMENT,
	HN varchar(10) NOT NULL,
	appoint_time date,
	docName varchar(100),
	department varchar(50),
	doctor_username varchar(20),
	worktime_date date NOT NULL,
	worktime_starttime time NOT NULL,
	PRIMARY KEY (appoint_id),
	FOREIGN KEY (HN) REFERENCES Patient(HN),
	FOREIGN KEY (doctor_username) REFERENCES User(username)
);

CREATE TABLE IF NOT EXISTS MedicalProblems(
	HN varchar(10),
	problem varchar(200),
	note varchar(100),
	FOREIGN KEY (HN) REFERENCES Patient(HN),
	PRIMARY KEY (HN,problem)
);

CREATE TABLE IF NOT EXISTS Allergies(
	HN varchar(10),
	allergy varchar(200),
	note varchar(100),
	FOREIGN KEY (HN) REFERENCES Patient(HN),
	PRIMARY KEY (HN,allergy)
);

CREATE TABLE IF NOT EXISTS Prescription(
	prescript_id int NOT NULL AUTO_INCREMENT,
	pharmacist_username varchar(20),
	medrec_HN varchar(10),
	medrec_datetime datetime,
	PRIMARY KEY (prescript_id),
	FOREIGN KEY (medrec_HN) REFERENCES Patient(HN),
	-- FOREIGN KEY (medrec_datetime) REFERENCES MedicalRecord(diagnose_datetime),
	FOREIGN KEY (pharmacist_username) REFERENCES User(username)
);

CREATE TABLE IF NOT EXISTS Medicine(
	prescript_id int,
	medrec_HN varchar(10),
	medrec_datetime datetime,
	mName varchar(10),
	howTo varchar(20),
	amount int UNSIGNED,
	FOREIGN KEY (prescript_id) REFERENCES Prescription(prescript_id),
	FOREIGN KEY (medrec_HN) REFERENCES Patient(HN),
	-- FOREIGN KEY (medrec_datetime) REFERENCES MedicalRecord(diagnose_datetime),
	PRIMARY KEY (medrec_HN,prescript_id,mName)
);