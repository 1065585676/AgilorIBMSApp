<!DOCTYPE html>
<html>
<head>
	<title>Agilor IBMS App</title>
</head>
<body>
	<h1>Agilor IBMS App</h1>
	<ul>
	
		<li>
			<form method="GET" action="getOneTargetValue.php">
				target name:<input name="targetName" value="LIG_SCENE_703" size="50">
				<input type="submit" name="Get">
			</form>
		</li>

		<li>
			<form method="POST" action="setOneTargetValue.php">
				target name:<input name="targetName" value="LIG_SCENE_706" size="50"><br>
				&nbsp;&nbsp;new value:<input name="newValue" value="NORMAL" size="50">
				<input type="submit" name="Set">
			</form>
		</li>

	</ul>
</body>
</html>