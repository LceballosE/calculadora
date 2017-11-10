<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	
	<form action="php.php" method="post" name="formulario" id="formulario">  <!--action hace referencia al archivo que contiene el programa   - - -  post ?-->
		<DIV>
			<label for="nombre">ponga su nombre</label>
			<input type="text" id="nombre" name="nombre"/>  <!--se cierra poniendole / al final de la instrucción, antes de cerrar    - - - - el input es una caja de texto y  guarda en una variable lo que toma del usuario por eso hay que crear el nombre de esa variable-->
		</DIV>
		<DIV>
			<label for="edad">ponga su edad</label>  
			<input type="text" id="edad" name="edad"/>
		</DIV>
		<div>
			<input type="submit" id="boton" name="boton" value="Conocer"/>    <!--submit envia la informacion del formulario al archivo especificado en el action - - - - tambien debe llevar un nombre porque es él  quien guarda la peticion!-->

		</div>
	</form>





</body>
</html>