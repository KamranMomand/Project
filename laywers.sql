

/// USER Table ///


CREATE TABLE user(
userID int NOT null PRIMARY KEY,
    firstName varchar(100),
    lastName varchar(100),
    email varchar(200) not null UNIQUE,
    password varchar(100)not null,
    profileImage varchar(255),
    registerDate datetime
);