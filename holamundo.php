<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>el buen hola mundo</title>
</head>
<body>
<h1><?php echo "Esto es un hello world en PHP </br>";
$var1 = 5;
$var2 = "hola en variable";
echo "esto es un ".$var2." y la var numérica es ".$var1."</br>";
$arrayDeSaludos = array("hola","buenas","qué tal?");
echo $arrayDeSaludos[2]."</br>";
if($arrayDeSaludos[0] == "hola" && 1==1){
	echo "Siempre con los saludos básicos primero"."</br>";
} else {
	echo "No deberías poder ver esto"."</br>";
}
$mapaDeFrutas = array("fruta1" => "manzana","esto no es una fruta ni tiene forma de mapa", "fruta2"=>"pera");
echo "el valor correspondiente a la clave fruta1 es: ".$mapaDeFrutas["fruta1"]."</br>";
echo "a ver ".$mapaDeFrutas[0]."</br>";
define("CONSTANTE","mirá una constante");
echo CONSTANTE."</br>";
$opcion = 2;
switch($opcion){
	case 1:
		echo "bromomento"."</br>";
		break;
	case 2:
	case 3:
		echo "acá sí"."</br>";
		break;
	default:
		echo "acá no"."</br>";
		break;
}

for($i=0;$i < sizeof($arrayDeSaludos);$i++){
	echo $arrayDeSaludos[$i]." ";
}
echo "</br>";
$varIncremental = 0;
while($varIncremental <=5){
	echo $varIncremental."</br>";
	$varIncremental++;
}
echo "hoy es: ".date("d-F")." del año: ".date("Y")." este mes tiene 	".date("t")." dias "." El numero de semana actual es: ".date("W")." el número del dia es ".date("w")."</br>";
if(1===1 || 1>=2){
	$num1 = 5;
	$num2 = 10;
	echo $num1**$num2." Prueba de or (y una cuenta) <br>";

}
if(1!==1 XOR 1<=2){
	echo "Qué lindo que el XOR se llame así y no ^ <br>";
}
$string = "el string";
echo strlen($string)."<br>".str_replace('e',"E",$string)." ".strtoupper("$string")." ".substr($string, 3)." ".substr($string,0,2). "<br>";
function suma($var1,$var2){
	return $var1+$var2;
}
echo suma(1,2)."<br>";
echo suma($var1,2)."<br>";
?></h1>
</body>
</html>