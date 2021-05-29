<?php
    require_once("class/admin.php");
    $idcarril = $_GET['id'];
        $objeto = new admin();
      
    $consulta = $objeto->consultarCarril($idcarril);
    if(count($consulta) > 0){
        foreach($consulta as $con){
            if($con['grado'] == "Pre-escolar"){
                $color = "yellow";
            }elseif($con['grado'] == "Primaria"){
                $color = "red";
            }else{
                $color = "green";
            }
            
            echo "<tr style='background:".$color."'>";
                echo "<td>".$con['nombre']."</td>";
            echo "</tr>";
        }
    }
    

?>