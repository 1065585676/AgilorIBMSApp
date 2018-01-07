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


INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_708_SHANG_ZHAO_DENG_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_708_SHANG_ZHAO_DENG_S','CONTROL','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_708_SHANG_ZHAO_DENG_M','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_708_SHANG_ZHAO_DENG_M','CONTROL','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_708_SHANG_ZHAO_DENG_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_708_SHANG_ZHAO_DENG_N','CONTROL','LONG');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_701_SHANG_ZHAO_DENG_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_701_SHANG_ZHAO_DENG_S','CONTROL','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_701_SHANG_ZHAO_DENG_M','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_701_SHANG_ZHAO_DENG_M','CONTROL','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_701_SHANG_ZHAO_DENG_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_701_SHANG_ZHAO_DENG_N','CONTROL','LONG');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_708_TONG_DENG_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_708_TONG_DENG_S','CONTROL','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_708_TONG_DENG_M','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_708_TONG_DENG_M','CONTROL','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_708_TONG_DENG_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_708_TONG_DENG_N','CONTROL','LONG');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_701_TONG_DENG_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_701_TONG_DENG_S','CONTROL','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_701_TONG_DENG_M','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_701_TONG_DENG_M','CONTROL','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_701_TONG_DENG_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_701_TONG_DENG_N','CONTROL','LONG');


INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_F7_DENG_DAI_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_F7_DENG_DAI_S','CONTROL','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_F7_LANG_DENG_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_F7_LANG_DENG_S','CONTROL','LONG');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_F7_DENG_DAI_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_F7_DENG_DAI_N','CONTROL','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_F7_LANG_DENG_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_F7_LANG_DENG_N','CONTROL','LONG');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_709_SHANG_ZHAO_DENG','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_709_SHANG_ZHAO_DENG','SINGLE','LONG');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_709_1_E','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_709_1_E','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_709_1_W','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_709_1_W','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_709_2_E','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_709_2_E','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_709_2_W','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_709_2_W','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_709_SHE_DENG_E','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_709_SHE_DENG_E','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_709_SHE_DENG_W','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_709_SHE_DENG_W','SINGLE','LONG');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_F7_YUAN_ZHANG_SHI_1','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_F7_YUAN_ZHANG_SHI_1','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_F7_YUAN_ZHANG_SHI_2','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_F7_YUAN_ZHANG_SHI_2','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_F7_YUAN_ZHANG_SHI_2_WAI','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_F7_YUAN_ZHANG_SHI_2_WAI','SINGLE','LONG');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_F7_QIAN_TAI_DENG','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_F7_QIAN_TAI_DENG','CONTROL','LONG');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_F7_YUAN_ZHANG_SHI_3_WAI','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_F7_YUAN_ZHANG_SHI_3_WAI','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_F7_YUAN_ZHANG_SHI_3','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_F7_YUAN_ZHANG_SHI_3','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_F7_YUAN_ZHANG_SHI_4','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_F7_YUAN_ZHANG_SHI_4','SINGLE','LONG');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_712_SHANG_ZHAO_DENG','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_712_SHANG_ZHAO_DENG','SINGLE','LONG');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_712_1_E','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_712_1_E','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_712_1_W','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_712_1_W','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_712_2_E','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_712_2_E','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_712_2_W','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_712_2_W','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_712_SHE_DENG_E','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_712_SHE_DENG_E','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_712_SHE_DENG_W','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_712_SHE_DENG_W','SINGLE','LONG');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_F7_BA_TAI_DENG','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_F7_BA_TAI_DENG','CONTROL','LONG');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_SCENE_706','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_SCENE_DEVICES/LIG_SCENE_706','SCENE','ENUM');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_SCENE_703','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_SCENE_DEVICES/LIG_SCENE_703','SCENE','ENUM');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_F7_XIU_XIAN_SHI','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_F7_XIU_XIAN_SHI','CONTROL','LONG');

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_701_E','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_701_E','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_701_W','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_701_W','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_706_E','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_706_E','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_OTHER_706_W','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_OTHER_706_W','SINGLE','LONG');


INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_21_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_21_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_21_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_21_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_20_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_20_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_20_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_20_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_19_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_19_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_19_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_19_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_18_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_18_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_18_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_18_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_17_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_17_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_17_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_17_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_16_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_16_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_16_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_16_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_15_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_15_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_15_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_15_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_14_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_14_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_14_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_14_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_13_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_13_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_13_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_13_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_12_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_12_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_12_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_12_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_11_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_11_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_11_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_11_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_10_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_10_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_10_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_10_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_09_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_09_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_09_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_09_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_08_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_08_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_08_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_08_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_07_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_07_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_07_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_07_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_06_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_06_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_06_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_06_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_05_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_05_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_05_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_05_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_04_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_04_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_04_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_04_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_03_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_03_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_03_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_03_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_02_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_02_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_02_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_02_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_01_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_01_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_708_01_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_708_01_N','SINGLE','LONG');


INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_21_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_21_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_21_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_21_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_20_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_20_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_20_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_20_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_19_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_19_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_19_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_19_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_18_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_18_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_18_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_18_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_17_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_17_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_17_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_17_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_16_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_16_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_16_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_16_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_15_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_15_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_15_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_15_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_14_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_14_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_14_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_14_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_13_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_13_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_13_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_13_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_12_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_12_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_12_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_12_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_11_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_11_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_11_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_11_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_10_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_10_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_10_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_10_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_09_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_09_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_09_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_09_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_08_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_08_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_08_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_08_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_07_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_07_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_07_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_07_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_06_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_06_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_06_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_06_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_05_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_05_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_05_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_05_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_04_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_04_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_04_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_04_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_03_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_03_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_03_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_03_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_02_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_02_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_02_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_02_N','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_01_S','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_01_S','SINGLE','LONG');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_701_01_N','http://localhost:8098/AgilorReader/devices/BIAD_LIGHT_DEVICES/LIG_701_01_N','SINGLE','LONG');
