<?php

class proveedor
{

    private $proveedor;
    private $db;

    public function __construct()
    {
        $this->db = connection::conect();
        $this->proveedor = array();
    }

    public function getProveedorName()
    {
        $query = "SELECT idproveedor, nombreproveedor from proveedores";

        $statement = oci_parse($this->db, $query);

        $result = oci_execute($statement);

        if (!$result) {
            $e = oci_error($statement);
            echo "<script>alert('Error '" . $e . ")</script>";
            exit;
        }

        while ($row = oci_fetch_array($statement)) {
            array_push($this->proveedor, $row);
        }

        return $this->proveedor;
    }


    public function insertProvs($id, $nombre)
    {

        $query = 'BEGIN inserta_proveedores(:id, :name); END;';

        $statement = oci_parse($this->db, $query);

        oci_bind_by_name($statement, ':id', $id, 32);
        oci_bind_by_name($statement, ':name', $nombre, 32);

        $result = oci_execute($statement);

        if (!$result) {
            $e = oci_error($statement);
            echo "<script>alert('Error '" . $e . ")</script>";
            exit;
        }
    }

    public function lastId()
    {
        $query = "SELECT max(idproveedor) from proveedores";

        $statement = oci_parse($this->db, $query);

        $result = oci_execute($statement);

        if (!$result) {
            $e = oci_error($statement);
            echo "<script>alert('Error '" . $e . ")</script>";
            exit;
        }

        while ($row = oci_fetch_array($statement)) {
            $lastId = $row;
        }

        return $lastId;
    }

    public function modifyProv($id, $nombre){
        $query = 'BEGIN modificaproveedor(:id, :name); END;';

        $statement = oci_parse($this->db, $query);

        oci_bind_by_name($statement, ':id', $id, 32);
        oci_bind_by_name($statement, ':name', $nombre, 32);

        $result = oci_execute($statement);

        if (!$result) {
            $e = oci_error($statement);
            echo "<script>alert('Error '" . $e . ")</script>";
            exit;
        }
    }

    public function deleteProveedor($id){
        $query = 'BEGIN delete_proveedor(:id); END;';

        $statement = oci_parse($this->db, $query);

        oci_bind_by_name($statement, ':id', $id, 32);

        $result = oci_execute($statement);

        if (!$result) {
            $e = oci_error($statement);
            echo "<script>alert('Error '" . $e . ")</script>";
            exit;
        }
    }
}
