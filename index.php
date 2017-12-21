<?php
session_start();
// setcookie('inputUsername', "");
// setcookie('inputPassword', "");
include_once dirname(__FILE__) . "/" . "./common/common.php";
?>

<?php
    $post_username = "";
    list($post_username, $login_result) = UserLoginCheck();
    list($alert_style, $alert_message_title, $alert_message_body) = setAlertByLoginResult($login_result);
    if($login_result == LOGIN_SUCCESS){
        // Login Success, Redirect
        if(isset($_GET['req_url'])) {
            // from other
            header("location:".$_GET['req_url']);
        } else {
            // from login
            header("location:" . "f7lighting.php");
        }
    }
?>

<?php include_once("header.php"); ?>
    
<head>
    <title>BIAD</title>
    <style>
        body {
            background-color: #eee;
        }
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin .checkbox {
            font-weight: 400;
        }
        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[name="inputUsername"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[name="inputPassword"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <form class="form-signin" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
            <input type="text" name="inputUsername" class="form-control" placeholder="Username" value="<?=$post_username?>" required autofocus>
            <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me" name="is_save"> Remember me
                </label>
            </div>
            <?php
            if(isset($login_result) and $login_result != LOGIN_INIT) {
            ?>
            <div class="alert <?=$alert_style?> alert-dismissible" role="alert">
                <strong><?=$alert_message_title?></strong> <?=$alert_message_body?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            } else {
            }
            ?>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div> <!-- /container -->
    
</body>

<!-- <?php

print_r($_SESSION);
print_r($_COOKIE);

?> -->