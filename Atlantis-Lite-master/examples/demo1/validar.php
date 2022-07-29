<?php
include("config.php");
session_start();

$usua_nomuser = $_POST['usua_nomuser'];
$usua_contra = $_POST['usua_contra'];
 
$usua_nomuser = $mysqli->real_escape_string($usua_nomuser);
 
$query = "SELECT usua_nomuser, usua_contra FROM usuarios WHERE usua_nomuser = '$usua_nomuser' AND usua_contra='$usua_contra';";
$result = $mysqli->query($query);
 
if($result->num_rows == 1) 
{
	$_SESSION['usuarios'] = $usua_nomuser;
	echo '<script language="javascript">';
	echo 'alert("Bienvenido Admin");';
	echo 'window.location="menu.php";';
	echo '</script>';
}
else{ 
	echo '<script language="javascript">';
	echo 'alert("  Error al ingresar");';
	echo 'window.location="index.php";';
	echo '</script>';
}
?>