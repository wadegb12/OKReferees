CREATE TABLE Status (
	id int auto_increment,
    cert_year int(4),
	full_name char(50),
	grade int(2),
    written_test bit,
    written_test_score int(3),
    fitness bit,
	fitness_date date,
	fitness_city char(20),
    game_log bit,
	recert bit,
    upgrade_clinic bit,
    PRIMARY KEY (id)
);

SELECT * FROM Status;

INSERT INTO Status (cert_year, full_name, grade, written_test, written_test_score, fitness, 
	fitness_date, fitness_city, game_log, recert, upgrade_clinic) VALUES (2018, "Wade", 
    6, 1, 90, 1, "2018-06-01", "Stillwater", 0, 1, 0);
    
INSERT INTO Status (cert_year, full_name, grade, written_test, written_test_score, fitness, 
	fitness_date, fitness_city, game_log, recert, upgrade_clinic) VALUES (2018, "Mark", 
    6, 1, 90, 1, "2018-06-01", "Stillwater", 0, 1, 0);
    
DROP TABLE Status;
















