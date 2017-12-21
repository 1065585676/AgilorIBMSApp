<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	<!-- jquery && jquery ui -->
	<script src="jQuery/jquery-3.2.1.js"></script>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/dist/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>

	<!-- bootstrap-select -->
	<link rel="stylesheet" type="text/css" href="bootstrap-select-1.12.4/dist/css/bootstrap-select.css">
	<script src="bootstrap-select-1.12.4/dist/js/bootstrap-select.js"></script>
	<script src="bootstrap-select-1.12.4/dist/js/i18n/defaults-zh_CN.js"></script>

	<!-- bootstrap-slider -->
	<link href="bootstrap-slider-master/dist/css/bootstrap-slider.css" rel="stylesheet" >
	<script src="bootstrap-slider-master/dist/bootstrap-slider.js"></script>

	<!-- bootstrap-switch -->
	<link href="bootstrap-switch-master/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
	<script src="bootstrap-switch-master/dist/js/bootstrap-switch.js"></script>
</head>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<strong>
				<a class="navbar-brand" href="http://www.biad.com.cn/" target="_blank"> B I A D </a>
			</strong>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="f7Lig"><a href="f7lighting.php">F7-灯光</a></li>
				<li class="f8Lig"><a href="f8lighting.php">F8-灯光</a></li>
				<li class="f7Cur"><a href="f7curtain.php">F7-窗帘</a></li>
				<li class="f8Cur"><a href="f8curtain.php">F8-窗帘</a></li>
				<li class="f7Env"><a href="f7environment.php">F7-环境</a></li>
				<li class="f8Env"><a href="f8environment.php">F8-环境</a></li>
				<li class="f7Fcu"><a href="f7fcu.php">F7-空调</a></li>
				<li class="f8Fcu"><a href="f8fcu.php">F8-空调</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">其他 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="systemConf.php">系统配置</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			</ul>
			<form class="navbar-form navbar-left">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="输入内容">
				</div>
				<button type="submit" class="btn btn-default">搜索</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<?php
				if(isset($_SESSION["inputUsername"])) {
				?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$_SESSION["inputUsername"]?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">个人信息</a></li>
						<li><a class="dropdown-item" href="#">系统设置</a></li>
						<li role="separator" class="divider"></li>
						<li><a class="dropdown-item" href="logout.php">注销登录</a></li>
						<li><a class="dropdown-item" href="#">帮助</a></li>
					</ul>
				</li>
				<?php
					} else {
						echo
						'
						<li class="nav-item mr-md-2">
							<a class="nav-link disabled" href="">Guest, please sign in</a>
						</li>
						';
					}
				?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<!-- 
<?php

print_r($_SESSION);
print_r($_COOKIE);

?> -->
