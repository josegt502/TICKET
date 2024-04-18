<?php 
    require_once("../config/conexion.php");
    require_once("../models/Tienda.php");
    $tienda = new Tienda();

    switch($_GET["op"]){
        case "combo":
            $datos = $tienda->get_tienda();
            if(is_array($datos)==true and count($datos)> 0){
                $html = "<option></option>";
                foreach($datos as $row){
                    $html.= "<option value='".$row['Id_tienda']."'>".$row['nombre_tienda']."</option>";
                }
                echo $html;
            }
        break;
    }
?>