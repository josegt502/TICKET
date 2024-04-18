<?php 
    require_once("../config/conexion.php");
    require_once("../models/Ticket.php");
    $ticket = new Ticket();

    switch($_GET["op"]){
        case "insert":
            $ticket ->insert_ticket($_POST["Id_tienda"],$_POST["Id_error"],$_POST["ticket_titulo"],$_POST["ticket_descrip"],$_POST["user_id"]);
        break;

        case "listar_users":
            $datos=$ticket->listar_ticket_users($_POST["user_id"]);
            $data=Array();
            foreach($datos as $row) {
                $sub_array = array();
                $sub_array[]=$row["Id_ticket"];
                $sub_array[]=$row["nombre_tienda"];
                $sub_array[]=$row["user_nom"];
                $sub_array[]=$row["ticket_titulo"];
                $sub_array[]=date('d/m/Y H:i:s', strtotime($row["fecha_creacion"]));
                $sub_array[]=$row["ticket_descrip"];
                $sub_array[]='<button type="button" onClick="ver('.$row["Id_ticket"].');"  id="'.$row["Id_ticket"].'" class="btn btn-inline btn-primary btn-sm ladda-button"><i class="fa fa-eye"></i></button>';
                $data[]=$sub_array;
            }

        $results=array(
            "sEcho"=>1,
            "iTotalRecords"=>count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData"=>$data);
        echo json_encode($results);
        break;
    }
?>