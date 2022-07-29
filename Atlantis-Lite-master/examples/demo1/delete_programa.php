<?php
include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM programa WHERE progra_nombre='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Programa eliminado exitósamente");';
	echo 'window.location="borrar_programa.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="borrar_ficha.php";';
	echo '</script>';
}
?>