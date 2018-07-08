CREATE TABLE Assessments (
	id int auto_increment,
    cert_year int(4),
	referee_id int(6),
    assessor_name char(50),
	current_grade int(1),
    pass_fail bit,
    position bit,
    age varchar(5),
    score int(3),
    PRIMARY KEY (id)
);


INSERT INTO Assessments (cert_year, referee_id, assessor_name, current_grade, pass_fail, position, 
	age, score) VALUES (2018, "1", "Jim", 6, 1, 1, "adult", 90);
    
INSERT INTO Assessments (cert_year, referee_id, assessor_name, current_grade, pass_fail, position, 
	age, score) VALUES (2018, "1", "Bill", 6, 0, 1, "U19", 70);
    
INSERT INTO Assessments (cert_year, referee_id, assessor_name, current_grade, pass_fail, position, 
	age, score) VALUES (2018, "1", "Nate", 6, 1, 1, "U18", 80);
    
INSERT INTO Assessments (cert_year, referee_id, assessor_name, current_grade, pass_fail, position, 
	age, score) VALUES (2018, "2", "Nate", 6, 1, 1, "U18", 80);
    
SELECT * FROM Assessments;

DROP TABLE Assessments;