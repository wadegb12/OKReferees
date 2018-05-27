CREATE TABLE referee_status (
    full_name varchar(50),
    grade int,
    game_count bool,
    upgrade_clinic bool,
    written_test bool,
    recertification_clinic bool,
    assessment bool,
    fitness_test bool
);

INSERT INTO referee_status (full_name, grade, game_count, upgrade_clinic, 
	written_test, recertification_clinic, assessment, fitness_test) 
VALUES ('Wade', 6, 0, 0, 0, 0, 0, 0);


select * from referee_status;


