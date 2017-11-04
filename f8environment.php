<?php include('header.php');?>

<script type="text/javascript">
	$(function(){
		$('.f8Env').addClass('active');
	})
</script>

<center>
<div style="width: 90%; height: 100%; overflow:auto;">
<div class="f8-environment-container">

<div id="TEMPHUMCO2_F8_OPEN_DONG" style="position: absolute; left: 50px; top: 240px;width: 130px; height: 115px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">东开敞办公区</div>
	<table style="width: 100%;">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_OPEN_DONG_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_OPEN_DONG_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_OPEN_DONG_CO2" align="center" style="color: white">1225</td>
			<td align="left">ppm</td>
		</tr>
		<!-- PM2.5 -->
		<tr>
			<td align="right">PM2.5:</td>
			<td id="PM25_F8_OPEN_DONG" align="center" style="color: white">--</td>
			<td align="left">ug/m3</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F8_OPEN_XI" style="position: absolute; left: 1040px; top: 240px;width: 130px; height: 115px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">西开敞办公区</div>
	<table style="width: 100%;">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_OPEN_XI_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_OPEN_XI_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_OPEN_XI_CO2" align="center" style="color: white">1225</td>
			<td align="left">ppm</td>
		</tr>
		<!-- PM2.5 -->
		<tr>
			<td align="right">PM2.5:</td>
			<td id="PM25_F8_OPEN_XI" align="center" style="color: white">--</td>
			<td align="left">ug/m3</td>
		</tr>
	</table>
</div>

<div id="TEMPHUMCO2_F8_SUOZHANGSHI3_DONG" style="position: absolute; left: 250px; top: 30px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">所长室3-东</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_SUOZHANGSHI3_DONG_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_SUOZHANGSHI3_DONG_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_SUOZHANGSHI3_DONG_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F8_SUOZHANGSHI3_XI" style="position: absolute; left: 350px; top: 30px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">所长室3-西</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_SUOZHANGSHI3_XI_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_SUOZHANGSHI3_XI_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_SUOZHANGSHI3_XI_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>

<div id="TEMPHUMCO2_F8_ZONGJIANSHI" style="position: absolute; left: 410px; top: 120px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">总监室</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_ZONGJIANSHI_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_ZONGJIANSHI_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_ZONGJIANSHI_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F8_HUIYISHI4" style="position: absolute; left: 510px; top: 30px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">会议室-4</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_HUIYISHI4_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_HUIYISHI4_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_HUIYISHI4_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>

<div id="TEMPHUMCO2_F8_XIUXIANSHI" style="position: absolute; left: 660px; top: 120px;width: 100px; height: 98px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">休闲室</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_XIUXIANSHI_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_XIUXIANSHI_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_XIUXIANSHI_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
		<!-- PM2.5 -->
		<tr>
			<td align="right">PM2.5:</td>
			<td id="PM25_F8_XIUXIANSHI" align="center" style="color: white">--</td>
			<td align="left">ug/m3</td>
		</tr>
	</table>
</div>

<div id="TEMPHUMCO2_F8_SUOZHANGSHI4_DONG" style="position: absolute; left: 760px; top: 30px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">所长室4-东</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_SUOZHANGSHI4_DONG_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_SUOZHANGSHI4_DONG_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_SUOZHANGSHI4_DONG_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F8_SUOZHANGSHI4_XI" style="position: absolute; left: 860px; top: 30px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">所长室4-西</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_SUOZHANGSHI4_XI_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_SUOZHANGSHI4_XI_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_SUOZHANGSHI4_XI_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>


<div id="TEMPHUMCO2_F8_HUIYISHI3" style="position: absolute; left: 308px; top: 500px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">会议室-3</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_HUIYISHI3_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_HUIYISHI3_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_HUIYISHI3_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F8_HUIYISHI5" style="position: absolute; left: 411px; top: 500px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">会议室-5</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_HUIYISHI5_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_HUIYISHI5_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_HUIYISHI5_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>

<div id="TEMPHUMCO2_F8_DAHUIYISHI" style="position: absolute; left: 560px; top: 500px;width: 100px; height: 98px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">大会议室</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_DAHUIYISHI_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_DAHUIYISHI_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_DAHUIYISHI_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
		<!-- PM2.5 -->
		<tr>
			<td align="right">PM2.5:</td>
			<td id="PM25_F8_DAHUIYISHI" align="center" style="color: white">--</td>
			<td align="left">ug/m3</td>
		</tr>
	</table>
</div>

<div id="TEMPHUMCO2_F8_HUIYISHI6" style="position: absolute; left: 709px; top: 500px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">会议室-6</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_HUIYISHI6_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_HUIYISHI6_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_HUIYISHI6_CO2" align="center" style="color: white">--</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>
<div id="TEMPHUMCO2_F8_CHUTUSHI" style="position: absolute; left: 809px; top: 500px;width: 100px; height: 85px; background-color: rgb(198,122,15);">
	<div style="width: 100%; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">出图室</div>
	<table style="width: 100%; font-size: 12px">
		<tr>
			<td align="right">温度:</td>
			<td id="TEMPHUMCO2_F8_CHUTUSHI_TEMP" align="center" style="color: white">--</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度:</td>
			<td id="TEMPHUMCO2_F8_CHUTUSHI_HUM" align="center" style="color: white">--</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度:</td>
			<td id="TEMPHUMCO2_F8_CHUTUSHI_CO2" align="center" style="color: white">--</td>
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
	"TEMPHUMCO2_F8_OPEN_DONG_HUM",
	"TEMPHUMCO2_F8_OPEN_DONG_TEMP",
	"TEMPHUMCO2_F8_OPEN_DONG_CO2",

	"TEMPHUMCO2_F8_OPEN_XI_HUM",
	"TEMPHUMCO2_F8_OPEN_XI_TEMP",
	"TEMPHUMCO2_F8_OPEN_XI_CO2",

	"TEMPHUMCO2_F8_SUOZHANGSHI3_DONG_HUM",
	"TEMPHUMCO2_F8_SUOZHANGSHI3_DONG_TEMP",
	"TEMPHUMCO2_F8_SUOZHANGSHI3_DONG_CO2",

	"TEMPHUMCO2_F8_SUOZHANGSHI3_XI_HUM",
	"TEMPHUMCO2_F8_SUOZHANGSHI3_XI_TEMP",
	"TEMPHUMCO2_F8_SUOZHANGSHI3_XI_CO2",

	"TEMPHUMCO2_F8_ZONGJIANSHI_HUM",
	"TEMPHUMCO2_F8_ZONGJIANSHI_TEMP",
	"TEMPHUMCO2_F8_ZONGJIANSHI_CO2",

	"TEMPHUMCO2_F8_HUIYISHI4_HUM",
	"TEMPHUMCO2_F8_HUIYISHI4_TEMP",
	"TEMPHUMCO2_F8_HUIYISHI4_CO2",

	"TEMPHUMCO2_F8_XIUXIANSHI_HUM",
	"TEMPHUMCO2_F8_XIUXIANSHI_TEMP",
	"TEMPHUMCO2_F8_XIUXIANSHI_CO2",

	"TEMPHUMCO2_F8_SUOZHANGSHI4_DONG_HUM",
	"TEMPHUMCO2_F8_SUOZHANGSHI4_DONG_TEMP",
	"TEMPHUMCO2_F8_SUOZHANGSHI4_DONG_CO2",

	"TEMPHUMCO2_F8_SUOZHANGSHI4_XI_HUM",
	"TEMPHUMCO2_F8_SUOZHANGSHI4_XI_TEMP",
	"TEMPHUMCO2_F8_SUOZHANGSHI4_XI_CO2",

	"TEMPHUMCO2_F8_HUIYISHI3_HUM",
	"TEMPHUMCO2_F8_HUIYISHI3_TEMP",
	"TEMPHUMCO2_F8_HUIYISHI3_CO2",

	"TEMPHUMCO2_F8_HUIYISHI5_HUM",
	"TEMPHUMCO2_F8_HUIYISHI5_TEMP",
	"TEMPHUMCO2_F8_HUIYISHI5_CO2",

	"TEMPHUMCO2_F8_DAHUIYISHI_HUM",
	"TEMPHUMCO2_F8_DAHUIYISHI_TEMP",
	"TEMPHUMCO2_F8_DAHUIYISHI_CO2",

	"TEMPHUMCO2_F8_HUIYISHI6_HUM",
	"TEMPHUMCO2_F8_HUIYISHI6_TEMP",
	"TEMPHUMCO2_F8_HUIYISHI6_CO2",

	"TEMPHUMCO2_F8_CHUTUSHI_HUM",
	"TEMPHUMCO2_F8_CHUTUSHI_TEMP",
	"TEMPHUMCO2_F8_CHUTUSHI_CO2",

	"PM25_F8_OPEN_DONG",
	"PM25_F8_OPEN_XI",
	"PM25_F8_DAHUIYISHI",
	"PM25_F8_XIUXIANSHI",
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
