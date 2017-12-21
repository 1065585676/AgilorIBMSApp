<?php session_start(); ?>
<?php include_once("common/common.php"); ?>

<?php
$post_username = "";
if(isset($_SESSION["inputUsername"])){
    $post_username = $_SESSION["inputUsername"];
} else if(isset($_COOKIE["inputUsername"]) and isset($_COOKIE["inputPassword"])) {
    $post_username = $_COOKIE["inputUsername"];
    $auto_login_result = RemoteUserLoginAuthentication($_COOKIE["inputUsername"], $_COOKIE["inputPassword"]);
    if($auto_login_result == LOGIN_SUCCESS) {
        // Set Session
        $_SESSION["inputUsername"] = $post_username;
    } else {
        // Cookie outtime
        header("location:index.php?req_url=".$_SERVER['REQUEST_URI']);
    }
} else {
    // Login Again
    header("location:index.php?req_url=".$_SERVER['REQUEST_URI']);
}
?>

<?php include('header.php');?>
<script type="text/javascript">
	$('.f7Lig').addClass('active');
</script>

<head>
    <title>Lighting</title>
    <style>
		body {
			background-color: #BABABA;
		}
		.gongweibtnOn{
			width: 64px;
			height: 20px;
			padding: 0 0 0 0;
			background-color: #DEB887;
		}
		.gongweibtnOff{
			width: 64px;
			height: 20px;
			padding: 0 0 0 0;
			background-color: #808080;
		}
		.ligOn {
			width: 50px;
			height: 50px;
			padding: 0 0 0 0;
			background-image: url('image/LIG-ON.png');
			border:0px;
			background-size: 100% 100%;
			background-color: rgba(255, 255, 255, 0);

			color: white;
			font-size: 12px;
			padding-top: 34px;
		}
		.ligOff {
			width: 50px;
			height: 50px;
			padding: 0 0 0 0;
			background-image: url('image/LIG-OFF.png');
			border:0px;
			background-size: 100% 100%;
			background-color: rgba(255, 255, 255, 0);

			color: #D2B48C;
			font-size: 12px;
			padding-top: 34px;
		}
		.lighting-container-7 {
			background-image: url('image/7.png');
			background-size: 100%;
			width: 1220px;
			height: 620px;
			position: relative;
			margin-left: 50px;
			margin-top: 50px;
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
    </style>
</head>

<center>
<div style="width: 90%; height: 100%; overflow:auto;">
	<div class="lighting-container-7">

		<!-- 工位灯 东办公区  -->
		<button id="LIG_708_19_S" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_19_S')">708-19-S</button>
		<button id="LIG_708_20_S" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_20_S')">708-20-S</button>
		<button id="LIG_708_21_S" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_21_S')">708-21-S</button>

		<button id="LIG_708_19_N" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_19_N')">708-19-N</button>
		<button id="LIG_708_20_N" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_20_N')">708-20-N</button>
		<button id="LIG_708_21_N" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_21_N')">708-21-N</button>

		<button id="LIG_708_16_S" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_16_S')">708-16-S</button>
		<button id="LIG_708_17_S" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_17_S')">708-17-S</button>
		<button id="LIG_708_18_S" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_18_S')">708-18-S</button>

		<button id="LIG_708_16_N" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_16_N')">708-16-N</button>
		<button id="LIG_708_17_N" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_17_N')">708-17-N</button>
		<button id="LIG_708_18_N" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_18_N')">708-18-N</button>

		<button id="LIG_708_13_S" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_13_S')">708-13-S</button>
		<button id="LIG_708_14_S" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_14_S')">708-14-S</button>
		<button id="LIG_708_15_S" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_15_S')">708-15-S</button>

		<button id="LIG_708_13_N" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_13_N')">708-13-N</button>
		<button id="LIG_708_14_N" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_14_N')">708-14-N</button>
		<button id="LIG_708_15_N" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_15_N')">708-15-N</button>

		<button id="LIG_708_10_S" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_10_S')">708-10-S</button>
		<button id="LIG_708_11_S" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_11_S')">708-11-S</button>
		<button id="LIG_708_12_S" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_12_S')">708-12-S</button>

		<button id="LIG_708_10_N" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_10_N')">708-10-N</button>
		<button id="LIG_708_11_N" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_11_N')">708-11-N</button>
		<button id="LIG_708_12_N" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_12_N')">708-12-N</button>

		<button id="LIG_708_07_S" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_07_S')">708-7-S</button>
		<button id="LIG_708_08_S" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_08_S')">708-8-S</button>
		<button id="LIG_708_09_S" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_09_S')">708-9-S</button>

		<button id="LIG_708_07_N" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_07_N')">708-7-N</button>
		<button id="LIG_708_08_N" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_08_N')">708-8-N</button>
		<button id="LIG_708_09_N" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_09_N')">708-9-N</button>

		<button id="LIG_708_04_S" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_04_S')">708-4-S</button>
		<button id="LIG_708_05_S" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_05_S')">708-5-S</button>
		<button id="LIG_708_06_S" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_06_S')">708-6-S</button>

		<button id="LIG_708_04_N" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_04_N')">708-4-N</button>
		<button id="LIG_708_05_N" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_05_N')">708-5-N</button>
		<button id="LIG_708_06_N" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_06_N')">708-6-N</button>

		<button id="LIG_708_01_S" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_01_S')">708-1-S</button>
		<button id="LIG_708_02_S" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_02_S')">708-2-S</button>
		<button id="LIG_708_03_S" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_03_S')">708-3-S</button>

		<button id="LIG_708_01_N" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_01_N')">708-1-N</button>
		<button id="LIG_708_02_N" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_02_N')">708-2-N</button>
		<button id="LIG_708_03_N" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_03_N')">708-3-N</button>

		<!-- 工位灯 西办公区  -->
		<button id="LIG_701_19_S" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_19_S')">701-19-S</button>
		<button id="LIG_701_20_S" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_20_S')">701-20-S</button>
		<button id="LIG_701_21_S" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_21_S')">701-21-S</button>

		<button id="LIG_701_19_N" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_19_N')">701-19-N</button>
		<button id="LIG_701_20_N" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_20_N')">701-20-N</button>
		<button id="LIG_701_21_N" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_21_N')">701-21-N</button>

		<button id="LIG_701_16_S" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_16_S')">701-16-S</button>
		<button id="LIG_701_17_S" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_17_S')">701-17-S</button>
		<button id="LIG_701_18_S" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_18_S')">701-18-S</button>

		<button id="LIG_701_16_N" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_16_N')">701-16-N</button>
		<button id="LIG_701_17_N" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_17_N')">701-17-N</button>
		<button id="LIG_701_18_N" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_18_N')">701-18-N</button>

		<button id="LIG_701_13_S" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_13_S')">701-13-S</button>
		<button id="LIG_701_14_S" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_14_S')">701-14-S</button>
		<button id="LIG_701_15_S" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_15_S')">701-15-S</button>

		<button id="LIG_701_13_N" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_13_N')">701-13-N</button>
		<button id="LIG_701_14_N" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_14_N')">701-14-N</button>
		<button id="LIG_701_15_N" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_15_N')">701-15-N</button>

		<button id="LIG_701_10_S" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_10_S')">701-10-S</button>
		<button id="LIG_701_11_S" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_11_S')">701-11-S</button>
		<button id="LIG_701_12_S" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_12_S')">701-12-S</button>

		<button id="LIG_701_10_N" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_10_N')">701-10-N</button>
		<button id="LIG_701_11_N" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_11_N')">701-11-N</button>
		<button id="LIG_701_12_N" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_12_N')">701-12-N</button>

		<button id="LIG_701_07_S" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_07_S')">701-7-S</button>
		<button id="LIG_701_08_S" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_08_S')">701-8-S</button>
		<button id="LIG_701_09_S" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_09_S')">701-9-S</button>

		<button id="LIG_701_07_N" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_07_N')">701-7-N</button>
		<button id="LIG_701_08_N" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_08_N')">701-8-N</button>
		<button id="LIG_701_09_N" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_09_N')">701-9-N</button>

		<button id="LIG_701_04_S" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_04_S')">701-4-S</button>
		<button id="LIG_701_05_S" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_05_S')">701-5-S</button>
		<button id="LIG_701_06_S" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_06_S')">701-6-S</button>

		<button id="LIG_701_04_N" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_04_N')">701-4-N</button>
		<button id="LIG_701_05_N" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_05_N')">701-5-N</button>
		<button id="LIG_701_06_N" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_06_N')">701-6-N</button>

		<button id="LIG_701_01_S" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_01_S')">701-1-S</button>
		<button id="LIG_701_02_S" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_02_S')">701-2-S</button>
		<button id="LIG_701_03_S" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_03_S')">701-3-S</button>

		<button id="LIG_701_01_N" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_01_N')">701-1-N</button>
		<button id="LIG_701_02_N" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_02_N')">701-2-N</button>
		<button id="LIG_701_03_N" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_03_N')">701-3-N</button>


		<!-- 上照灯 东 -->
		<button id="LIG_OTHER_708_SHANG_ZHAO_DENG_S" class="ligOff" style="position: absolute; left: -40px; top: 120px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_708_SHANG_ZHAO_DENG_S')">南上照灯</button>
		<button id="LIG_OTHER_708_SHANG_ZHAO_DENG_M" class="ligOff" style="position: absolute; left: -40px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_708_SHANG_ZHAO_DENG_M')">中上照灯</button>
		<button id="LIG_OTHER_708_SHANG_ZHAO_DENG_N" class="ligOff" style="position: absolute; left: -40px; top: 460px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_708_SHANG_ZHAO_DENG_N')">北上照灯</button>

		<!-- 上照灯 西 -->
		<button id="LIG_OTHER_701_SHANG_ZHAO_DENG_S" class="ligOff" style="position: absolute; left: 1210px; top: 120px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_701_SHANG_ZHAO_DENG_S')">南上照灯</button>
		<button id="LIG_OTHER_701_SHANG_ZHAO_DENG_M" class="ligOff" style="position: absolute; left: 1210px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_701_SHANG_ZHAO_DENG_M')">中上照灯</button>
		<button id="LIG_OTHER_701_SHANG_ZHAO_DENG_N" class="ligOff" style="position: absolute; left: 1210px; top: 460px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_701_SHANG_ZHAO_DENG_N')">北上照灯</button>

		<!-- 筒灯 东 -->
		<button id="LIG_OTHER_708_TONG_DENG_S" class="ligOff" style="position: absolute; left: 230px; top: 120px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_708_TONG_DENG_S')">南侧筒灯</button>
		<button id="LIG_OTHER_708_TONG_DENG_M" class="ligOff" style="position: absolute; left: 230px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_708_TONG_DENG_M')">中侧筒灯</button>
		<button id="LIG_OTHER_708_TONG_DENG_N" class="ligOff" style="position: absolute; left: 230px; top: 460px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_708_TONG_DENG_N')">北侧筒灯</button>

		<!-- 筒灯 西 -->
		<button id="LIG_OTHER_701_TONG_DENG_S" class="ligOff" style="position: absolute; left: 935px; top: 120px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_701_TONG_DENG_S')">南侧筒灯</button>
		<button id="LIG_OTHER_701_TONG_DENG_M" class="ligOff" style="position: absolute; left: 935px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_701_TONG_DENG_M')">中侧筒灯</button>
		<button id="LIG_OTHER_701_TONG_DENG_N" class="ligOff" style="position: absolute; left: 935px; top: 460px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_701_TONG_DENG_N')">北侧筒灯</button>

		<!-- 吧台灯 西 -->
		<button id="LIG_OTHER_F7_BA_TAI_DENG" class="ligOff" style="position: absolute; left: 870px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F7_BA_TAI_DENG')">吧台灯</button>

		<!-- 休闲室 -->
		<button id="LIG_OTHER_F7_XIU_XIAN_SHI" class="ligOff" style="position: absolute; left: 585px; top: 510px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F7_XIU_XIAN_SHI')">休闲室</button>

		<!-- 701 E W -->
		<button id="LIG_OTHER_701_E" class="ligOff" style="position: absolute; left: 305px; top: 550px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_701_E')">701东</button>
		<button id="LIG_OTHER_701_W" class="ligOff" style="position: absolute; left: 358px; top: 550px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_701_W')">701西</button>

		<!-- 706 E W -->
		<button id="LIG_OTHER_706_E" class="ligOff" style="position: absolute; left: 810px; top: 550px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_706_E')">706东</button>
		<button id="LIG_OTHER_706_W" class="ligOff" style="position: absolute; left: 864px; top: 550px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_706_W')">706西</button>

		<!-- 北侧灯带和廊灯 -->
		<button id="LIG_OTHER_F7_DENG_DAI_N" class="ligOff" style="position: absolute; left: 545px; top: 415px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F7_DENG_DAI_N')">北侧灯带</button>
		<button id="LIG_OTHER_F7_LANG_DENG_N" class="ligOff" style="position: absolute; left: 625px; top: 415px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F7_LANG_DENG_N')">北南侧廊灯</button>

		<!-- 南侧灯带和廊灯 -->
		<button id="LIG_OTHER_F7_DENG_DAI_S" class="ligOff" style="position: absolute; left: 545px; top: 165px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F7_DENG_DAI_S')">南侧灯带</button>
		<button id="LIG_OTHER_F7_LANG_DENG_S" class="ligOff" style="position: absolute; left: 625px; top: 165px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F7_LANG_DENG_S')">南侧廊灯</button>

		<!-- 前台灯 -->
		<button id="LIG_OTHER_F7_QIAN_TAI_DENG" class="ligOff" style="position: absolute; left: 585px; top: 105px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F7_QIAN_TAI_DENG')">前台灯</button>

		<!-- 院长室2-外 -->
		<button id="LIG_OTHER_F7_YUAN_ZHANG_SHI_2_WAI" class="ligOff" style="position: absolute; left: 510px; top: 105px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_F7_YUAN_ZHANG_SHI_2_WAI')">院长室2</button>
		<!-- 院长室3-外 -->
		<button id="LIG_OTHER_F7_YUAN_ZHANG_SHI_3_WAI" class="ligOff" style="position: absolute; left: 658px; top: 105px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_F7_YUAN_ZHANG_SHI_3_WAI')">院长室3</button>


		<!-- 院长室灯 -->
		<button id="LIG_OTHER_F7_YUAN_ZHANG_SHI_1" class="ligOff" style="position: absolute; left: 435px; top: 30px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_F7_YUAN_ZHANG_SHI_1')">院长室1</button>
		<button id="LIG_OTHER_F7_YUAN_ZHANG_SHI_2" class="ligOff" style="position: absolute; left: 535px; top: 30px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_F7_YUAN_ZHANG_SHI_2')">院长室2</button>
		<button id="LIG_OTHER_F7_YUAN_ZHANG_SHI_3" class="ligOff" style="position: absolute; left: 635px; top: 30px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_F7_YUAN_ZHANG_SHI_3')">院长室3</button>
		<button id="LIG_OTHER_F7_YUAN_ZHANG_SHI_4" class="ligOff" style="position: absolute; left: 735px; top: 30px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_F7_YUAN_ZHANG_SHI_4')">院长室4</button>

		<!-- 709 -->
		<button id="LIG_OTHER_709_1_E" class="ligOff" style="position: absolute; left: 307px; top: 10px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_709_1_E')">709-1-E</button>
		<button id="LIG_OTHER_709_1_W" class="ligOff" style="position: absolute; left: 358px; top: 10px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_709_1_W')">709-1-W</button>
		<button id="LIG_OTHER_709_2_E" class="ligOff" style="position: absolute; left: 307px; top: 65px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_709_2_E')">709-2-E</button>
		<button id="LIG_OTHER_709_2_W" class="ligOff" style="position: absolute; left: 358px; top: 65px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_709_2_W')">709-2-W</button>
		<button id="LIG_OTHER_709_SHE_DENG_E" class="ligOff" style="position: absolute; left: 307px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_709_SHE_DENG_E')">东射灯</button>
		<button id="LIG_OTHER_709_SHE_DENG_W" class="ligOff" style="position: absolute; left: 358px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_709_SHE_DENG_W')">西射灯</button>
		<button id="LIG_OTHER_709_SHANG_ZHAO_DENG" class="ligOff" style="position: absolute; left: 332px; top: -45px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_709_SHANG_ZHAO_DENG')">上照灯</button>

		<!-- 712 -->
		<button id="LIG_OTHER_712_1_E" class="ligOff" style="position: absolute; left: 810px; top: 10px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_712_1_E')">712-1-E</button>
		<button id="LIG_OTHER_712_1_W" class="ligOff" style="position: absolute; left: 861px; top: 10px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_712_1_W')">712-1-W</button>
		<button id="LIG_OTHER_712_2_E" class="ligOff" style="position: absolute; left: 810px; top: 65px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_712_2_E')">712-2-E</button>
		<button id="LIG_OTHER_712_2_W" class="ligOff" style="position: absolute; left: 861px; top: 65px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_712_2_W')">712-2-W</button>
		<button id="LIG_OTHER_712_SHE_DENG_E" class="ligOff" style="position: absolute; left: 810px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_712_SHE_DENG_E')">东射灯</button>
		<button id="LIG_OTHER_712_SHE_DENG_W" class="ligOff" style="position: absolute; left: 861px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_712_SHE_DENG_W')">西射灯</button>
		<button id="LIG_OTHER_712_SHANG_ZHAO_DENG" class="ligOff" style="position: absolute; left: 835px; top: -45px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_712_SHANG_ZHAO_DENG')">上照灯</button>


		<!-- 会议室灯 -->
		<button id="LIG_SCENE_706" class="ligOff" style="position: absolute; left: 435px; top: 510px;" data-toggle="modal" data-target="#scenelighting" onclick="$('#scenelightingLabelId').html('LIG_SCENE_706')">706会议</button>
		<button id="LIG_SCENE_703" class="ligOff" style="position: absolute; left: 735px; top: 510px;" data-toggle="modal" data-target="#scenelighting" onclick="$('#scenelightingLabelId').html('LIG_SCENE_703')">703会议</button>

	</div>
</div>
</center>
<?php include('view/singlelighting.php');?>
<?php include('view/controllighting.php');?>
<?php include('view/scenelighting.php');?>

<script type="text/javascript">
// subscribe targets
var gongweidengTargetsName = [
"LIG_708_21_S", "LIG_708_20_S", "LIG_708_19_S", "LIG_708_18_S", "LIG_708_17_S",
"LIG_708_16_S", "LIG_708_15_S", "LIG_708_14_S", "LIG_708_13_S", "LIG_708_12_S",
"LIG_708_11_S", "LIG_708_10_S", "LIG_708_09_S", "LIG_708_08_S", "LIG_708_07_S",
"LIG_708_06_S", "LIG_708_05_S", "LIG_708_04_S", "LIG_708_03_S", "LIG_708_02_S",
"LIG_708_01_S",

"LIG_708_21_N", "LIG_708_20_N", "LIG_708_19_N", "LIG_708_18_N", "LIG_708_17_N",
"LIG_708_16_N", "LIG_708_15_N", "LIG_708_14_N", "LIG_708_13_N", "LIG_708_12_N",
"LIG_708_11_N", "LIG_708_10_N", "LIG_708_09_N", "LIG_708_08_N", "LIG_708_07_N",
"LIG_708_06_N", "LIG_708_05_N", "LIG_708_04_N", "LIG_708_03_N", "LIG_708_02_N",
"LIG_708_01_N",

"LIG_701_21_S", "LIG_701_20_S", "LIG_701_19_S", "LIG_701_18_S", "LIG_701_17_S",
"LIG_701_16_S", "LIG_701_15_S", "LIG_701_14_S", "LIG_701_13_S", "LIG_701_12_S",
"LIG_701_11_S", "LIG_701_10_S", "LIG_701_09_S", "LIG_701_08_S", "LIG_701_07_S",
"LIG_701_06_S", "LIG_701_05_S", "LIG_701_04_S", "LIG_701_03_S", "LIG_701_02_S",
"LIG_701_01_S",

"LIG_701_21_N", "LIG_701_20_N", "LIG_701_19_N", "LIG_701_18_N", "LIG_701_17_N",
"LIG_701_16_N", "LIG_701_15_N", "LIG_701_14_N", "LIG_701_13_N", "LIG_701_12_N",
"LIG_701_11_N", "LIG_701_10_N", "LIG_701_09_N", "LIG_701_08_N", "LIG_701_07_N",
"LIG_701_06_N", "LIG_701_05_N", "LIG_701_04_N", "LIG_701_03_N", "LIG_701_02_N",
"LIG_701_01_N"
];

var singleTargetsName = [
"LIG_OTHER_701_E", "LIG_OTHER_701_W",
"LIG_OTHER_706_E", "LIG_OTHER_706_W",

"LIG_OTHER_F7_YUAN_ZHANG_SHI_2_WAI",
"LIG_OTHER_F7_YUAN_ZHANG_SHI_3_WAI",

"LIG_OTHER_F7_YUAN_ZHANG_SHI_1",
"LIG_OTHER_F7_YUAN_ZHANG_SHI_2",
"LIG_OTHER_F7_YUAN_ZHANG_SHI_3",
"LIG_OTHER_F7_YUAN_ZHANG_SHI_4",

"LIG_OTHER_709_1_E",
"LIG_OTHER_709_1_W",
"LIG_OTHER_709_2_E",
"LIG_OTHER_709_2_W",
"LIG_OTHER_709_SHE_DENG_E",
"LIG_OTHER_709_SHE_DENG_W",

"LIG_OTHER_712_1_E",
"LIG_OTHER_712_1_W",
"LIG_OTHER_712_2_E",
"LIG_OTHER_712_2_W",
"LIG_OTHER_712_SHE_DENG_E",
"LIG_OTHER_712_SHE_DENG_W"
];

var controlTargetsName = [
"LIG_OTHER_708_SHANG_ZHAO_DENG_S", "LIG_OTHER_708_SHANG_ZHAO_DENG_M", "LIG_OTHER_708_SHANG_ZHAO_DENG_N",
"LIG_OTHER_701_SHANG_ZHAO_DENG_S", "LIG_OTHER_701_SHANG_ZHAO_DENG_M", "LIG_OTHER_701_SHANG_ZHAO_DENG_N",
"LIG_OTHER_709_SHANG_ZHAO_DENG",
"LIG_OTHER_712_SHANG_ZHAO_DENG",

"LIG_OTHER_708_TONG_DENG_S", "LIG_OTHER_708_TONG_DENG_M", "LIG_OTHER_708_TONG_DENG_N",
"LIG_OTHER_701_TONG_DENG_S", "LIG_OTHER_701_TONG_DENG_M", "LIG_OTHER_701_TONG_DENG_N",

"LIG_OTHER_F7_QIAN_TAI_DENG",
"LIG_OTHER_F7_XIU_XIAN_SHI",
"LIG_OTHER_F7_BA_TAI_DENG",

"LIG_OTHER_F7_DENG_DAI_S", "LIG_OTHER_F7_LANG_DENG_S",
"LIG_OTHER_F7_DENG_DAI_N", "LIG_OTHER_F7_LANG_DENG_N"
];

var sceneTargetsName = [
"LIG_SCENE_706", "LIG_SCENE_703"
];

var subscribedTargetsName = [];
subscribedTargetsName = subscribedTargetsName.concat(
	gongweidengTargetsName,
	singleTargetsName,
	controlTargetsName,
	sceneTargetsName
);

// poll...
function startSubscribePoll(guid, isRefresh){
	return function(){
		$.ajax({
			type:'post',
			url: 'actions/subscribeTargets.php',
			contentType: "application/json; charset=utf-8",
			data: JSON.stringify({
				"isPoll": true,
				"guid": guid,
				"isRefresh": isRefresh
			}),
			dataType: "json",
			success: function(data){
				console.log(data);
				if (data.responseCode == 1000) {
					$.each(data.responseBody.SubscribeTargetValues,function(index,value){
						if (value != null) {
							if ($.inArray(value.Name, gongweidengTargetsName) != -1) {
								// gong wei deng
								if (value.Val != 0) {
									$("#" + value.Name).removeClass("gongweibtnOff");
									$("#" + value.Name).addClass("gongweibtnOn");
								} else {
									$("#" + value.Name).removeClass("gongweibtnOn");
									$("#" + value.Name).addClass("gongweibtnOff");
								}
							} else if ($.inArray(value.Name, controlTargetsName) != -1
								|| $.inArray(value.Name, singleTargetsName) != -1) {
								// control type or single type
								if (value.Val != 0) {
									$("#" + value.Name).removeClass("ligOff");
									$("#" + value.Name).addClass("ligOn");
								} else {
									$("#" + value.Name).removeClass("ligOn");
									$("#" + value.Name).addClass("ligOff");
								}
							} else if ($.inArray(value.Name, sceneTargetsName) != -1) {
								// scene type
								if (value.Val.indexOf("ALL_OFF") == -1) {
									$("#" + value.Name).removeClass("ligOff");
									$("#" + value.Name).addClass("ligOn");
								} else {
									$("#" + value.Name).removeClass("ligOn");
									$("#" + value.Name).addClass("ligOff");
								}
							}
						}
					});
				} else {
					//alert("Subscribe poll error! Please check the console.");
				}
				//alert("success");
			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
				//alert("Subscribe poll network status error.");
				//startSubscribeModle();
				//alert('error');
			}
		});
	}
}

// watch...
function startSubscribeModle(){
$.ajax({
	type:'post',
	url: 'actions/subscribeTargets.php',
	contentType: "application/json; charset=utf-8",
	data: JSON.stringify({
		"isPoll": false,
		"targetsName": subscribedTargetsName,
		"timeout": 10
	}),
	dataType: "json",
	success: function(data){
		console.log(data);
		if (data.responseCode == 1000) {
			var guid = data.responseBody;
			startSubscribePoll(guid, true)();
			setInterval(startSubscribePoll(guid, false), 1000 * 3);
		} else {
			alert("Subscribe watch error! Please check the console.");
		}
		//alert("success");
	},
	error: function(XMLHttpRequest, textStatus, errorThrown){
		console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
		alert("Subscribe watch network status error.");
		//startSubscribeModle();
		//alert('error');
	}
});
}

startSubscribeModle();

</script>

<?php include('footer.php');?>
