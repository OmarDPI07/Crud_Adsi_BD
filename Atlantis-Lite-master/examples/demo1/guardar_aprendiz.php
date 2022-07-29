<?php
    
    include('funciones.php');
    
    $apre_tipoid=$_POST['apre_tipoid'];
    $apre_numid=$_POST['apre_numid'];
    $apre_nombres=$_POST['apre_nombres'];
    $apre_apellidos=$_POST['apre_apellidos'];
    $apre_direccion=$_POST['apre_direccion'];
    $apre_telefono=$_POST['apre_telefono'];
    $ficha_numero=$_POST['ficha_numero'];

    $miconexion=conectar_bd('', 'crud');
    $resultado=consulta($miconexion,"INSERT INTO aprendices(apre_tipoid, apre_numid,apre_nombres,apre_apellidos,apre_direccion,apre_telefono,ficha_numero) VALUES ('{$apre_tipoid}','{$apre_numid}','{$apre_nombres}','{$apre_apellidos}','{$apre_direccion}','{$apre_telefono}','{$ficha_numero}')");
    if($resultado) {
        echo '<script language="javascript">';
        echo 'alert("Aprendiz registrado correctamente");';
        echo 'window.location="formulario_aprendiz.php";';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Error al registrar");';
        echo 'window.location="formulario_aprendiz.php";';
        echo '</script>';
    }
?>

