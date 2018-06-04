USE RefereeTracking

Go

CREATE TABLE login_validator (
    id int(10) NOT NULL AUTO_INCREMENT,
    username varchar(50),
    password varchar(50),
    can_edit bool,
    PRIMARY KEY (id)
);

INSERT INTO login_validator (username, password, can_edit)
VALUES ('ok_src', "refereeAdmin", 1);


select * from login_validator;

drop table login_validator;
