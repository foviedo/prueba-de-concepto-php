<?php
include 'conexion.php';
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apePaterno = $_POST['apePaterno'];
$apeMaterno = $_POST['apeMaterno'];

$update = $con -> query("UPDATE alumnos SET nombre='$nombre',apePaterno='$apePaterno', apeMaterno='$apeMaterno' WHERE id = '$id' ");
if($update){
	echo "<script>location.href='formularioInsertar.php'</script>";
} else {
	echo "<script>location.href='update.php?id=".$id."'</script>";	
}
?>