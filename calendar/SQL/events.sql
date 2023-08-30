CREATE TABLE EVENTS (
    ID INT AUTO_INCREMENT NOT NULL,
    TITLE VARCHAR(255) NOT NULL,
    DESCRIPTION VARCHAR(500),
    START DATE NOT NULL,
    END DATE NOT NULL,
    PRIMARY KEY (ID)
) ENGINE=INNODB DEFAULT CHARSET=UTF8;