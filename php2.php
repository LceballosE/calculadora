<?php

	if (isset($_POST["boton"])) {
		$numero1=$_POST["uno"];
		$numero2=$_POST["dos"];
		$operacion=$_POST["seleccion"];

		if (!strcmp("suma",$_POST["seleccion"])) {
			echo "El resultado es " . ($numero1+$numero2);
		}elseif (!strcmp("resta",$_POST["seleccion"])) {
			echo "El resultado es " . ($numero1-$numero2);	
		}elseif (!strcmp("multiplicacion",$_POST["seleccion"])) {
			echo "El resultado es " . ($numero1*$numero2);
		}elseif (!strcmp("division",$_POST["seleccion"])) {
			echo "El resultado es " . ($numero1/$numero2);
		}elseif (!strcmp("modulo", $_POST["seleccion"])) {
			echo "no podemos realizar la operacion";
		}else {
			echo "Hola hola hola hola";
		}
	}

?>