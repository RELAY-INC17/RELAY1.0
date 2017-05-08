CREATE TABLE users(
name VARCHAR(64) not null, 
email VARCHAR(64) primary key,
dob DATE not null,
userid VARCHAR(32) unique not null,
password VARCHAR(64) not null,
address VARCHAR(132) not null);