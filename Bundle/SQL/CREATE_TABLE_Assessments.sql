CREATE TABLE Assessments (
	id int auto_increment,
    cert_year int(4),
	referee_id int(6),
	current_grade int(2),
    upgrade bit,
    pass_fail bit,
    position bit,
    age varchar(5),
    score int(3),
    PRIMARY KEY (id)
);


INSERT INTO Assessments (cert_year, referee_id, assessor_name, current_grade, upgrade, pass_fail, position, 
	age, score) VALUES (2018, "1", 6, 0, 1, 1, "adult", 90);

