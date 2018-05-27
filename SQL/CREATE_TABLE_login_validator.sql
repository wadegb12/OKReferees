CREATE TABLE login_validator (
    username varchar(50),
    password varchar(50),
    can_edit bool
);

INSERT INTO login_validator (username, password, can_edit) 
VALUES ('ok_src', "refereeAdmin", 1);


select * from login_validator;