<!DOCTYPE html>
<html>
<head>
	<title>Agilor IBMS App</title>
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
	<script src="bootstrap-switch-master/dist/js/bootstrap-switch.min.js"></script>

	<style type="text/css">
		body {
			background-color: #BABABA;
		}
		.gongweibtn{
			width: 60px;
			height: 20px;
			padding: 0 0 0 0;
		}

		.shangzhaodeng {
			width: 50px;
			height: 50px;
			padding: 0 0 0 0;
			background-image: url('image/lighting.png');
			border:0px;
			background-size: 100% 100%;
			background-color: rgba(255, 255, 255, 0);
		}

		.chuanglian{
			width: 50px;
			height: 50px;
			padding: 0 0 0 0;
			background-image: url('image/curtain.png');
			border:0px;
			background-size: 100% 100%;
			background-color: rgba(255, 255, 255, 0);
		}

		#mySlider {
			width: 80%;
		}
		#mySlider .slider-selection {
			background: #81bfde;
		}
		#mySlider .slider-track-high {
			background: #BABABA;
		}

		.lighting-container {
			background-image: url('image/7.png');
			background-size: 100%;
			width: 1220px;
			height: 620px;
			position: relative;
			margin-left: 50px;
			margin-top: 50px;
		}
		.curtain-container {
			background-image: url('image/7.png');
			width: 1220px;
			height: 620px;
			position: relative;
		}
		.bootstrap-switch-container{ white-space:nowrap; }
	</style>

</head>
<body>

<div>
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
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">其他 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
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
				<li><a href="#">退出</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">YwY <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Your Profile</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Account Assistant</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
</div>

<div id="myAlertTop" class="container alert alert-danger alert-dismissible hidden" role="alert">
	<button type="button" class="close" onclick="$('#myAlertTop').addClass('hidden');" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>错误!</strong> 设置值异常，请<a href=""> 联系维护人员 </a>.
</div>
