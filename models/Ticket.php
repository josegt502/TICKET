<?php
    class Ticket extends Conectar{
        /**
         * Summary of insert_ticket
         * @param mixed $Id_ticket
         * @param mixed $Id_tienda
         * @param mixed $Id_error
         * @param mixed $ticket_titulo
         * @param mixed $ticket_descrip
         * @param mixed $user_id
         * @param mixed $est
         * @return array
         */
        public function insert_ticket($Id_tienda,$Id_error,$ticket_titulo,$ticket_descrip,$user_id){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tb_ticket (Id_tienda, Id_error, ticket_titulo, ticket_descrip, user_id, fecha_creacion, est) VALUES ( ?, ?, ?, ?, ?, now(),'1');";
            $sql=$conectar->prepare($sql);
            
            $sql->bindValue(1, $Id_tienda);
            $sql->bindValue(2, $Id_error);
            $sql->bindValue(3, $ticket_titulo);
            $sql->bindValue(4, $ticket_descrip);
            $sql->bindValue(5, $user_id);
            
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        /**
         * Summary of listar_ticket_users
         * @param mixed $user_id
         * @return array
         */
        public function listar_ticket_users($user_id){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT
             tb_ticket.Id_ticket,
             tb_tienda.nombre_tienda,
             tm_usuario.user_nom,
             tb_ticket.ticket_titulo,
             tb_ticket.ticket_descrip,
             tb_ticket.fecha_creacion 
                FROM
                 tb_ticket
                INNER JOIN tb_tienda ON tb_ticket.Id_tienda = tb_tienda.Id_tienda 
                INNER JOIN tm_usuario ON tb_ticket.user_id = tm_usuario.user_id 
                WHERE tb_ticket.est=1
                AND tm_usuario.user_id = ?";
            $sql=$conectar->prepare($sql);           
            $sql->bindValue(1, $user_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
    ?>