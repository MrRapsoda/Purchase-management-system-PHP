<?php 

    class acciones{

        private $db;

        public function __construct(){
            require '../connection/dbconnection.php';
            $this->db = connection::conect();
        }

        public function login($username, $password){
                $query = "SELECT nombreusuario,contrasena,id_empleado ". 
            "from usuarios where nombreusuario='".$username.
            "' and contrasena='".$password."'";

            $statement = oci_parse($this->db, $query);

            $result = oci_execute($statement);
            
            while ($row = oci_fetch_array($statement)){
                $id_empleado = $row[2];
            }

            $row_validation = oci_num_rows($statement);

            /*if($row_validation >= 1){
                session_start();
                $_SESSION['user_name'] = $username;
                $_SESSION['id_emp'] = $id_empleado;
                header("location: ../../dashboard.php");
            }*/
            
            if (!$result) {
                $e = oci_error($statement);
                echo "<script>alert('Error '".$e.")</script>";
                header("location: ../../index.php");
                exit;
            } else {
                /*session_start();
                $_SESSION['user_name'] = $username;
                $_SESSION['id_emp'] = $id_empleado;
                header("location: ../../dashboard.php");*/
                if($row_validation > 0){
                    session_start();
                    $_SESSION['user_name'] = $username;
                    $_SESSION['id_emp'] = $id_empleado;
                    header("location: ../../dashboard.php");
                }
            }
        }

        public function logOut(){
            session_start();
            session_destroy();
            //Borra todas las variables de session
            $_SESSION = array();

            //unset($_SESSION['id_emp']);
        
            header("location: ../../index.php");
        }

    }
