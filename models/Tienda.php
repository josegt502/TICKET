<?php
    class Tienda extends Conectar{
        public function get_tienda(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tb_tienda WHERE est=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
    ?>