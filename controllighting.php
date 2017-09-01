<!-- 开关型灯光控制界面 -->
<div id="controllighting" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Control Lighting</h4>
			</div>
			<div class="modal-body">
				<br>
				<center>
					<input type="checkbox" name="my-checkbox" checked>
					<br>
					<br>
					<label id="controllightingLabelId">Lighting Label</label>
				</center>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal">取消</button>
				<button class="btn btn-info" data-dismiss="modal" onclick="setContorlLightingValue()">设置</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$("[name='my-checkbox']").bootstrapSwitch({
		state: false,
		size: 'large',
		onColor: 'info',
		onText: '开',
		offColor: 'danger',
		offText: '关',
	});

	// 模式对话框显示前
	$('#controllighting').on('show.bs.modal', function (e) {
		// do something...
		$('input[name="my-checkbox"]').bootstrapSwitch('state', false);
		//alert('set ');
		$.ajax({
			type:'get',
			url: 'actions/getOneTargetValue.php',
			data: {targetName: $('#controllightingLabelId').html()},
			dataType: "json",
			success: function(data){
				console.log(data);
				$('input[name="my-checkbox"]').bootstrapSwitch('state', data.responseBody[0].Val != 0);
			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				alert(XMLHttpRequest.status);
				alert(XMLHttpRequest.readyState);
				alert(textStatus);
			}
		});
	})

	// 设置
	function setContorlLightingValue() {
		// body...
		//objName=$('#controllightingLabelId').html();
		//objValue=$('input[name="my-checkbox"]').bootstrapSwitch('state') + 0;
		//alert('set ' + objName + ' : ' + objValue);
		$.ajax({
			type:'post',
			url: 'actions/setOneTargetValue.php',
			data: {targetName: $('#controllightingLabelId').html(), newValue: $('input[name="my-checkbox"]').bootstrapSwitch('state') + 0},
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

	}
</script>