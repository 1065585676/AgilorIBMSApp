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
	$('.f7Fcu').addClass('active');
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
		.f7-fcu-container {
			background-image: url('image/7.png');
			background-size: 100%;
			width: 1220px;
			height: 620px;
			position: relative;
		}
    </style>
</head>

<center>
<div style="width: 90%; height: 100%; overflow:auto;">
	<div class="f7-fcu-container">

		<!-- dong open -->
		<button class="fcuOff" style="position: absolute; left: 20px; top: 80px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_34'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_34</button>
		<button class="fcuOff" style="position: absolute; left: 220px; top: 80px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_35'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_35</button>

		<button class="fcuOff" style="position: absolute; left: 20px; top: 160px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_33'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_33</button>
		<button class="fcuOff" style="position: absolute; left: 220px; top: 160px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_36'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_36</button>

		<button class="fcuOff" style="position: absolute; left: 20px; top: 246px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_32'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_32</button>
		<button class="fcuOff" style="position: absolute; left: 220px; top: 246px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_31'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_31</button>

		<button class="fcuOff" style="position: absolute; left: 20px; top: 333px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_29'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_29</button>
		<button class="fcuOff" style="position: absolute; left: 220px; top: 333px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_30'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_30</button>

		<button class="fcuOff" style="position: absolute; left: 20px; top: 418px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_28'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_28</button>
		<button class="fcuOff" style="position: absolute; left: 220px; top: 418px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_25'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_25</button>

		<button class="fcuOff" style="position: absolute; left: 20px; top: 498px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_27'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_27</button>
		<button class="fcuOff" style="position: absolute; left: 220px; top: 498px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_26'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_26</button>


		<!-- xi open -->
		<button class="fcuOff" style="position: absolute; left: 950px; top: 80px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_6'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_6</button>
		<button class="fcuOff" style="position: absolute; left: 1150px; top: 80px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_7'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_7</button>

		<button class="fcuOff" style="position: absolute; left: 950px; top: 160px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_5'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_5</button>
		<button class="fcuOff" style="position: absolute; left: 1150px; top: 160px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_8'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_8</button>

		<button class="fcuOff" style="position: absolute; left: 950px; top: 246px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_10'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_10</button>
		<button class="fcuOff" style="position: absolute; left: 1150px; top: 246px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_9'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_9</button>

		<button class="fcuOff" style="position: absolute; left: 950px; top: 333px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_11'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_11</button>
		<button class="fcuOff" style="position: absolute; left: 1150px; top: 333px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_12'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_12</button>

		<button class="fcuOff" style="position: absolute; left: 950px; top: 418px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_16'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_16</button>
		<button class="fcuOff" style="position: absolute; left: 1150px; top: 418px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_13'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_13</button>

		<button class="fcuOff" style="position: absolute; left: 950px; top: 498px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_15'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_15</button>
		<button class="fcuOff" style="position: absolute; left: 1150px; top: 498px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_14'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_14</button>

		<button class="fcuOff" style="position: absolute; left: 306px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_37'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_37</button>
		<button class="fcuOff" style="position: absolute; left: 360px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_38'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_38</button>

		<button class="fcuOff" style="position: absolute; left: 435px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_39'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_39</button>
		<button class="fcuOff" style="position: absolute; left: 435px; top: 105px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_42'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_42</button>

		<button class="fcuOff" style="position: absolute; left: 535px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_40'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_40</button>
		<button class="fcuOff" style="position: absolute; left: 635px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_1'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_1</button>

		<button class="fcuOff" style="position: absolute; left: 735px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_2'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_2</button>
		<button class="fcuOff" style="position: absolute; left: 735px; top: 105px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_3'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_3</button>

		<button class="fcuOff" style="position: absolute; left: 835px; top: 25px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_4'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_4</button>

		<button class="fcuOff" style="position: absolute; left: 306px; top: 535px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_24'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_24</button>
		<button class="fcuOff" style="position: absolute; left: 360px; top: 535px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_23'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_23</button>

		<button class="fcuOff" style="position: absolute; left: 435px; top: 535px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_22'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_22</button>
		<button class="fcuOff" style="position: absolute; left: 550px; top: 535px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_21'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_1')">FCU7_21</button>
		<button class="fcuOff" style="position: absolute; left: 630px; top: 535px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_20'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_20</button>
		<button class="fcuOff" style="position: absolute; left: 735px; top: 535px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_19'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_19</button>

		<button class="fcuOff" style="position: absolute; left: 810px; top: 535px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_18'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_18</button>
		<button class="fcuOff" style="position: absolute; left: 864px; top: 535px;" data-toggle="modal" data-target="#fcuControlView" onclick="$('#fcuControlViewLabelId').html('FCU_F7_7_17'); $('#fcuControlViewLabelDeviceName').html('BACNET_FCU_F7_2')">FCU7_17</button>


	</div>
</div>
</center>

<?php include('view/fcu.php');?>

<?php include('footer.php');?>
