<?php
    class Usuario extends Conectar{

        public function login(){
            $conectar=parent::Conexion();
            parent::set_names();

            if(isset($_POST["enviar"])){
                $correo = $_POST["user_correo"];
                $pass = $_POST["user_pass"];
                $rol = $_POST["Id_rol"];
                if(empty($correo) and empty($pass)){
                    header("Location:".conectar::ruta()."index.php?m=2");
                }else{
                    $sql="SELECT * FROM tm_usuario WHERE user_correo=? and user_pass=? and Id_rol=? and estado=1";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1,$correo);
                    $stmt->bindValue(2,$pass);
                    $stmt->bindValue(3,$rol);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if(is_array($resultado) and count($resultado)>0){
                        $_SESSION["user_id"]=$resultado["user_id"];
                        $_SESSION["user_nom"]=$resultado["user_nom"];
                        $_SESSION["user_ape"]=$resultado["user_ape"];
                        $_SESSION["user_correo"]=$resultado["user_correo"];
                        $_SESSION["Id_rol"]=$resultado["Id_rol"];
                        header("Location:".Conectar::ruta()."view/Home/");
                        exit(); 
                    }else{
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit(); 
                    }

                }
            }

        }

    }



?>