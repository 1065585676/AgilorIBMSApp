<!-- 会议场景灯光控制界面 -->
<div id="scenelighting" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Scene Lighting</h4>
			</div>
			<div class="modal-body">
				<center>
					<div id="myAlertScene" class="alert alert-danger alert-dismissible hidden" role="alert">
						<button type="button" class="close" onclick="$('#myAlertScene').addClass('hidden');" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>错误!</strong> 获取值异常，请检查网络连接或<a href=""> 联系维护人员 </a>.
					</div>
					<br>
					<select class="selectpicker show-tick">
					<option>全开模式</option>
						<option>全关模式</option>
						<option>普通模式</option>
						<option>放映模式（有人）</option>
						<option>放映模式（无人）</option>
					</select>
					<br>
					<br>
					<label id="scenelightingLabelId">Lighting Label</label>
				</center>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal">取消</button>
				<button class="btn btn-info btn_setSceneLighting" data-dismiss="modal" onclick="setSceneLightingValue()">设置</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

// 模式对话框显示前
$('#scenelighting').on('show.bs.modal', function (e) {
	// do something...
	$('#myAlertScene').addClass('hidden');
	$('.selectpicker').selectpicker('val', '普通模式');
	$.ajax({
		type:'get',
		url: 'actions/getOneTargetValue.php',
		data: {targetName: $('#scenelightingLabelId').html()},
		dataType: "json",
		success: function(data){
			$('.selectpicker').selectpicker('val', Val2Str(data.responseBody[0].Val));
			$('.btn_setSceneLighting').prop('disabled', false);
			console.log(data);
		},
		error: function(XMLHttpRequest, textStatus, errorThrown){
			$('.btn_setSceneLighting').prop('disabled', true);
			$('#myAlertScene').removeClass('hidden');
			console.log('XMLHttpRequest.status:' + XMLHttpRequest.status + '\nXMLHttpRequest.readyState:' + XMLHttpRequest.readyState + '\ntextStatus:' + textStatus);
		}
	});
})

// 设置
function setSceneLightingValue() {
	// body...
	$.ajax({
		type:'post',
		url: 'actions/setOneTargetValue.php',
		data: {targetName: $('#scenelightingLabelId').html(), newValue: Str2Val($('.selectpicker').selectpicker('val'))},
		dataType: "json",
		success: function(data){
			console.log(data);
			if (Str2Val($('.selectpicker').selectpicker('val')).indexOf("ALL_OFF") == -1) {
				$("#" + $('#scenelightingLabelId').html()).removeClass("ligOff");
				$("#" + $('#scenelightingLabelId').html()).addClass("ligOn");
			} else {
				$("#" + $('#scenelightingLabelId').html()).removeClass("ligOn");
				$("#" + $('#scenelightingLabelId').html()).addClass("ligOff");
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


function Str2Val(str) {
	// body...
	if (str == '全开模式') {
		return 'ALL_ON';
	}
	if (str == '全关模式') {
		return 'ALL_OFF';
	}
	if (str == '普通模式') {
		return 'NORMAL';
	}
	if (str == '放映模式（有人）') {
		return 'PLAYWITHPEOPLE';
	}
	if (str == '放映模式（无人）') {
		return 'PLAYWITHOUTPEOPLE';
	}
	return 'HTML_ERROR';
}
function Val2Str(val) {
	// body...
	if (val.indexOf('ALL_ON') != -1) {
		return '全开模式';
	}
	if (val.indexOf('ALL_OFF') != -1) {
		return '全关模式';
	}
	if (val.indexOf('NORMAL') != -1) {
		return '普通模式';
	}
	if (val.indexOf('PLAYWITHPEOPLE') != -1) {
		return '放映模式（有人）';
	}
	if (val.indexOf('PLAYWITHOUTPEOPLE') != -1) {
		return '放映模式（无人）';
	}
	return '普通模式';
}
</script>