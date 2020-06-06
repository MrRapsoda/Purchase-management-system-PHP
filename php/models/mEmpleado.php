<?php

    class empleado{

        private $empleado;
        private $db;

        public function __construct(){
            //require '../connection/dbconnection.php';
            $this->db = connection::conect();
            $this->empleado = array();
        }

        public function getEmployeeInfo($id){
            $query = "SELECT e.nombre_empleado, e.puesto, d.nombre_dep, e.email, e.telefono ".
                     "from empleado e, departamentos d ".
                     "where e.id_dep = d.id_dep and e.id_empleado=".$id;

            $statement = oci_parse($this->db, $query);

            //echo $statement;

            $result = oci_execute($statement);

            while($row = oci_fetch_array($statement)){
                $this->empleado[] = $row;
            }

            if (!$result) {
                $e = oci_error($statement);
                echo "<script>alert('Error '".$e.")</script>";
                exit;
            }

            return $this->empleado;
        }
    }
?>