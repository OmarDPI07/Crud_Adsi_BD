<?php
include("config.php");


$id = $_POST['id'];
$apre_numid = $_POST['apre_numid'];
$apre_nombres = $_POST['apre_nombres'];
$apre_apellidos = $_POST['apre_apellidos'];
$apre_direccion = $_POST['apre_direccion'];
$apre_telefono = $_POST['apre_telefono'];

$sql = "UPDATE aprendices SET apre_numid='$apre_numid', apre_nombres='$apre_nombres', apre_apellidos='$apre_apellidos', apre_direccion='$apre_direccion', apre_telefono='$apre_telefono' WHERE apre_id='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="actualizar_aprendiz.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="actualizar_aprendiz.php";';
	echo '</script>';
}
?>