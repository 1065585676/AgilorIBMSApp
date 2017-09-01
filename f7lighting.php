<?php include('header.php');?>

<script type="text/javascript">
	$(function(){
		// body...
		//$('.f7Lig').removeClass('active');
		$('.f8Lig').removeClass('active');
		$('.f7Cur').removeClass('active');
		$('.f8Cur').removeClass('active');

		$('.f7Lig').addClass('active');
	})
</script>

<center>
<div style="width: 90%; height: 100%; overflow:auto;">
	<div class="lighting-container">

		<!-- 工位灯 东办公区  -->
		<button class="btn gongweibtn" style="position: absolute; left: 22px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_19_S')">708-19-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 92px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_20_S')">708-20-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 162px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_21_S')">708-21-S</button>

		<button class="btn gongweibtn" style="position: absolute; left: 22px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_19_N')">708-19-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 92px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_20_N')">708-20-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 162px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_21_N')">708-21-N</button>

		<button class="btn gongweibtn" style="position: absolute; left: 22px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_16_S')">708-16-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 92px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_17_S')">708-17-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 162px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_18_S')">708-18-S</button>

		<button class="btn gongweibtn" style="position: absolute; left: 22px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_16_N')">708-16-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 92px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_17_N')">708-17-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 162px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_18_N')">708-18-N</button>

		<button class="btn gongweibtn" style="position: absolute; left: 22px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_13_S')">708-13-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 92px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_14_S')">708-14-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 162px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_15_S')">708-15-S</button>

		<button class="btn gongweibtn" style="position: absolute; left: 22px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_13_N')">708-13-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 92px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_14_N')">708-14-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 162px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_15_N')">708-15-N</button>

		<button class="btn gongweibtn" style="position: absolute; left: 22px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_10_S')">708-10-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 92px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_11_S')">708-11-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 162px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_12_S')">708-12-S</button>

		<button class="btn gongweibtn" style="position: absolute; left: 22px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_10_N')">708-10-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 92px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_11_N')">708-11-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 162px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_12_N')">708-12-N</button>

		<button class="btn gongweibtn" style="position: absolute; left: 22px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_07_S')">708-7-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 92px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_08_S')">708-8-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 162px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_09_S')">708-9-S</button>

		<button class="btn gongweibtn" style="position: absolute; left: 22px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_07_N')">708-7-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 92px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_08_N')">708-8-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 162px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_09_N')">708-9-N</button>

		<button class="btn gongweibtn" style="position: absolute; left: 22px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_04_S')">708-4-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 92px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_05_S')">708-5-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 162px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_06_S')">708-6-S</button>

		<button class="btn gongweibtn" style="position: absolute; left: 22px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_04_N')">708-4-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 92px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_05_N')">708-5-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 162px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_06_N')">708-6-N</button>

		<button class="btn gongweibtn" style="position: absolute; left: 22px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_01_S')">708-1-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 92px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_02_S')">708-2-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 162px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_03_S')">708-3-S</button>

		<button class="btn gongweibtn" style="position: absolute; left: 22px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_01_N')">708-1-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 92px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_02_N')">708-2-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 162px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_708_03_N')">708-3-N</button>

		<!-- 工位灯 西办公区  -->
		<button class="btn gongweibtn" style="position: absolute; left: 995px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_19_S')">701-19-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1065px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_20_S')">701-20-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1135px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_21_S')">701-21-S</button>

		<button class="btn gongweibtn" style="position: absolute; left: 995px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_19_N')">701-19-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1065px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_20_N')">701-20-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1135px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_21_N')">701-21-N</button>

		<button class="btn gongweibtn" style="position: absolute; left: 995px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_16_S')">701-16-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1065px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_17_S')">701-17-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1135px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_18_S')">701-18-S</button>

		<button class="btn gongweibtn" style="position: absolute; left: 995px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_16_N')">701-16-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1065px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_17_N')">701-17-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1135px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_18_N')">701-18-N</button>

		<button class="btn gongweibtn" style="position: absolute; left: 995px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_13_S')">701-13-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1065px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_14_S')">701-14-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1135px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_15_S')">701-15-S</button>

		<button class="btn gongweibtn" style="position: absolute; left: 995px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_13_N')">701-13-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1065px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_14_N')">701-14-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1135px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_15_N')">701-15-N</button>

		<button class="btn gongweibtn" style="position: absolute; left: 995px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_10_S')">701-10-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1065px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_11_S')">701-11-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1135px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_12_S')">701-12-S</button>

		<button class="btn gongweibtn" style="position: absolute; left: 995px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_10_N')">701-10-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1065px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_11_N')">701-11-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1135px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_12_N')">701-12-N</button>

		<button class="btn gongweibtn" style="position: absolute; left: 995px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_07_S')">701-7-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1065px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_08_S')">701-8-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1135px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_09_S')">701-9-S</button>

		<button class="btn gongweibtn" style="position: absolute; left: 995px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_07_N')">701-7-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1065px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_08_N')">701-8-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1135px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_09_N')">701-9-N</button>

		<button class="btn gongweibtn" style="position: absolute; left: 995px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_04_S')">701-4-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1065px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_05_S')">701-5-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1135px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_06_S')">701-6-S</button>

		<button class="btn gongweibtn" style="position: absolute; left: 995px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_04_N')">701-4-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1065px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_05_N')">701-5-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1135px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_06_N')">701-6-N</button>

		<button class="btn gongweibtn" style="position: absolute; left: 995px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_01_S')">701-1-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1065px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_02_S')">701-2-S</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1135px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_03_S')">701-3-S</button>

		<button class="btn gongweibtn" style="position: absolute; left: 995px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_01_N')">701-1-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1065px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_02_N')">701-2-N</button>
		<button class="btn gongweibtn" style="position: absolute; left: 1135px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_701_03_N')">701-3-N</button>


		<!-- 上照灯 东 -->
		<button class="shangzhaodeng" style="position: absolute; left: -40px; top: 120px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_708_SHANG_ZHAO_DENG_S')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: -40px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_708_SHANG_ZHAO_DENG_M')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: -40px; top: 460px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_708_SHANG_ZHAO_DENG_N')"></button>

		<!-- 上照灯 西 -->
		<button class="shangzhaodeng" style="position: absolute; left: 1210px; top: 120px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_701_SHANG_ZHAO_DENG_S')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 1210px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_701_SHANG_ZHAO_DENG_M')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 1210px; top: 460px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_701_SHANG_ZHAO_DENG_N')"></button>

		<!-- 筒灯 东 -->
		<button class="shangzhaodeng" style="position: absolute; left: 230px; top: 120px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_708_TONG_DENG_S')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 230px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_708_TONG_DENG_M')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 230px; top: 460px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_708_TONG_DENG_N')"></button>

		<!-- 筒灯 西 -->
		<button class="shangzhaodeng" style="position: absolute; left: 935px; top: 120px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_701_TONG_DENG_S')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 935px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_701_TONG_DENG_M')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 935px; top: 460px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_701_TONG_DENG_N')"></button>

		<!-- 吧台灯 西 -->
		<button class="shangzhaodeng" style="position: absolute; left: 880px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F7_BA_TAI_DENG')"></button>

		<!-- 休闲室 -->
		<button class="shangzhaodeng" style="position: absolute; left: 585px; top: 510px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F7_XIU_XIAN_SHI')"></button>

		<!-- 701 E W -->
		<button class="shangzhaodeng" style="position: absolute; left: 305px; top: 550px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_701_E')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 358px; top: 550px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_701_W')"></button>

		<!-- 706 E W -->
		<button class="shangzhaodeng" style="position: absolute; left: 810px; top: 550px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_706_E')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 864px; top: 550px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_706_W')"></button>

		<!-- 北侧灯带和廊灯 -->
		<button class="shangzhaodeng" style="position: absolute; left: 545px; top: 415px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F7_DENG_DAI_N')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 625px; top: 415px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F7_LANG_DENG_N')"></button>

		<!-- 南侧灯带和廊灯 -->
		<button class="shangzhaodeng" style="position: absolute; left: 545px; top: 165px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F7_DENG_DAI_S')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 625px; top: 165px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F7_LANG_DENG_S')"></button>

		<!-- 前台灯 -->
		<button class="shangzhaodeng" style="position: absolute; left: 585px; top: 105px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F7_QIAN_TAI_DENG')"></button>

		<!-- 院长室2-外 -->
		<button class="shangzhaodeng" style="position: absolute; left: 510px; top: 105px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_F7_YUAN_ZHANG_SHI_2_WAI')"></button>
		<!-- 院长室3-外 -->
		<button class="shangzhaodeng" style="position: absolute; left: 658px; top: 105px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_F7_YUAN_ZHANG_SHI_3_WAI')"></button>


		<!-- 院长室灯 -->
		<button class="shangzhaodeng" style="position: absolute; left: 435px; top: 30px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_F7_YUAN_ZHANG_SHI_1')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 535px; top: 30px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_F7_YUAN_ZHANG_SHI_2')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 635px; top: 30px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_F7_YUAN_ZHANG_SHI_3')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 735px; top: 30px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_F7_YUAN_ZHANG_SHI_4')"></button>

		<!-- 709 -->
		<button class="shangzhaodeng" style="position: absolute; left: 307px; top: 10px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_709_1_E')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 358px; top: 10px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_709_1_W')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 307px; top: 65px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_709_2_E')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 358px; top: 65px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_709_2_W')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 307px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_709_SHE_DENG_E')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 358px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_709_SHE_DENG_W')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 332px; top: -45px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_709_SHANG_ZHAO_DENG')"></button>

		<!-- 712 -->
		<button class="shangzhaodeng" style="position: absolute; left: 810px; top: 10px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_712_1_E')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 861px; top: 10px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_712_1_W')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 810px; top: 65px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_712_2_E')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 861px; top: 65px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_712_2_W')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 810px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_712_SHE_DENG_E')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 861px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_712_SHE_DENG_W')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 835px; top: -45px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_712_SHANG_ZHAO_DENG')"></button>


		<!-- 会议室灯 -->
		<button class="shangzhaodeng" style="position: absolute; left: 435px; top: 510px;" data-toggle="modal" data-target="#scenelighting" onclick="$('#scenelightingLabelId').html('LIG_SCENE_706')"></button>
		<button class="shangzhaodeng" style="position: absolute; left: 735px; top: 510px;" data-toggle="modal" data-target="#scenelighting" onclick="$('#scenelightingLabelId').html('LIG_SCENE_703')"></button>

	</div>
</div>
</center>
<?php include('view/singlelighting.php');?>

<?php include('view/controllighting.php');?>

<?php include('view/scenelighting.php');?>

<?php include('footer.php');?>
