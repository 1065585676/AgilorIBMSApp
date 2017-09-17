<?php include('header.php');?>

<script type="text/javascript">
	$(function(){
		// body...
		$('.f7Lig').removeClass('active');
		//$('.f8Lig').removeClass('active');
		$('.f7Cur').removeClass('active');
		$('.f8Cur').removeClass('active');

		$('.f8Lig').addClass('active');
	})
</script>

<center>
<div style="width: 90%; height: 100%; overflow:auto;">
	<div class="lighting-container-8">

		<!-- 工位灯 东办公区  -->
		<button id="LIG_808_19_S" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_19_S')">808-19-S</button>
		<button id="LIG_808_20_S" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_20_S')">808-20-S</button>
		<button id="LIG_808_21_S" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_21_S')">808-21-S</button>

		<button id="LIG_808_19_N" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_19_N')">808-19-N</button>
		<button id="LIG_808_20_N" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_20_N')">808-20-N</button>
		<button id="LIG_808_21_N" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_21_N')">808-21-N</button>

		<button id="LIG_808_16_S" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_16_S')">808-16-S</button>
		<button id="LIG_808_17_S" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_17_S')">808-17-S</button>
		<button id="LIG_808_18_S" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_18_S')">808-18-S</button>

		<button id="LIG_808_16_N" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_16_N')">808-16-N</button>
		<button id="LIG_808_17_N" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_17_N')">808-17-N</button>
		<button id="LIG_808_18_N" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_18_N')">808-18-N</button>

		<button id="LIG_808_13_S" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_13_S')">808-13-S</button>
		<button id="LIG_808_14_S" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_14_S')">808-14-S</button>
		<button id="LIG_808_15_S" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_15_S')">808-15-S</button>

		<button id="LIG_808_13_N" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_13_N')">808-13-N</button>
		<button id="LIG_808_14_N" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_14_N')">808-14-N</button>
		<button id="LIG_808_15_N" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_15_N')">808-15-N</button>

		<button id="LIG_808_10_S" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_10_S')">808-10-S</button>
		<button id="LIG_808_11_S" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_11_S')">808-11-S</button>
		<button id="LIG_808_12_S" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_12_S')">808-12-S</button>

		<button id="LIG_808_10_N" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_10_N')">808-10-N</button>
		<button id="LIG_808_11_N" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_11_N')">808-11-N</button>
		<button id="LIG_808_12_N" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_12_N')">808-12-N</button>

		<button id="LIG_808_07_S" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_07_S')">808-7-S</button>
		<button id="LIG_808_08_S" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_08_S')">808-8-S</button>
		<button id="LIG_808_09_S" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_09_S')">808-9-S</button>

		<button id="LIG_808_07_N" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_07_N')">808-7-N</button>
		<button id="LIG_808_08_N" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_08_N')">808-8-N</button>
		<button id="LIG_808_09_N" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_09_N')">808-9-N</button>

		<button id="LIG_808_04_S" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_04_S')">808-4-S</button>
		<button id="LIG_808_05_S" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_05_S')">808-5-S</button>
		<button id="LIG_808_06_S" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_06_S')">808-6-S</button>

		<button id="LIG_808_04_N" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_04_N')">808-4-N</button>
		<button id="LIG_808_05_N" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_05_N')">808-5-N</button>
		<button id="LIG_808_06_N" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_06_N')">808-6-N</button>

		<button id="LIG_808_01_S" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_01_S')">808-1-S</button>
		<button id="LIG_808_02_S" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_02_S')">808-2-S</button>
		<button id="LIG_808_03_S" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_03_S')">808-3-S</button>

		<button id="LIG_808_01_N" class="btn gongweibtnOff" style="position: absolute; left: 22px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_01_N')">808-1-N</button>
		<button id="LIG_808_02_N" class="btn gongweibtnOff" style="position: absolute; left: 92px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_02_N')">808-2-N</button>
		<button id="LIG_808_03_N" class="btn gongweibtnOff" style="position: absolute; left: 162px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_808_03_N')">808-3-N</button>

		<!-- 工位灯 西办公区  -->
		<button id="LIG_801_19_S" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_19_S')">801-19-S</button>
		<button id="LIG_801_20_S" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_20_S')">801-20-S</button>
		<button id="LIG_801_21_S" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 540px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_21_S')">801-21-S</button>

		<button id="LIG_801_19_N" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_19_N')">801-19-N</button>
		<button id="LIG_801_20_N" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_20_N')">801-20-N</button>
		<button id="LIG_801_21_N" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 570px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_21_N')">801-21-N</button>

		<button id="LIG_801_16_S" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_16_S')">801-16-S</button>
		<button id="LIG_801_17_S" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_17_S')">801-17-S</button>
		<button id="LIG_801_18_S" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 458px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_18_S')">801-18-S</button>

		<button id="LIG_801_16_N" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_16_N')">801-16-N</button>
		<button id="LIG_801_17_N" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_17_N')">801-17-N</button>
		<button id="LIG_801_18_N" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 488px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_18_N')">801-18-N</button>

		<button id="LIG_801_13_S" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_13_S')">801-13-S</button>
		<button id="LIG_801_14_S" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_14_S')">801-14-S</button>
		<button id="LIG_801_15_S" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 377px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_15_S')">801-15-S</button>

		<button id="LIG_801_13_N" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_13_N')">801-13-N</button>
		<button id="LIG_801_14_N" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_14_N')">801-14-N</button>
		<button id="LIG_801_15_N" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 407px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_15_N')">801-15-N</button>

		<button id="LIG_801_10_S" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_10_S')">801-10-S</button>
		<button id="LIG_801_11_S" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_11_S')">801-11-S</button>
		<button id="LIG_801_12_S" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 289px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_12_S')">801-12-S</button>

		<button id="LIG_801_10_N" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_10_N')">801-10-N</button>
		<button id="LIG_801_11_N" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_11_N')">801-11-N</button>
		<button id="LIG_801_12_N" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 319px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_12_N')">801-12-N</button>

		<button id="LIG_801_07_S" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_07_S')">801-7-S</button>
		<button id="LIG_801_08_S" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_08_S')">801-8-S</button>
		<button id="LIG_801_09_S" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 201px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_09_S')">801-9-S</button>

		<button id="LIG_801_07_N" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_07_N')">801-7-N</button>
		<button id="LIG_801_08_N" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_08_N')">801-8-N</button>
		<button id="LIG_801_09_N" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 231px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_09_N')">801-9-N</button>

		<button id="LIG_801_04_S" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_04_S')">801-4-S</button>
		<button id="LIG_801_05_S" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_05_S')">801-5-S</button>
		<button id="LIG_801_06_S" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 120px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_06_S')">801-6-S</button>

		<button id="LIG_801_04_N" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_04_N')">801-4-N</button>
		<button id="LIG_801_05_N" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_05_N')">801-5-N</button>
		<button id="LIG_801_06_N" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 150px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_06_N')">801-6-N</button>

		<button id="LIG_801_01_S" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_01_S')">801-1-S</button>
		<button id="LIG_801_02_S" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_02_S')">801-2-S</button>
		<button id="LIG_801_03_S" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 38px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_03_S')">801-3-S</button>

		<button id="LIG_801_01_N" class="btn gongweibtnOff" style="position: absolute; left: 995px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_01_N')">801-1-N</button>
		<button id="LIG_801_02_N" class="btn gongweibtnOff" style="position: absolute; left: 1065px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_02_N')">801-2-N</button>
		<button id="LIG_801_03_N" class="btn gongweibtnOff" style="position: absolute; left: 1135px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_801_03_N')">801-3-N</button>


		<!-- 上照灯 东 -->
		<button id="LIG_OTHER_808_SHANG_ZHAO_DENG_S" class="ligOff" style="position: absolute; left: -40px; top: 120px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_808_SHANG_ZHAO_DENG_S')">南上照灯</button>
		<button id="LIG_OTHER_808_SHANG_ZHAO_DENG_M" class="ligOff" style="position: absolute; left: -40px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_808_SHANG_ZHAO_DENG_M')">中上照灯</button>
		<button id="LIG_OTHER_808_SHANG_ZHAO_DENG_N" class="ligOff" style="position: absolute; left: -40px; top: 460px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_808_SHANG_ZHAO_DENG_N')">北上照灯</button>

		<!-- 上照灯 西 -->
		<button id="LIG_OTHER_801_SHANG_ZHAO_DENG_S" class="ligOff" style="position: absolute; left: 1210px; top: 120px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_801_SHANG_ZHAO_DENG_S')">南上照灯</button>
		<button id="LIG_OTHER_801_SHANG_ZHAO_DENG_M" class="ligOff" style="position: absolute; left: 1210px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_801_SHANG_ZHAO_DENG_M')">中上照灯</button>
		<button id="LIG_OTHER_801_SHANG_ZHAO_DENG_N" class="ligOff" style="position: absolute; left: 1210px; top: 460px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_801_SHANG_ZHAO_DENG_N')">北上照灯</button>

		<!-- 筒灯 东 -->
		<button id="LIG_OTHER_808_TONG_DENG_S" class="ligOff" style="position: absolute; left: 230px; top: 120px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_808_TONG_DENG_S')">南侧筒灯</button>
		<button id="LIG_OTHER_808_TONG_DENG_M" class="ligOff" style="position: absolute; left: 230px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_808_TONG_DENG_M')">中侧筒灯</button>
		<button id="LIG_OTHER_808_TONG_DENG_N" class="ligOff" style="position: absolute; left: 230px; top: 460px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_808_TONG_DENG_N')">北侧筒灯</button>

		<!-- 筒灯 西 -->
		<button id="LIG_OTHER_801_TONG_DENG_S" class="ligOff" style="position: absolute; left: 935px; top: 120px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_801_TONG_DENG_S')">南侧筒灯</button>
		<button id="LIG_OTHER_801_TONG_DENG_M" class="ligOff" style="position: absolute; left: 935px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_801_TONG_DENG_M')">中侧筒灯</button>
		<button id="LIG_OTHER_801_TONG_DENG_N" class="ligOff" style="position: absolute; left: 935px; top: 460px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_801_TONG_DENG_N')">北侧筒灯</button>

		<!-- 吧台灯 -->
		<button id="LIG_OTHER_F8_BA_TAI_DENG_W" class="ligOff" style="position: absolute; left: 870px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F8_BA_TAI_DENG_W')">西吧台灯</button>
		<button id="LIG_OTHER_F8_BA_TAI_DENG_E" class="ligOff" style="position: absolute; left: 300px; top: 290px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F8_BA_TAI_DENG_E')">东吧台灯</button>


		<!-- 北侧灯带和廊灯 -->
		<button id="LIG_OTHER_F8_DENG_DAI_N" class="ligOff" style="position: absolute; left: 545px; top: 415px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F8_DENG_DAI_N')">北侧灯带</button>
		<button id="LIG_OTHER_F8_LANG_DENG_N" class="ligOff" style="position: absolute; left: 625px; top: 415px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F8_LANG_DENG_N')">北侧廊灯</button>

		<!-- 南侧灯带和廊灯 -->
		<button id="LIG_OTHER_F8_DENG_DAI_S" class="ligOff" style="position: absolute; left: 545px; top: 165px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F8_DENG_DAI_S')">南侧灯带</button>
		<button id="LIG_OTHER_F8_LANG_DENG_S" class="ligOff" style="position: absolute; left: 625px; top: 165px;" data-toggle="modal" data-target="#controllighting" onclick="$('#controllightingLabelId').html('LIG_OTHER_F8_LANG_DENG_S')">南侧廊灯</button>


		<!-- 810 -->
		<button id="LIG_OTHER_810_SHANG_ZHAO_DENG" class="ligOff" style="position: absolute; left: 442px; top: 15px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_810_SHANG_ZHAO_DENG')">上照灯</button>
		<button id="LIG_OTHER_810_E" class="ligOff" style="position: absolute; left: 412px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_810_E')">810东</button>
		<button id="LIG_OTHER_810_W" class="ligOff" style="position: absolute; left: 466px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_810_W')">810西</button>
		<button id="LIG_OTHER_810_SHE_DENG_E" class="ligOff" style="position: absolute; left: 412px; top: 122px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_810_SHE_DENG_E')">东射灯</button>
		<button id="LIG_OTHER_810_SHE_DENG_W" class="ligOff" style="position: absolute; left: 466px; top: 122px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_810_SHE_DENG_W')">西射灯</button>

		<!-- 院长室灯 -->
		<button id="LIG_SCENE_F8_HUIYISHI_4" class="ligOff" style="position: absolute; left: 535px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_SCENE_F8_HUIYISHI_4')">会议室4</button>

		<!-- 休闲室 -->
		<button id="LIG_OTHER_F8_XIU_XIAN_SHI" class="ligOff" style="position: absolute; left: 690px; top: 68px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_F8_XIU_XIAN_SHI')">休闲室</button>

		<!-- 801 -->
		<button id="LIG_OTHER_801_E" class="ligOff" style="position: absolute; left: 307px; top: 30px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_801_E')">801东</button>
		<button id="LIG_OTHER_801_W" class="ligOff" style="position: absolute; left: 358px; top: 30px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_801_W')">801西</button>

		<!-- 806 -->
		<button id="LIG_OTHER_806_E" class="ligOff" style="position: absolute; left: 810px; top: 30px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_806_E')">806东</button>
		<button id="LIG_OTHER_806_W" class="ligOff" style="position: absolute; left: 861px; top: 30px;" data-toggle="modal" data-target="#singlelighting" onclick="$('#lightingLabelId').html('LIG_OTHER_806_W')">806西</button>


		<!-- 会议室灯 -->
		<button id="LIG_SCENE_F8_HUIYISHI_3" class="ligOff" style="position: absolute; left: 330px; top: 510px;" data-toggle="modal" data-target="#scenelighting" onclick="$('#scenelightingLabelId').html('LIG_SCENE_F8_HUIYISHI_3')">会议室3</button>
		<button id="LIG_SCENE_F8_HUIYISHI_5" class="ligOff" style="position: absolute; left: 435px; top: 510px;" data-toggle="modal" data-target="#scenelighting" onclick="$('#scenelightingLabelId').html('LIG_SCENE_F8_HUIYISHI_5')">会议室5</button>
		<button id="LIG_SCENE_F8_DAHUIYI" class="ligOff" style="position: absolute; left: 585px; top: 510px;" data-toggle="modal" data-target="#scenelighting" onclick="$('#scenelightingLabelId').html('LIG_SCENE_F8_DAHUIYI')">大会议室</button>
		<button id="LIG_SCENE_F8_HUIYISHI_6" class="ligOff" style="position: absolute; left: 735px; top: 510px;" data-toggle="modal" data-target="#scenelighting" onclick="$('#scenelightingLabelId').html('LIG_SCENE_F8_HUIYISHI_6')">会议室6</button>


	</div>
</div>
</center>
<?php include('view/singlelighting.php');?>

<?php include('view/controllighting.php');?>

<?php include('view/scenelighting.php');?>


<script type="text/javascript">
// subscribe targets
var gongweidengTargetsName = [
"LIG_808_21_S", "LIG_808_20_S", "LIG_808_19_S", "LIG_808_18_S", "LIG_808_17_S",
"LIG_808_16_S", "LIG_808_15_S", "LIG_808_14_S", "LIG_808_13_S", "LIG_808_12_S",
"LIG_808_11_S", "LIG_808_10_S", "LIG_808_09_S", "LIG_808_08_S", "LIG_808_07_S",
"LIG_808_06_S", "LIG_808_05_S", "LIG_808_04_S", "LIG_808_03_S", "LIG_808_02_S",
"LIG_808_01_S",

"LIG_808_21_N", "LIG_808_20_N", "LIG_808_19_N", "LIG_808_18_N", "LIG_808_17_N",
"LIG_808_16_N", "LIG_808_15_N", "LIG_808_14_N", "LIG_808_13_N", "LIG_808_12_N",
"LIG_808_11_N", "LIG_808_10_N", "LIG_808_09_N", "LIG_808_08_N", "LIG_808_07_N",
"LIG_808_06_N", "LIG_808_05_N", "LIG_808_04_N", "LIG_808_03_N", "LIG_808_02_N",
"LIG_808_01_N",

"LIG_801_21_S", "LIG_801_20_S", "LIG_801_19_S", "LIG_801_18_S", "LIG_801_17_S",
"LIG_801_16_S", "LIG_801_15_S", "LIG_801_14_S", "LIG_801_13_S", "LIG_801_12_S",
"LIG_801_11_S", "LIG_801_10_S", "LIG_801_09_S", "LIG_801_08_S", "LIG_801_07_S",
"LIG_801_06_S", "LIG_801_05_S", "LIG_801_04_S", "LIG_801_03_S", "LIG_801_02_S",
"LIG_801_01_S",

"LIG_801_21_N", "LIG_801_20_N", "LIG_801_19_N", "LIG_801_18_N", "LIG_801_17_N",
"LIG_801_16_N", "LIG_801_15_N", "LIG_801_14_N", "LIG_801_13_N", "LIG_801_12_N",
"LIG_801_11_N", "LIG_801_10_N", "LIG_801_09_N", "LIG_801_08_N", "LIG_801_07_N",
"LIG_801_06_N", "LIG_801_05_N", "LIG_801_04_N", "LIG_801_03_N", "LIG_801_02_N",
"LIG_801_01_N"
];

var singleTargetsName = [
"LIG_OTHER_801_E", "LIG_OTHER_801_W",
"LIG_OTHER_806_E", "LIG_OTHER_806_W",

"LIG_OTHER_810_E",
"LIG_OTHER_810_W",
"LIG_OTHER_810_SHE_DENG_E",
"LIG_OTHER_810_SHE_DENG_W"
];

var controlTargetsName = [
"LIG_OTHER_808_SHANG_ZHAO_DENG_S", "LIG_OTHER_808_SHANG_ZHAO_DENG_M", "LIG_OTHER_808_SHANG_ZHAO_DENG_N",
"LIG_OTHER_801_SHANG_ZHAO_DENG_S", "LIG_OTHER_801_SHANG_ZHAO_DENG_M", "LIG_OTHER_801_SHANG_ZHAO_DENG_N",
"LIG_OTHER_810_SHANG_ZHAO_DENG",

"LIG_OTHER_808_TONG_DENG_S", "LIG_OTHER_808_TONG_DENG_M", "LIG_OTHER_808_TONG_DENG_N",
"LIG_OTHER_801_TONG_DENG_S", "LIG_OTHER_801_TONG_DENG_M", "LIG_OTHER_801_TONG_DENG_N",

"LIG_OTHER_F8_XIU_XIAN_SHI",
"LIG_OTHER_F8_BA_TAI_DENG_W",
"LIG_OTHER_F8_BA_TAI_DENG_E",

"LIG_OTHER_F8_DENG_DAI_S", "LIG_OTHER_F8_LANG_DENG_S",
"LIG_OTHER_F8_DENG_DAI_N", "LIG_OTHER_F8_LANG_DENG_N"
];

var sceneTargetsName = [
"LIG_SCENE_F8_HUIYISHI_3", "LIG_SCENE_F8_HUIYISHI_4",
"LIG_SCENE_F8_HUIYISHI_5", "LIG_SCENE_F8_HUIYISHI_6",
"LIG_SCENE_F8_DAHUIYI"
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
