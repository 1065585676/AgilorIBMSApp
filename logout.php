<?php
session_start();

//注销登录
if(isset($_SESSION["inputUsername"])) {
    unset($_SESSION["inputUsername"]);
}

//setcookie("inputUsername", "", time()-10, "/");
setcookie("inputPassword", "", time()-10, "/");

header("location:index.php");

?>