<?php include('header.php');?>

<script type="text/javascript">
	$(function(){
		// body...
		$('.f7Lig').removeClass('active');
		$('.f8Lig').removeClass('active');
		$('.f7Cur').removeClass('active');
		$('.f8Cur').removeClass('active');
	})
</script>

<center>
<div style="width: 90%; height: 100%; overflow:auto;">
<div class="f7-temphumco2-page-container">

<div id="TEMPHUMCO2_F7_OPEN_DONG" style="position: absolute; left: 50px; top: 240px;width: 130px; height: 100px; background-color: rgb(198,122,15);">
	<div style="width: 130px; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">东开敞办公区</div>
	<table style="width: 130px;">
		<tr>
			<td align="right">温度：</td>
			<td id="TEMPHUMCO2_F7_OPEN_DONG_TEMP" align="center" style="color: white">23.5</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度：</td>
			<td id="TEMPHUMCO2_F7_OPEN_DONG_HUM" align="center" style="color: white">23.6</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度：</td>
			<td id="TEMPHUMCO2_F7_OPEN_DONG_CO2" align="center" style="color: white">1225</td>
			<td align="left">ppm</td>
		</tr>
	</table>
</div>

<div id="TEMPHUMCO2_F7_OPEN_XI" style="position: absolute; left: 1040px; top: 240px;width: 130px; height: 100px; background-color: rgb(198,122,15);">
	<div style="width: 130px; height: 30px; color: white; background-color: rgb(114,66,10); padding-top: 5px;">西开敞办公区</div>
	<table style="width: 130px;">
		<tr>
			<td align="right">温度：</td>
			<td align="center" style="color: white">23.5</td>
			<td align="left">℃</td>
		</tr>
		<tr>
			<td align="right">湿度：</td>
			<td align="center" style="color: white">23.6</td>
			<td align="left">RH</td>
		</tr>
		<tr>
			<td align="right">浓度：</td>
			<td align="center" style="color: white">1225</td>
			<td align="left">ppm</td>
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
							console.log(value.Name + value.Val);
							$("#" + value.Name).html(value.Val);
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
