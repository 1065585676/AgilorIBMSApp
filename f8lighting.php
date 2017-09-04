<?php include('header.php');?>

<script type="text/javascript">
	$(function(){
		// body...
		$('.f7Lig').removeClass('active');
		//$('.f8Lig').removeClass('active');
		$('.f7Cur').removeClass('active');
		$('.f8Cur').removeClass('active');

		$('.f8Lig').addClass('active');
	})
</script>

<center>
<div style="width: 90%; height: 100%; overflow:auto;">
	<div class="lighting-container">
		<!-- 上照灯 东 -->
		<button class="shangzhaodeng" style="position: absolute; left: 440px; top: 120px;" data-toggle="modal" data-target="#controllightingtest" onclick="$('#controllightingtestLabelId').html('LIG_OTHER_708_SHANG_ZHAO_DENG_S')"></button>
	</div>
</div>
</center>
<!-- 开关型灯光控制界面 -->
<div id="controllightingtest" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Control Lighting</h4>
			</div>
			<div class="modal-body">
				<div style="width: 10px;">
				<input type="checkbox" name="my-checkbox" checked>
				</div>
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
});

</script>

<?php include('footer.php');?>
