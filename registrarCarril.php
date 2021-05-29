<?php
    require_once("class/admin.php");
    $carril = $_POST['carril'];
    $idpadre = $_POST['idpadre'];
        $objeto = new admin();
        $elimina = $objeto->eliminarCarrilesUsados($idpadre);
        if($elimina){
            $registra = $objeto->registroCarril($carril,$idpadre,1);
    
            if($registra){
                header('Location:panel.php?mensaje=ok&id='.$idpadre);
            }else{
                header('Location:panel.php?mensaje=error&id='.$idpadre);
            }

        }

?>