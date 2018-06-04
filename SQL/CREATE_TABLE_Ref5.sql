USE RefereeTracking

Go

CREATE TABLE Ref5Upgrade(
    Cert_Year int(4),
	Name char(50),
    Up_Main char(12),
	Current_Grade int(1),
	New_Grade int(1),
	Pass_Fail bit,
	Assm_1_Pass bit,
	Assm_1_Pos char(6),
	Assm_1_Age char(5),
	Assm_1_Score int(3),
	Assm_2_Pass bit,
	Assm_2_Pos char(6),
	Assm_2_Age char(5),
	Assm_2_Score int(3),
	Assm_3_Pass bool,
	Assm_3_Pos char(6),
	Assm_3_Age char(5),
	Assm_3_Score int(3),
    Test int(3),
	Fitness bit,
	Fitness_Date date,
	Fitness_Location char,
    Up_Class bit,
	Recert bit
	);