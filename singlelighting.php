
<!-- 工位灯光控制界面 -->
<div id="singlelighting" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Single Lighting</h4>
			</div>
			<div class="modal-body">
				<br>
				<br>
				<input id="ex_lighting" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="0"/>
				<br>
				<br>
				<center>
					<label id="lightingLabelId">Lighting Label</label>
				</center>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal">取消</button>
				<button class="btn btn-info" data-dismiss="modal" onclick="setLightingValue()">设置</button>
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
	slider.setValue(0);
	//alert('set ');
	$.ajax({
		type:'get',
		url: 'actions/getOneTargetValue.php',
		data: {targetName: $('#lightingLabelId').html()},
		dataType: "json",
		success: function(data){
			console.log(data);
			slider.setValue(data.responseBody[0].Val * 100 / 255);
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			alert(XMLHttpRequest.status);
			alert(XMLHttpRequest.readyState);
			alert(textStatus);
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
			//slider.setValue(data.responseBody[0].Val * 100 / 255);
			alert("success");
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			alert(XMLHttpRequest.status);
			alert(XMLHttpRequest.readyState);
			alert(textStatus);
		}
	});

	//objName=$('#lightingLabelId').html();
	//objValue=slider.getValue() * 255 / 100;
	//alert('set ' + objName + ' : ' + objValue);
}

</script>