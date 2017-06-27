
DROP DATABASE IF EXISTS ibmsappdb;
CREATE DATABASE IF NOT EXISTS ibmsappdb;

USE ibmsappdb;

DROP TABLE IF EXISTS point;
CREATE TABLE IF NOT EXISTS point (

	point_id INT NOT NULL AUTO_INCREMENT,
	point_name VARCHAR(64) NOT NULL,
	point_url VARCHAR(255) NOT NULL,
	point_type VARCHAR(64) NOT NULL,
	point_value_type VARCHAR(64) NOT NULL,

	PRIMARY KEY ( point_id ),
	UNIQUE ( point_name )
);

