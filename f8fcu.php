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
	$('.f8Fcu').addClass('active');
</script>

<head>
    <title>FCU</title>
    <style>
		body {
			background-color: #BABABA;
		}
		.fcuOn{
			width: 50px;
			height: 50px;
			padding: 0 0 0 0;
			background-image: url('image/FCU-ON.png');
			border:0px;
			background-size: 100% 100%;
			background-color: rgba(255, 255, 255, 0);

			color: white;
			font-size: 11px;
			padding-top: 34px;
		}
		.fcuOff{
			width: 50px;
			height: 50px;
			padding: 0 0 0 0;
			background-image: url('image/FCU-OFF.png');
			border:0px;
			background-size: 100% 100%;
			background-color: rgba(255, 255, 255, 0);

			color: #D2B48C;
			font-size: 11px;
			padding-top: 34px;
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
		.f8-fcu-container {
			background-image: url('image/8.png');
			background-size: 100%;
			width: 1220px;
			height: 620px;
			position: relative;
		}
    </style>
</head>

<center>
<div style="width: 90%; height: 100%; overflow:auto;">
	<div class="f8-fcu-container">

		<!-- dong open -->
		<button class="fcuOff" style="position: absolute; left: 20px; top: 80px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_31'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_31</button>
		<button class="fcuOff" style="position: absolute; left: 220px; top: 80px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_32'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_32</button>

		<button class="fcuOff" style="position: absolute; left: 20px; top: 160px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_30'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_30</button>
		<button class="fcuOff" style="position: absolute; left: 220px; top: 160px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_33'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_33</button>

		<button class="fcuOff" style="position: absolute; left: 20px; top: 246px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_29'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_29</button>
		<button class="fcuOff" style="position: absolute; left: 220px; top: 246px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_28'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_28</button>

		<button class="fcuOff" style="position: absolute; left: 20px; top: 333px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_26'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_26</button>
		<button class="fcuOff" style="position: absolute; left: 220px; top: 333px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_27'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_27</button>

		<button class="fcuOff" style="position: absolute; left: 20px; top: 418px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_25'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_25</button>
		<button class="fcuOff" style="position: absolute; left: 220px; top: 418px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_22'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_22</button>

		<button class="fcuOff" style="position: absolute; left: 20px; top: 498px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_24'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_24</button>
		<button class="fcuOff" style="position: absolute; left: 220px; top: 498px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_23'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_23</button>


		<!-- xi open -->
		<button class="fcuOff" style="position: absolute; left: 950px; top: 80px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_5'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_5</button>
		<button class="fcuOff" style="position: absolute; left: 1150px; top: 80px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_6'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_6</button>

		<button class="fcuOff" style="position: absolute; left: 950px; top: 160px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_4'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_4</button>
		<button class="fcuOff" style="position: absolute; left: 1150px; top: 160px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_7'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_7</button>

		<button class="fcuOff" style="position: absolute; left: 950px; top: 246px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_9'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_9</button>
		<button class="fcuOff" style="position: absolute; left: 1150px; top: 246px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_8'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_8</button>

		<button class="fcuOff" style="position: absolute; left: 950px; top: 333px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_10'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_10</button>
		<button class="fcuOff" style="position: absolute; left: 1150px; top: 333px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_11'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_11</button>

		<button class="fcuOff" style="position: absolute; left: 950px; top: 418px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_15'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_15</button>
		<button class="fcuOff" style="position: absolute; left: 1150px; top: 418px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_12'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_12</button>

		<button class="fcuOff" style="position: absolute; left: 950px; top: 498px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_14'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_14</button>
		<button class="fcuOff" style="position: absolute; left: 1150px; top: 498px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_13'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_13</button>


		<button class="fcuOff" style="position: absolute; left: 306px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_35'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_35</button>
		<button class="fcuOff" style="position: absolute; left: 360px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_34'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_34</button>

		<button class="fcuOff" style="position: absolute; left: 442px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_36'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_36</button>

		<button class="fcuOff" style="position: absolute; left: 536px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_37'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_37</button>

		<button class="fcuOff" style="position: absolute; left: 652px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_38'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_38</button>

		<button class="fcuOff" style="position: absolute; left: 735px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_2'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_2</button>

		<button class="fcuOff" style="position: absolute; left: 812px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_3'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_3</button>
		<button class="fcuOff" style="position: absolute; left: 865px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_1'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_1</button>


		<button class="fcuOff" style="position: absolute; left: 328px; top: 535px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_21'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_21</button>

		<button class="fcuOff" style="position: absolute; left: 435px; top: 535px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_20'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_20</button>

		<button class="fcuOff" style="position: absolute; left: 544px; top: 535px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_19'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_1')">FCU8_19</button>
		<button class="fcuOff" style="position: absolute; left: 625px; top: 535px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_18'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_18</button>

		<button class="fcuOff" style="position: absolute; left: 736px; top: 535px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_17'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_17</button>

		<button class="fcuOff" style="position: absolute; left: 840px; top: 535px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F8_8_16'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F8_2')">FCU8_16</button>


	</div>
</div>
</center>

<?php include('view/fcu.php');?>

<?php include('footer.php');?>
