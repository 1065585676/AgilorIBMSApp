<div id="fcuControlView" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">FCU Control</h4>
			</div>
			<div class="modal-body">
				<center>
					<div id="myAlertFCUControl" class="alert alert-danger alert-dismissible hidden" role="alert">
						<button type="button" class="close" onclick="$('#myAlertFCUControl').addClass('hidden');" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>错误!</strong> 获取值异常，请检查网络连接或<a href=""> 联系维护人员 </a>.
					</div>
					<label id="fcuControlViewLabelId">FCU Label</label>
					<label id="fcuControlViewLabelDeviceName" class="hidden">FCU Label</label>
					<table style="margin-top: 30px; width: 80%">
						<tr>
							<td style="text-align:center;vertical-align:middle"><label>当前温度</label></td>
							<td style="height: 50px">
								<label>
									<span id="my-fcu-cur-temp" style="font-size: 18px; color: rgb(70,175,227);">23.6</span> ℃
								</label>&nbsp;&nbsp;&nbsp;
								<input id="my-fcu-slider" />
							</td>
						</tr>
						<tr>
							<td style="text-align:center;vertical-align:middle"><label>电子除尘</label></td>
							<td style="height: 50px"><input type="checkbox" name="my-fcu-checkbox-elec" onchange="setElecValue()"></td>
						</tr>
						<tr>
							<td style="text-align:center;vertical-align:middle"><label>风机速度</label></td>
							<td style="height: 50px">
								<select class="selectpicker my-fcu-selectpicker show-tick">
								<option>自动</option>
								<option>高</option>
								<option>中</option>
								<option>低</option>
								<option>关闭</option>
								</select>
							</td>
						</tr>
						<tr>
							<td style="text-align:center;vertical-align:middle"><label>冷热模式</label></td>
							<td style="height: 50px"><input type="checkbox" name="my-fcu-checkbox-valve" onchange="setValveValue()"></td>
						</tr>
					</table>
				</center>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

// Without JQuery
var slider = new Slider("#my-fcu-slider", {
	id: 'mySlider',
	tooltip: 'always',
	ticks_tooltip: true,
	min: -10,
	max: 40,
	setp: 0.1,
	value: 26,
	enabled: true,
	formatter: function(value) {
		return value + ' ℃';
	}
});

$("[name='my-fcu-checkbox-elec']").bootstrapSwitch({
	state: false,
	onColor: "info",
	offColor: "danger",
	offText: "关",
	onText: "开",
	size:"large",
});

$("[name='my-fcu-checkbox-valve']").bootstrapSwitch({
	state: false,
	onColor: "info",
	offColor: "danger",
	offText: "热",
	onText: "冷",
	size:"large",
});

var elecFlag = 1;
var valveFlag = 1;
// 模式对话框显示前
$('#fcuControlView').on('show.bs.modal', function (e) {
	// cur temp
	$.ajax({
		type:'get',
		url: 'actions/getOneTargetValueByName.php',
		data: {targetName: $('#fcuControlViewLabelId').html() + "_Temp", deviceName: $('#fcuControlViewLabelDeviceName').html()},
		dataType: "json",
		success: function(data){
			var convTemp = TempConvert(data.responseBody[0].Val, true);
			$("#my-fcu-cur-temp").html(convTemp);
			console.log(data);
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			$('#myAlertFCUControl').removeClass('hidden');
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
		}
	});

	// last seted temp
	$.ajax({
		type:'get',
		url: 'actions/getOneTargetValueByName.php',
		data: {targetName: $('#fcuControlViewLabelId').html() + "_TempSet", deviceName:  $('#fcuControlViewLabelDeviceName').html()},
		dataType: "json",
		success: function(data){
			var convTemp = TempConvert(parseFloat(data.responseBody[0].Val), true);
			slider.setValue(convTemp.toFixed(2));
			console.log(data);
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			$('#myAlertFCUControl').removeClass('hidden');
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
		}
	});

	// elec
	$.ajax({
		type:'get',
		url: 'actions/getOneTargetValueByName.php',
		data: {targetName: $('#fcuControlViewLabelId').html() + '_ElecAirCleanerCtrl1', deviceName:  $('#fcuControlViewLabelDeviceName').html()},
		dataType: "json",
		success: function(data){
			elecFlag = 1;
			$('input[name="my-fcu-checkbox-elec"]').bootstrapSwitch('state', data.responseBody[0].Val == 1);
			console.log(data);
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			$('#myAlertFCUControl').removeClass('hidden');
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
		}
	});

	// fcu speed
	$.ajax({
		type:'get',
		url: 'actions/getOneTargetValueByName.php',
		data: {targetName: $('#fcuControlViewLabelId').html() + "_FanSpeed", deviceName:  $('#fcuControlViewLabelDeviceName').html()},
		dataType: "json",
		success: function(data){
			$('.selectpicker').selectpicker('val', Val2Str(data.responseBody[0].Val));
			console.log(data);
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			$('#myAlertFCUControl').removeClass('hidden');
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
		}
	});

	// valve
	$.ajax({
		type:'get',
		url: 'actions/getOneTargetValueByName.php',
		data: {targetName: $('#fcuControlViewLabelId').html() + '_CoolValveCtrl', deviceName:  $('#fcuControlViewLabelDeviceName').html()},
		dataType: "json",
		success: function(data){
			valveFlag = 1;
			$('input[name="my-fcu-checkbox-valve"]').bootstrapSwitch('state', data.responseBody[0].Val == 1);
			console.log(data);
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			$('#myAlertFCUControl').removeClass('hidden');
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
		}
	});
});


// Set elec
function setElecValue() {
	if (elecFlag == 1) {
		elecFlag = 0;
		return;
	}
	$.ajax({
		type:'post',
		url: 'actions/setOneTargetValueByName.php',
		data: {targetName: $('#fcuControlViewLabelId').html() + '_ElecAirCleanerCtrl1', newValue: $('input[name="my-fcu-checkbox-elec"]').bootstrapSwitch('state') + 0, targetType: "Control", deviceName: $('#fcuControlViewLabelDeviceName').html()},
		dataType: "json",
		success: function(data){
			console.log(data);
			//alert("success");
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
			$('#myAlertFCUControl').removeClass('hidden');
			//alert('error');
		}
	});
}
// Set valve
function setValveValue() {
	if (valveFlag == 1) {
		valveFlag = 0;
		return;
	}
	$.ajax({
		type:'post',
		url: 'actions/setOneTargetValueByName.php',
		data: {targetName: $('#fcuControlViewLabelId').html() + '_CoolValveCtrl', newValue: $('input[name="my-fcu-checkbox-valve"]').bootstrapSwitch('state') + 0, targetType: "Control", deviceName: $('#fcuControlViewLabelDeviceName').html()},
		dataType: "json",
		success: function(data){
			console.log(data);
			//alert("success");
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
			$('#myAlertFCUControl').removeClass('hidden');
			//alert('error');
		}
	});
}
// Set Temp
slider.on('slideStop', function (newValue) {
	newValue = TempConvert(newValue, false);
	$.ajax({
		type:'post',
		url: 'actions/setOneTargetValueByName.php',
		data: {targetName: $('#fcuControlViewLabelId').html() + "_TempSet", newValue: newValue, targetType: "Enum", deviceName: $('#fcuControlViewLabelDeviceName').html()},
		dataType: "json",
		success: function(data){
			console.log(data);
			//alert("success");
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
			$('#myAlertFCUControl').removeClass('hidden');
			//alert('error');
		}
	});
});

// Set speed
$('.my-fcu-selectpicker').on('changed.bs.select', function (e) {
	$.ajax({
		type:'post',
		url: 'actions/setOneTargetValueByName.php',
		data: {targetName: $('#fcuControlViewLabelId').html() + "_FanSpeed", newValue: Str2Val($('.my-fcu-selectpicker').selectpicker('val')), targetType: "Enum", deviceName: $('#fcuControlViewLabelDeviceName').html()},
		dataType: "json",
		success: function(data){
			console.log(data);
			if (Str2Val($('.my-fcu-selectpicker').selectpicker('val')).indexOf("FanSpeedClose") == -1) {
				$("#" + $('#fcuControlViewLabelId').html()).removeClass("fcuOff");
				$("#" + $('#fcuControlViewLabelId').html()).addClass("fcuOn");
			} else {
				$("#" + $('#fcuControlViewLabelId').html()).removeClass("fcuOn");
				$("#" + $('#fcuControlViewLabelId').html()).addClass("fcuOff");
			}
			//alert("success");
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
			$('#myAlertFCUControl').removeClass('hidden');
			//alert('error');
		}
	});
});


// Other
function Str2Val(str) {
	// body...
	if (str == '自动') {
		return 'FanSpeedAuto';
	}
	if (str == '高') {
		return 'FanSpeedHigh';
	}
	if (str == '中') {
		return 'FanSpeedMid';
	}
	if (str == '低') {
		return 'FanSpeedLow';
	}
	if (str == '关闭') {
		return 'FanSpeedClose';
	}
	return 'HTML_ERROR';
}
function Val2Str(val) {
	// body...
	if (val.indexOf('FanSpeedHigh') != -1) {
		return '高';
	}
	if (val.indexOf('FanSpeedMid') != -1) {
		return '中';
	}
	if (val.indexOf('FanSpeedLow') != -1) {
		return '低';
	}
	if (val.indexOf('FanSpeedAuto') != -1) {
		return '自动';
	}
	if (val.indexOf('FanSpeedClose') != -1) {
		return '关闭';
	}
	return '自动';
}
function TempConvert(temp, isUp){
	// y = 906 - 10 * x
	// 692 = 906 - 10 * 21.4
	var convTemp = 0;
	if (isUp) {
		convTemp = (906 - temp) / 10.0;
	} else {
		convTemp = 906 - temp * 10;
	}
	return convTemp;
}
</script>