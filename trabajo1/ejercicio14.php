<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

<!-- Este ejercicio lo hecho usando un formulario en el que eleiges el tipo de operacion y al enviarlo el codigo php
lo calcula en funcion de la operacion que seleccionas -->
	<form method="get" action="">
		<input type="number" name="operando1">
		<select name="operador">
			<option value="+">+
			</option>
			<option value="-">-
			</option>
			<option value="*">*
			</option>
			<option value="/">/
			</option>
		</select>
		<input type="number" name="operando2">
		<input type="submit" value="enviar">
	</form>
	<?php
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operador = $_GET['operador'];

	if ($operador == "+") {
		$solucion = $operando1 + $operando2;
	} else if ($operador == "-") {
		$solucion = $operando1 - $operando2;
	} else if ($operador == "*") {
		$solucion = $operando1 * $operando2;
	} else if ($operador == "/") {
		$solucion = $operando1 / $operando2;
	}

	if ($operador == "/" && $operando1 == 0) {
		
		echo "<br>Operacion incalculable";
	} else {
		echo "<br>La solución es: " . $solucion;
	}


	?>

</body>

</html>