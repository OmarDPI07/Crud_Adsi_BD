<?php
include("config.php");


$id = $_POST['id'];
$ficha_numero = $_POST['ficha_numero'];


$sql = "UPDATE fichas SET  ficha_numero ='$ficha_numero' WHERE ficha_numero ='$id'";
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