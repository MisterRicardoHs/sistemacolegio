<?php
    require_once("class/admin.php");
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    if(empty($nombre) && empty($cedula) && empty($correo) && empty($clave)){
        header('Location:registro.php?mensaje=incom');
    }else{
        $objeto = new admin();
        $registra = $objeto->registroPadres($nombre, $cedula, $correo, $clave);
      if($registra){
            header('Location:registro.php?mensaje=ok');
        }else{
            header('Location:registro.php?mensaje=error');
        
        }
        
    }

?>