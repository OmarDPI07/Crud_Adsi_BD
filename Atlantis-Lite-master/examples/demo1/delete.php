<?php
include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM aprendices WHERE apre_id='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Aprendiz eliminado exitósamente");';
	echo 'window.location="borrar_aprendiz.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="borrar_aprendiz.php";';
	echo '</script>';
}
?>