<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action ="recibidorGet.php" method="get">
	<input type="text" name="valorGet" placeholder="Valor get a ver del otro lado">
	<input type="submit" name="mostrar">
</form>

<form action ="calculadoraPost.php" method="POST">
	<input type="text" name="valor1" placeholder="Valor 1">
	<input type="text" name="valor2" placeholder="valor 2"> <br>
	<input type="radio" name="operador" value="0"> suma <br>
	<input type="radio" name="operador" value="1"> resta <br>
	<input type="radio" name="operador" value="2"> multiplicacion <br>
	<input type="radio" name="operador" value="3"> division <br>
	<input type="submit" name="calcularPost">
</body>
</html>