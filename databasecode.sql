CREATE TABLE user_subscription (
    user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_email varchar(256) not null
);

INSERT INTO user_subscription (user_first, user_last, user_email)
    VALUES ('John', 'Doe', 'johndoe@test.co.uk');