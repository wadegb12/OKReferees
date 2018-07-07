CREATE TABLE Assessments (
	id int auto_increment,
    cert_year int(4),
	referee_name char(50),
    assessor_name char(50),
	current_grade int(1),
    pass bit,
    position bit,
    age varchar(5),
    score int(3)
);