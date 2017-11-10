<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="php2.php" method="post" id="formulario" name="formulario" >
	<div>
		<label for="text">uno</label>
		<input type="text" id="uno" name="uno"/>
	</div>
	<div>
		<label for="text">dos</label>
		<input type="text" id="dos" name="dos"/>
	</div>
	<div>
		<select id="seleccion" name="seleccion">
			<option >suma</option>
			<option value="resta">resta</option>
			<option value="multiplicacion">multiplicacion</option>
			<option value="division">division</option>
			<option value="modulo">modulo</option>
			<option value="otro">otro</option>
		</select>
	</div>
	<div>
		<input type="submit" id="boton" name="boton" value="resultado"/>
	</div>

</form>
</body>
</html>