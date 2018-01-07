
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


DROP TABLE IF EXISTS knx_lighting;
CREATE TABLE IF NOT EXISTS knx_lighting (

	auto_id INT NOT NULL AUTO_INCREMENT,

	agilor_aci_name     VARCHAR(64)  NOT NULL,
	agilor_rtdb_name    VARCHAR(64)  NOT NULL,
	agilor_device_name  VARCHAR(64)  NOT NULL,
	agiolor_value_type  VARCHAR(64)  NOT NULL,
	agiolor_web_api_url VARCHAR(255) NOT NULL,

	knx_lighting_point_type  VARCHAR(64)  NOT NULL,
	knx_group_address        VARCHAR(64)  NOT NULL,
	knx_value_less7bit       TINYINT(1),

	PRIMARY KEY ( auto_id ),
	UNIQUE ( agilor_aci_name )
);
