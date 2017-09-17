<!-- 开关型灯光控制界面 -->
<div id="controllighting" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Control Lighting</h4>
			</div>
			<div class="modal-body">
				<center>
					<div id="myAlertControl" class="alert alert-danger alert-dismissible hidden" role="alert">
						<button type="button" class="close" onclick="$('#myAlertControl').addClass('hidden');" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>错误!</strong> 获取值异常，请检查网络连接或<a href=""> 联系维护人员 </a>.
					</div>
					<br>
					<input type="checkbox" name="my-checkbox" checked>
					<br>
					<br>
					<label id="controllightingLabelId">Lighting Label</label>
				</center>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal">取消</button>
				<button class="btn btn-info btn_setContorlLighting" data-dismiss="modal" onclick="setContorlLightingValue()">设置</button>
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
	$('#myAlertControl').addClass('hidden');
	$('input[name="my-checkbox"]').bootstrapSwitch('state', false);
	$.ajax({
		type:'get',
		url: 'actions/getOneTargetValue.php',
		data: {"targetName": $('#controllightingLabelId').html()},
		dataType: "json",
		success: function(data){
			$('input[name="my-checkbox"]').bootstrapSwitch('state', data.responseBody[0].Val != 0);
			$('.btn_setContorlLighting').prop('disabled', false);
			console.log(data);
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			$('.btn_setContorlLighting').prop('disabled', true);
			$('#myAlertControl').removeClass('hidden');
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
		}
	});
})

// 设置
function setContorlLightingValue() {
	// body...
	$.ajax({
		type:'post',
		url: 'actions/setOneTargetValue.php',
		data: {targetName: $('#controllightingLabelId').html(), newValue: $('input[name="my-checkbox"]').bootstrapSwitch('state') + 0},
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