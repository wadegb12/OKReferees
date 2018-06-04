CREATE TABLE Records (
    Cert_Year year(),
	Name char(50),
    Up_Main char(12),
	Current_Grade tinyint(),
	Up_Grade tinyint(),
	Pass bit,
	Assm_1_Pass bit,
	Assm_1_Pos char(6),
	Assm_1_Age char(5),
	Assm_1_Score tinyint(),
	Assm_2_Pass bit,
	Assm_2_Pos char(6),
	Assm_2_Age char(5),
	Assm_2_Score tinyint(),
	Assm_3_Pass bool,
	Assm_3_Pos char(6),
	Assm_3_Age char(5),
	Assm_3_Score tinyint(),
    Test tinyint,
	Fitness bit,
	Fitness_Date date,
	Fitness_Location char(),
    Game_Log bit,
    UP_Class bit,
	Recert bit
    
);

/*INSERT INTO referee_status (full_name, grade, game_count, upgrade_clinic, 
	written_test, recertification_clinic, assessment, fitness_test) 
VALUES ('Wade', '7', 0, 0, 0, 0, 0, 0);

INSERT INTO referee_status (full_name, grade, game_count, upgrade_clinic, 
	written_test, recertification_clinic, assessment, fitness_test) 
VALUES ('Wade', '7A', 0, 0, 0, 0, 0, 0);

INSERT INTO referee_status (full_name, grade, game_count, upgrade_clinic, 
	written_test, recertification_clinic, assessment, fitness_test) 
VALUES ('Wade', '6', 0, 0, 0, 0, 0, 0);

INSERT INTO referee_status (full_name, grade, game_count, upgrade_clinic, 
	written_test, recertification_clinic, assessment, fitness_test) 
VALUES ('Wade', '5R', 0, 0, 0, 0, 0, 0);

INSERT INTO referee_status (full_name, grade, game_count, upgrade_clinic, 
	written_test, recertification_clinic, assessment, fitness_test) 
VALUES ('Wade', '5A', 0, 0, 0, 0, 0, 0);


select * from referee_status; */
