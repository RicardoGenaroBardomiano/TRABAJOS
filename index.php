<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Matematicas</title>
</head>
<body>
<H3>CALCULADORA DE OPERACIONES SIMPLES</H3>
<form action="index.php" method="POST">
	<table>
	<tr>
		<td>Numero 1: </td><td><input type="text" name="Numero1"></td>
	</tr>
	<td>
	</td>
	<td>
		<select name="Oper">
			<option value="1">+</option> 
			<option value="2">-</option> 
			<option value="3">*</option>
			<option value="4">/</option> 
		</select>
	</td>
	<tr>
		<td>Numero 2: </td><td><input type="text" name="Numero2"></td>
	</tr>
	<tr>
		<td> <input type="submit" value="Calcular"> </td>
	</tr>
</table>
</form>
</body>
</html>
<?php
	if($_POST){	
		$num1 = $_POST
		['Numero1'];
		$num2 = $_POST
		['Numero2'];
		$suma = $num1 + $num2;
		echo "El resultado es: ".$suma; 
	}
?>