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
		<td> <input type="submit" name="cal" value="Calcular"> </td>
	</tr>
</table>
</form>
<H3>TABLAS DE MULTIPLICAR</H3>
<form action="index.php" method="POST">
Selecciona el numero de la tabla de multiplicar
	<table>
	<td>
		<select name="NumT">
			<option value="1">1</option> 
			<option value="2">2</option> 
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select>
	</td>
	<tr>
		<td> <input type="submit" name="gen" value="Generar"> </td>
	</tr>
	</table>
</form>
</body>
</html>
<?php
	if(isset($_POST['cal'])){
		if($_POST['Oper']==1){
			$num1 = $_POST['Numero1'];
			$num2 = $_POST['Numero2'];
			$suma = $num1 + $num2;
			echo "El resultado es: ".$suma; 
		}
		if($_POST['Oper']==2){
			$num1 = $_POST['Numero1'];
			$num2 = $_POST['Numero2'];
			$suma = $num1 - $num2;
			echo "El resultado es: ".$suma; 
		}
		if($_POST['Oper']==3){
			$num1 = $_POST['Numero1'];
			$num2 = $_POST['Numero2'];
			$suma = $num1 * $num2;
			echo "El resultado es: ".$suma; 
		}
		if($_POST['Oper']==4){
			$num1 = $_POST['Numero1'];
			$num2 = $_POST['Numero2'];
			$suma = $num1 / $num2;
			echo "El resultado es: ".$suma; 
		}
	}
	if(isset($_POST['gen'])){
		for ($i = 1; $i <= 10; $i++) {
			$m = $_POST['NumT'];
			$mul = $m * $i;
			echo $_POST['NumT']." x ".$i." = ".$mul;
			echo "<br>";
		} 
	}
?>