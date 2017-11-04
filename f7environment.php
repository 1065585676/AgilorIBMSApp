<?php include('header.php');?>

<script type="text/javascript">
	$(function(){
		$('.f7Env').addClass('active');
	})
</script>

<center>
<div style="width: 90%; height: 100%; overflow:auto;">
<div class="f7-environment-container">

<div id="TEMPHUMCO2_F7_OPEN_DONG" style="position: absolute; left: 50px; top: 240px;width: 130px; height: 115px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">东开敞办公区</div>
	<table style="width: 100%;">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_OPEN_DONG_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_OPEN_DONG_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_OPEN_DONG_CO2" align="center" style="color: white">1225</td>
			<td align="left">ppm</td>
		</tr>
		<!-- PM2.5 -->
		<tr>
			<td align="right">PM2.5:</td>
			<td id="PM25_F7_OPEN_DONG" align="center" style="color: white">--</td>
			<td align="left">ug/m3</td>
		</tr>

	</table>
</div>
<div id="TEMPHUMCO2_F7_OPEN_XI" style="position: absolute; left: 1040px; top: 240px;width: 130px; height: 115px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">西开敞办公区</div>
	<table style="width: 100%;">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_OPEN_XI_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_OPEN_XI_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_OPEN_XI_CO2" align="center" style="color: white">1225</td>
			<td align="left">ppm</td>
		</tr>
		<!-- PM2.5 -->
		<tr>
			<td align="right">PM2.5:</td>
			<td id="PM25_F7_OPEN_XI" align="center" style="color: white">--</td>
			<td align="left">ug/m3</td>
		</tr>
	</table>
</div>

<div id="TEMPHUMCO2_F7_KUAIJISHI" style="position: absolute; left: 314px; top: 20px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">会计室</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_KUAIJISHI_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_KUAIJISHI_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_KUAIJISHI_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F7_YUANZHANGSHI1" style="position: absolute; left: 414px; top: 20px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">院长室-1</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_YUANZHANGSHI1_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_YUANZHANGSHI1_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_YUANZHANGSHI1_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F7_YUANZHANGSHI2" style="position: absolute; left: 514px; top: 20px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">院长室-2</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_YUANZHANGSHI2_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_YUANZHANGSHI2_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_YUANZHANGSHI2_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F7_YUANZHANGSHI3" style="position: absolute; left: 614px; top: 20px;width: 100px; height: 98px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">院长室-3</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_YUANZHANGSHI3_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_YUANZHANGSHI3_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_YUANZHANGSHI3_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
		<!-- PM2.5 -->
		<tr>
			<td align="right">PM2.5:</td>
			<td id="PM25_F7_YUANZHANGSHI3" align="center" style="color: white">--</td>
			<td align="left">ug/m3</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F7_YUANZHANGSHI4" style="position: absolute; left: 714px; top: 20px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">院长室-4</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_YUANZHANGSHI4_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_YUANZHANGSHI4_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_YUANZHANGSHI4_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F7_BANGONGSHI" style="position: absolute; left: 814px; top: 20px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">办公室</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_BANGONGSHI_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_BANGONGSHI_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_BANGONGSHI_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>

<div id="TEMPHUMCO2_F7_QIATAN_YUANZHANGSHI1" style="position: absolute; left: 411px; top: 120px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">洽谈室</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_QIATAN_YUANZHANGSHI1_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_QIATAN_YUANZHANGSHI1_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_QIATAN_YUANZHANGSHI1_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F7_QIATAN_YUANZHANGSHI4" style="position: absolute; left: 709px; top: 120px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">洽谈室</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_QIATAN_YUANZHANGSHI4_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_QIATAN_YUANZHANGSHI4_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_QIATAN_YUANZHANGSHI4_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>

<div id="TEMPHUMCO2_F7_SUOZHANGSHI1_1" style="position: absolute; left: 255px; top: 523px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">所长室1-1</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_SUOZHANGSHI1_1_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_SUOZHANGSHI1_1_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_SUOZHANGSHI1_1_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F7_SUOZHANGSHI1_2" style="position: absolute; left: 355px; top: 523px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">所长室1-2</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_SUOZHANGSHI1_2_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_SUOZHANGSHI1_2_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_SUOZHANGSHI1_2_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F7_QIATAN_SUOZHANGSHI1" style="position: absolute; left: 307px; top: 428px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">洽谈室</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_QIATAN_SUOZHANGSHI1_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_QIATAN_SUOZHANGSHI1_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_QIATAN_SUOZHANGSHI1_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>

<div id="TEMPHUMCO2_F7_HUIYISHI1" style="position: absolute; left: 411px; top: 428px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">会议室1</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_HUIYISHI1_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_HUIYISHI1_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_HUIYISHI1_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F7_HUIYISHI2" style="position: absolute; left: 708px; top: 428px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">会议室2</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_HUIYISHI2_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_HUIYISHI2_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_HUIYISHI2_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>

<div id="TEMPHUMCO2_F7_SUOZHANGSHI2_1" style="position: absolute; left: 755px; top: 523px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">所长室2-1</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_SUOZHANGSHI2_1_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_SUOZHANGSHI2_1_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_SUOZHANGSHI2_1_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F7_SUOZHANGSHI2_2" style="position: absolute; left: 855px; top: 523px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">所长室2-2</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F7_SUOZHANGSHI2_2_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F7_SUOZHANGSHI2_2_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F7_SUOZHANGSHI2_2_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>

<div id="PM25_f8_SHIWAI" style="position: absolute; left: 480px; top: 260px;width: 200px; height: 98px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">室外环境</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_SHIWAI_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_SHIWAI_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_SHIWAI_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
		<!-- PM2.5 -->
		<tr>
			<td align="right">PM2.5:</td>
			<td id="PM25_F8_SHIWAI" align="center" style="color: white">--</td>
			<td align="left">ug/m3</td>
		</tr>
	</table>
</div>

</div>
</div>
</center>

<script type="text/javascript">
// subscribe targets
var temphumco2TargetsName = [
	"TEMPHUMCO2_F7_OPEN_DONG_HUM",
	"TEMPHUMCO2_F7_OPEN_DONG_TEMP",
	"TEMPHUMCO2_F7_OPEN_DONG_CO2",

	"TEMPHUMCO2_F7_OPEN_XI_HUM",
	"TEMPHUMCO2_F7_OPEN_XI_TEMP",
	"TEMPHUMCO2_F7_OPEN_XI_CO2",

	"TEMPHUMCO2_F7_KUAIJISHI_HUM",
	"TEMPHUMCO2_F7_KUAIJISHI_TEMP",
	"TEMPHUMCO2_F7_KUAIJISHI_CO2",

	"TEMPHUMCO2_F7_YUANZHANGSHI1_HUM",
	"TEMPHUMCO2_F7_YUANZHANGSHI1_TEMP",
	"TEMPHUMCO2_F7_YUANZHANGSHI1_CO2",

	"TEMPHUMCO2_F7_YUANZHANGSHI2_HUM",
	"TEMPHUMCO2_F7_YUANZHANGSHI2_TEMP",
	"TEMPHUMCO2_F7_YUANZHANGSHI2_CO2",

	"TEMPHUMCO2_F7_YUANZHANGSHI3_HUM",
	"TEMPHUMCO2_F7_YUANZHANGSHI3_TEMP",
	"TEMPHUMCO2_F7_YUANZHANGSHI3_CO2",

	"TEMPHUMCO2_F7_YUANZHANGSHI4_HUM",
	"TEMPHUMCO2_F7_YUANZHANGSHI4_TEMP",
	"TEMPHUMCO2_F7_YUANZHANGSHI4_CO2",

	"TEMPHUMCO2_F7_BANGONGSHI_HUM",
	"TEMPHUMCO2_F7_BANGONGSHI_TEMP",
	"TEMPHUMCO2_F7_BANGONGSHI_CO2",

	"TEMPHUMCO2_F7_QIATAN_YUANZHANGSHI1_HUM",
	"TEMPHUMCO2_F7_QIATAN_YUANZHANGSHI1_TEMP",
	"TEMPHUMCO2_F7_QIATAN_YUANZHANGSHI1_CO2",

	"TEMPHUMCO2_F7_QIATAN_YUANZHANGSHI4_HUM",
	"TEMPHUMCO2_F7_QIATAN_YUANZHANGSHI4_TEMP",
	"TEMPHUMCO2_F7_QIATAN_YUANZHANGSHI4_CO2",

	"TEMPHUMCO2_F7_SUOZHANGSHI1_1_HUM",
	"TEMPHUMCO2_F7_SUOZHANGSHI1_1_TEMP",
	"TEMPHUMCO2_F7_SUOZHANGSHI1_1_CO2",

	"TEMPHUMCO2_F7_SUOZHANGSHI1_2_HUM",
	"TEMPHUMCO2_F7_SUOZHANGSHI1_2_TEMP",
	"TEMPHUMCO2_F7_SUOZHANGSHI1_2_CO2",

	"TEMPHUMCO2_F7_QIATAN_SUOZHANGSHI1_HUM",
	"TEMPHUMCO2_F7_QIATAN_SUOZHANGSHI1_TEMP",
	"TEMPHUMCO2_F7_QIATAN_SUOZHANGSHI1_CO2",

	"TEMPHUMCO2_F7_HUIYISHI1_HUM",
	"TEMPHUMCO2_F7_HUIYISHI1_TEMP",
	"TEMPHUMCO2_F7_HUIYISHI1_CO2",

	"TEMPHUMCO2_F7_HUIYISHI2_HUM",
	"TEMPHUMCO2_F7_HUIYISHI2_TEMP",
	"TEMPHUMCO2_F7_HUIYISHI2_CO2",

	"TEMPHUMCO2_F7_SUOZHANGSHI2_1_HUM",
	"TEMPHUMCO2_F7_SUOZHANGSHI2_1_TEMP",
	"TEMPHUMCO2_F7_SUOZHANGSHI2_1_CO2",

	"TEMPHUMCO2_F7_SUOZHANGSHI2_2_HUM",
	"TEMPHUMCO2_F7_SUOZHANGSHI2_2_TEMP",
	"TEMPHUMCO2_F7_SUOZHANGSHI2_2_CO2",

	"PM25_F7_OPEN_DONG",
	"PM25_F7_OPEN_XI",
	"PM25_F7_YUANZHANGSHI3",
	"PM25_F8_SHIWAI",
]

var subscribedTargetsName = [];
subscribedTargetsName = subscribedTargetsName.concat(
	temphumco2TargetsName
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
							// handle response, value.Name, value.Val
							$("#" + value.Name).html(parseFloat(value.Val).toFixed(1));
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
