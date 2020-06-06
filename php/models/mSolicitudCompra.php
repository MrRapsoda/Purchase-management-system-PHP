<?php

class solicitudCompra
{

    private $solicitud;
    private $db;

    public function __construct()
    {
        $this->db = connection::conect();
        $this->solicitud = array();
    }

    public function getSolicitudInfo()
    {
        //$query = "SELECT s.consecutivo, e.nombre_empleado, d.nombre_dep, s.centro_costos, s.id_producto, s.cantidad, s.sc_estado from solicitudCompra s, departamentos d, empleado e where s.id_responsable = e.id_empleado and e.id_dep= d.id_dep ";
        $query = "SELECT  s.consecutivo, e.nombre_empleado, d.nombre_dep, s.fecha, s.sc_estado"
            . " from solicitudCompra s, departamentos d, empleado e"
            . " where s.id_responsable = e.id_empleado"
            . " and e.id_dep= d.id_dep"
            . " group by s.consecutivo, e.nombre_empleado, d.nombre_dep, s.fecha, s.sc_estado order by s.consecutivo";

        //$query = "SELECT * from solicitudCompra";


        $statement = oci_parse($this->db, $query);

        //echo $statement;

        $result = oci_execute($statement);

        $num_rows = oci_num_fields($statement);

        if (!$result) {
            $e = oci_error($statement);
            echo "<script>alert('Error '" . $e . ")</script>";
            exit;
        }

        while ($row = oci_fetch_assoc($statement)) {
            array_push($this->solicitud, $row);
        }

        //return $datos_length;
        return $this->solicitud;
        //return oci_fetch_array($statement);
        //return $num_rows;
        //return $datos;
    }

    function getLastConsecutivo(){
        $query = 'SELECT max(consecutivo) from solicitudCompra';

        $statement = oci_parse($this->db, $query);

        $result = oci_execute($statement);

        if (!$result) {
            $e = oci_error($statement);
            echo "<script>alert('Error '" . $e . ")</script>";
            exit;
        }

        while ($row = oci_fetch_row($statement)){
            $last_id = $row;
        }

        return $last_id;

    }

    function createNewSolicitude(){
       /*  $last_id = $this->getLastConsecutivo() + 1;
        $date = date('d/m/y');
        $id_empleado = $_SESSION['id_emp']; */
        
        $query = 'CALL createSolicitude()';

        $statement = oci_parse($this->db, $query);

        $result = oci_execute($statement);

        if (!$result) {
            $e = oci_error($statement);
            //echo "<script>alert('Error '" . $e . ")</script>";
            exit;
        }
    }
}
