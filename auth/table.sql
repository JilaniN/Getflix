CREATE TABLE comment (
    cid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid VARCHAR(128) NOT NULL,
    date DATETIME NOT NULL,
    message TEXT NOT NULL
);


CREATE TABLE users (
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid VARCHAR(128) NOT NULL,
    pwd VARCHAR(128) NOT NULL
);

INSERT INTO `users`(`uid`, `pwd`) VALUES ('admin', '123');
INSERT INTO `users`(`uid`, `pwd`) VALUES ('user', '456');