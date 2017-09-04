<!-- 窗帘控制界面 -->
<div id="curtainControlView" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Curtain Control</h4>
			</div>
			<div class="modal-body">
				<center>
					<div id="myAlertCurtainControl" class="alert alert-danger alert-dismissible hidden" role="alert">
						<button type="button" class="close" onclick="$('#myAlertCurtainControl').addClass('hidden');" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>错误!</strong> 获取值异常，请检查网络连接或<a href=""> 联系维护人员 </a>.
					</div>
					<br>
					<input id="ex_curtain" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="0"/>
					<br>
					<br>
					<label id="curtainControlViewLabelId">Lighting Label</label>
					<br>
					<br>
					<input type="checkbox" name="my-checkbox" checked>
				</center>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal">取消</button>
				<button class="btn btn-info btn_setCurtainControl" data-dismiss="modal" onclick="setCurtainControlValue()">设置</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

// Without JQuery
var slider = new Slider("#ex_curtain", {
	id: 'mySlider',
	tooltip: 'always',
	//ticks: [0, 50, 80, 100],
	//ticks_positions: [0, 50, 80, 100],
	//ticks_snap_bounds: 1,
	ticks_tooltip: true,
	formatter: function(value) {
		return value + ' %';
	}
});

$("[name='my-checkbox']").bootstrapSwitch({
	state: false,
	onColor: "info",
	offColor: "danger",
	offText: "关",
	onText: "开",
	size:"large",
});


// 模式对话框显示前
$('#curtainControlView').on('show.bs.modal', function (e) {
	// do something...
	$('#myAlertCurtainControl').addClass('hidden');
	slider.setValue(0);
	$('input[name="my-checkbox"]').bootstrapSwitch('state', false);
	$.ajax({
		type:'get',
		url: 'actions/getOneTargetValue.php',
		data: {targetName: $('#curtainControlViewLabelId').html() + '_ADJUST'},
		dataType: "json",
		success: function(data){
			slider.setValue(data.responseBody[0].Val * 100 / 255);
			$('.btn_setCurtainControl').prop('disabled', false);
			console.log(data);
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			$('.btn_setCurtainControl').prop('disabled', true);
			$('#myAlertCurtainControl').removeClass('hidden');
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
		}
	});
	$.ajax({
		type:'get',
		url: 'actions/getOneTargetValue.php',
		data: {targetName: $('#curtainControlViewLabelId').html() + '_OPENCLOSE'},
		dataType: "json",
		success: function(data){
			$('input[name="my-checkbox"]').bootstrapSwitch('state', data.responseBody[0].Val != 0);
			$('.btn_setCurtainControl').prop('disabled', false);
			console.log(data);
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			$('.btn_setCurtainControl').prop('disabled', true);
			$('#myAlertCurtainControl').removeClass('hidden');
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
		}
	});
})

// 设置
function setCurtainControlValue() {
	// body...
	$.ajax({
		type:'post',
		url: 'actions/setOneTargetValue.php',
		data: {targetName: $('#curtainControlViewLabelId').html() + '_ADJUST', newValue: parseInt(slider.getValue() * 255 / 100)},
		dataType: "json",
		success: function(data){
			console.log(data);
			//alert("success");
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
			$('#myAlertTop').removeClass('hidden');
			//alert('error');
		}
	});
	$.ajax({
		type:'post',
		url: 'actions/setOneTargetValue.php',
		data: {targetName: $('#curtainControlViewLabelId').html() + '_OPENCLOSE', newValue: $('input[name="my-checkbox"]').bootstrapSwitch('state') + 0},
		dataType: "json",
		success: function(data){
			console.log(data);
			//alert("success");
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
			$('#myAlertTop').removeClass('hidden');
			//alert('error');
		}
	});
}
</script>