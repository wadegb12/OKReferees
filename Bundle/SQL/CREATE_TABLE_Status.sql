CREATE TABLE Status_Table (
	id int auto_increment,
    cert_year int(4),
	full_name char(50),
	current_grade int(1),
    written_test bit,
    written_test_score int(3),
    fitness bit,
	fitness_date date,
	fitness_location char,
    game_log bit,
	recert bit
);