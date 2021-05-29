<?php
    require_once("class/admin.php");
    $carril = $_POST['carril'];
    $idpadre = $_POST['idpadre'];
        $objeto = new admin();
        $elimina = $objeto->eliminarCarrilesUsados($idpadre);
        if($elimina){
            header('Location:panel.php?mensaje=oko&id='.$idpadre);
        }else{
            header('Location:panel.php?mensaje=erroro&id='.$idpadre);
        }

?>