CREATE DATABASE IF NOT EXISTS phpTemplate;
USE phpTemplate;

CREATE TABLE users (
    userId      BIGINT NOT NULL AUTO_INCREMENT,
    username    VARCHAR(255) NOT NULL,
    firstName   VARCHAR(255) NOT NULL,
    lastName    VARCHAR(255) NOT NULL,

    PRIMARY KEY (userId),
    UNIQUE INDEX (username)
)ENGINE=INNODB;