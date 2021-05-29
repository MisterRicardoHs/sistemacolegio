<?php
    require_once("class/admin.php");
    $nombre = $_POST['alumno'];
    $identi = $_POST['identi'];
    $seccion = $_POST['seccion'];
    $idpadre = $_POST['idpadre'];
        $objeto = new admin();
      
            $registra = $objeto->registroHijo($nombre,$identi,$seccion,$idpadre);
    
            if($registra){
                header('Location:panel.php?mensaje=oke&id='.$idpadre);
            }else{
                header('Location:panel.php?mensaje=errore&id='.$idpadre);
            }

        

?>