CREATE TABLE 'users' (
    'id' int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    'username' varchar(255) NOT NULL,
    'email'  varchar(255) NOT NULL,
    'password' varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;