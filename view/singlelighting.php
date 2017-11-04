
<!-- 工位灯光控制界面 -->
<div id="singlelighting" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Single Lighting</h4>
			</div>
			<div class="modal-body">
				<center>
					<div id="myAlertSingle" class="alert alert-danger alert-dismissible hidden" role="alert">
						<button type="button" class="close" onclick="$('#myAlertSingle').addClass('hidden');" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>错误!</strong> 获取值异常，请检查网络连接或<a href=""> 联系维护人员 </a>.
					</div>
					<br>
					<br>
					<input id="ex_lighting" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="0"/>
					<br>
					<br>
					<label id="lightingLabelId">Lighting Label</label>
				</center>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal">取消</button>
				<button class="btn btn-info btn_setLighting" data-dismiss="modal" onclick="setLightingValue()">设置</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

// Without JQuery
var slider = new Slider("#ex_lighting", {
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

// 模式对话框显示前
$('#singlelighting').on('show.bs.modal', function (e) {
	// do something...
	$('#myAlertSingle').addClass('hidden');
	slider.setValue(0);
	$.ajax({
		type:'get',
		url: 'actions/getOneTargetValue.php',
		data: {targetName: $('#lightingLabelId').html()},
		dataType: "json",
		success: function(data){
			slider.setValue(data.responseBody[0].Val * 100 / 255);
			$('.btn_setLighting').prop('disabled', false);
			console.log(data);
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			$('.btn_setLighting').prop('disabled', true);
			$('#myAlertSingle').removeClass('hidden');
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
		}
	});
})

// 通过网络设置值
function setLightingValue() {
	// body...
	$.ajax({
		type:'post',
		url: 'actions/setOneTargetValue.php',
		data: {targetName: $('#lightingLabelId').html(), newValue: parseInt(slider.getValue() * 255 / 100)},
		dataType: "json",
		success: function(data){
			console.log(data);
			if ($.inArray($('#lightingLabelId').html(), gongweidengTargetsName) != -1) {
				// gong wei deng
				if (parseInt(slider.getValue() * 255 / 100) == 0) {
					$('#' + $('#lightingLabelId').html()).removeClass("gongweibtnOn");
					$('#' + $('#lightingLabelId').html()).addClass("gongweibtnOff");
				} else {
					$('#' + $('#lightingLabelId').html()).removeClass("gongweibtnOff");
					$('#' + $('#lightingLabelId').html()).addClass("gongweibtnOn");
				}
			} else if ($.inArray($('#lightingLabelId').html(), singleTargetsName) != -1) {
				if (parseInt(slider.getValue() * 255 / 100) == 0) {
					$('#' + $('#lightingLabelId').html()).removeClass("ligOn");
					$('#' + $('#lightingLabelId').html()).addClass("ligOff");
				} else {
					$('#' + $('#lightingLabelId').html()).removeClass("ligOff");
					$('#' + $('#lightingLabelId').html()).addClass("ligOn");
				}
			}
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