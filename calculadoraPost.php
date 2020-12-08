<?php
$val1=$_POST['valor1'];
$val2=$_POST['valor2'];
$operador=$_POST['operador'];
$operacion = array("SUMA","RESTA","MULTIPLICACION","DIVISION");
function calcular($v1,$v2){
	$ope = $_POST['operador'];
	switch($ope){
		case 0:
			$res = $v1 + $v2;
			break;
		case 1:
			$res = $v1 - $v2;
			break;		
		case 2:
			$res = $v1 * $v2;
			break;
		case 3:
			$res = $v1 / $v2;
			break;
	}
	return $res;
}
	echo "El resultado de la operacion ".$operacion[$operador]." es: ".calcular($val1,$val2);
?>