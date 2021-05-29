<?php
    require_once("class/admin.php");
    $cedula = $_POST['cedula'];
    $clave = $_POST['clave'];

    $objeto = new admin();
    $iniciar = $objeto->login($cedula, $clave);
    $idpadre = "";
    foreach($iniciar as $ini){
        $idpadre = $ini['id_padre'];
    }
    
    if($iniciar){
        header('Location:panel.php?id='.$idpadre);
    }else{
mail('rikillohernandez@gmail.com', 'PRUEBA GMAIL', 'asjakjsas');
        header('Location:index.php?mensaje=error');
	
    }
?>