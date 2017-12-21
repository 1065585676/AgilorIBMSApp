<?php 
/*
用户登录检查
RETURN：array(username, login_result)

1.检查Session，如果存在Session，直接返回用户名和登录结果LOGIN_SUCCESS，否则进行下一步
2.检查Cookie，如果保存了Cookie，使用Cookie中的用户名密码进行后台验证，验证成功返回，
    否则，先设置登录结果为LOGIN_FAILED_COOKIE_OUTTIME，并删除Coockie，进行下一步
3.检查POST请求，如果存在用户名和密码，则进行后台验证并返回用户名和验证结果，否则设置登录结果为LOGIN_FAILED_ILLEGALLY
*/
function UserLoginCheck() {
    // RETURN：array(username, login_result)
    $ret_username = "";
    $ret_login_result = LOGIN_INIT;
    // Check Session
    if(isset($_SESSION["inputUsername"])) {
        $ret_username = $_SESSION["inputUsername"];
        return array($ret_username, LOGIN_SUCCESS);
    }
    // Check Cookie
    if(isset($_COOKIE["inputUsername"])) {
        $ret_username = $_COOKIE["inputUsername"];
        if(isset($_COOKIE["inputPassword"])) {
            $ret_username = $_COOKIE["inputUsername"];
            $ret_login_result = RemoteUserLoginAuthentication($_COOKIE["inputUsername"], $_COOKIE["inputPassword"]);
            if($ret_login_result != LOGIN_SUCCESS) {
                $ret_login_result = LOGIN_FAILED_COOKIE_OUTTIME;
                setcookie("inputUsername", "", time()-10, "/");
                setcookie("inputPassword", "", time()-10, "/");
            }
            // Set Session
            $_SESSION["inputUsername"] = $ret_username;
            return array($ret_username, $ret_login_result);
        }
    }
    
    // Check POST
    switch($_SERVER['REQUEST_METHOD']) {
        case "POST":
            if(isset($_POST["inputUsername"]) and isset($_POST["inputPassword"])) {
                $ret_username = $_POST["inputUsername"];
                $ret_password = MD5($_POST["inputPassword"]);
                $ret_login_result = RemoteUserLoginAuthentication($_POST["inputUsername"], $ret_password);
                if($ret_login_result == LOGIN_SUCCESS) {
                    // Set Session
                    $_SESSION["inputUsername"] = $ret_username;
                    // Set Cookie
                    if(isset($_POST["is_save"]) and $_POST["is_save"] == true) {
                        setcookie('inputUsername', $ret_username, time() + LOGIN_COOKIE_OUTTIME_SECOND, "/");
                        setcookie('inputPassword', $ret_password, time() + LOGIN_COOKIE_OUTTIME_SECOND, "/");
                    }
                }
            } else {
                $ret_login_result = LOGIN_FAILED_ILLEGALLY;
            }
            break;
    }
    return array($ret_username, $ret_login_result);
}

/*
用户后台验证
PARAMETERS：
$username：输入的用户名
$password：输入的密码（MD5加密后）

RETURN：
LOGIN_SUCCESS / LOGIN_FAILED_USER_NOT_EXIST / LOGIN_FAILED_PASSWORD_ERROR

1.连接MySql，根据用户名查询用户信息（用户名、密码）
*/
function RemoteUserLoginAuthentication($username, $password){
    /*  return:
        LOGIN_SUCCESS
        LOGIN_FAILED_USER_NOT_EXIST
        LOGIN_FAILED_PASSWORD_ERROR
    */
    // mysql configure
    $db_server = "localhost";
	$db_user = "ibms";
	$db_user_password = "toor";
	$db_name = "ibmsappdb";
    $db_table_name = "user";
    // create connection
	$conn = new mysqli($db_server, $db_user, $db_user_password, $db_name);
	$sql = "SELECT user_name, user_password FROM $db_table_name WHERE user_name='".$username."' ;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(!$row) return LOGIN_FAILED_USER_NOT_EXIST;
    if($row["user_password"] != $password) return LOGIN_FAILED_PASSWORD_ERROR;
    return LOGIN_SUCCESS;
}

/*
根据登录结果设置登录结果提醒框的样式、标题、信息
PARAMETERS：
$login_result：后台验证返回的登录结果

RETURN：
array(alert_style, alert_message_title, alert_message_body);

1.连接MySql，根据用户名查询用户信息（用户名、密码）
*/
function SetAlertByLoginResult($login_result){
    // return array(alert_style, alert_message_title, alert_message_body);
    switch($login_result) {
        case LOGIN_INIT:
            return array("alert-info", "Login. ", "Login init.");
        case LOGIN_SUCCESS:
            return array("alert-success", "Success. ", "Login success.");
        case LOGIN_FAILED_USER_NOT_EXIST:
            return array("alert-danger", "Failed. ", "User not exist.");
        case LOGIN_FAILED_PASSWORD_ERROR:
            return array("alert-danger", "Failed. ", "Password error.");
        case LOGIN_FAILED_SYSTEM:
            return array("alert-danger", "Failed. ", "System error.");
        case LOGIN_FAILED_ILLEGALLY:
            return array("alert-danger", "Failed. ", "Login illegally.");
        case LOGIN_FAILED_SESSION_OUTTIME:
            return array("alert-danger", "Failed. ", "Login session outtime.");
        case LOGIN_FAILED_COOKIE_OUTTIME:
            return array("alert-danger", "Failed. ", "Login cookie outtime.");
        default:
            return array("alert-danger", "Failed. ", "Unknown login result.");
    }
}


/*
MySQL 建表语句

CREATE DATABASE IF NOT EXISTS ibmsappdb_test;    // 创建数据库
DROP DATABASE IF EXISTS ibmsappdb_test;  // 删除数据库

// 删除已有用户表
DROP TABLE IF EXISTS `user`;
// 创建用户表
CREATE TABLE IF NOT EXISTS `user` (
    `user_name`             VARCHAR(100)   NOT NULL                     COMMENT '用户名，主键',
    `user_password`         VARCHAR(32)    NOT NULL                     COMMENT '用户密码',
    `user_register_date`    DATETIME       NOT NULL    DEFAULT NOW()    COMMENT '创建时间',

    PRIMARY KEY (`user_name`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = '用户表';

// 插入管理员用户admin
INSERT INTO `user`(`user_name`, `user_password`) VALUES ('admin', MD5('admin'));

// 插入普通用户wyy
INSERT INTO `user`(`user_name`, `user_password`) VALUES ('wyy', MD5('wyy'));

// 建立楼层表
DROP TABLE IF EXISTS `floor`;
CREATE TABLE IF NOT EXISTS `floor` (
    `floor_id_name`             VARCHAR(100)   NOT NULL                     COMMENT '楼层ID名，主键',
    `floor_show_name`           VARCHAR(100)                                COMMENT '楼层显示名',
    `floor_desc`                VARCHAR(200)                                COMMENT '楼层描述',

    `floor_belong`              VARCHAR(100)   NOT NULL                     COMMENT '楼层属于哪个楼',
    
    PRIMARY KEY (`floor_id_name`)
)ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COMMENT = '楼层表';

// 插入两层楼
INSERT INTO `floor`(`floor_id_name`, `floor_show_name`, `floor_desc`, `floor_belong`) VALUES ('test_f7', 'Floor 7', 'Test building, floor 7', 'test');
INSERT INTO `floor`(`floor_id_name`, `floor_show_name`, `floor_desc`, `floor_belong`) VALUES ('test_f8', 'Floor 8', 'Test building, floor 8', 'test');

*/
?>