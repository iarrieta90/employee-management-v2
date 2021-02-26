CREATE TABLE users (
user_no INT AUTO_INCREMENT,
email varchar(100) NOT NULL,
password varchar(100) NOT NULL,
PRIMARY KEY(user_no)
);

INSERT INTO  users (email, password) VALUES
('irati@gmail.com', md5('12345'));