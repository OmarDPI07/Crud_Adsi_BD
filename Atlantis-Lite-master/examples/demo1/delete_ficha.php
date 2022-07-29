<?php
include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM fichas WHERE ficha_numero='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Ficha eliminada exitósamente");';
	echo 'window.location="borrar_ficha.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="borrar_ficha.php";';
	echo '</script>';
}
?>