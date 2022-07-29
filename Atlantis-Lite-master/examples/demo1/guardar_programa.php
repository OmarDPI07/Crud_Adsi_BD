<?php
    
    include('funciones.php');
    
    $progra_nombre=$_POST['progra_nombre'];
    $tiposp_id=$_POST['tiposp_id'];

    $miconexion=conectar_bd('', 'crud');
    $resultado=consulta($miconexion,"INSERT INTO programa(progra_nombre, tiposp_id) VALUES ('".$progra_nombre."' , ".$tiposp_id.")");
    if($resultado) {
        echo '<script language="javascript">';
        echo 'alert("Programa registrado correctamente");';
        echo 'window.location="formulario_programa.php";';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Error al registrar");';
        echo 'window.location="formulario_programa.php";';
        echo '</script>';
    }
?>


