<?php
    require_once("class/admin.php");
    $idhijo = $_POST['idhijo'];
    $idpadre = $_POST['idpadre'];
        $objeto = new admin();
      
            $registra = $objeto->eliminarHijo($idhijo);
    
            if($registra){
                header('Location:panel.php?mensaje=oki&id='.$idpadre);
            }else{
                header('Location:panel.php?mensaje=errori&id='.$idpadre);
            }

        

?>