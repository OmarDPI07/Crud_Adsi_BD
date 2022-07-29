<?php
    
    include('funciones.php');
    
    $ficha_numero=$_POST['ficha_numero'];
    $progra_id=$_POST['progra_id'];

    $miconexion=conectar_bd('', 'crud');
    $resultado=consulta($miconexion,"INSERT INTO fichas(ficha_numero, progra_id) VALUES ($ficha_numero , $progra_id)");
    if($resultado) {
        echo '<script language="javascript">';
        echo 'alert("Ficha registrada correctamente");';
        echo 'window.location="formulario_ficha.php";';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Error al registrar");';
        echo 'window.location="formulario_ficha.php";';
        echo '</script>';
    }
?>

