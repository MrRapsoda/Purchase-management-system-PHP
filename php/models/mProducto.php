<?php
class producto{

    private $db;
    private $producto;

    public function __construct()
    {
        $this->db = connection::conect();
        $this->producto = array();  
    }

    public function getAllProductData(){
        $query = "SELECT idproducto, nombreproducto, cantidad, unidadmedida, valorunitario, idproveedor from productos";

        $statement = oci_parse($this->db, $query);

        $result = oci_execute($statement);

        if (!$result) {
            $e = oci_error($statement);
            echo "<script>alert('Error '".$e.")</script>";
            exit;
        }

        while($row = oci_fetch_assoc($statement)){
            array_push($this->producto, $row);
            //$this->producto = $row;
        }

        return $this->producto;
    }

    public function getProductos(){
        $query = "SELECT idproducto,nombreproducto as nombre from productos";

        $statement = oci_parse($this->db, $query);

        $result = oci_execute($statement);

        if (!$result) {
            $e = oci_error($statement);
            echo "<script>alert('Error '".$e.")</script>";
            exit;
        }

        while($row = oci_fetch_assoc($statement)){
            array_push($this->producto, $row);
            //$this->producto = $row;
        }

        return $this->producto;
        
    }

    public function getValueUnit($idProducto){
        $query = "BEGIN :result := getValorUnitario(:id_prod) END;";

        $statement = oci_parse($this->db, $query);

        oci_bind_by_name($statement, ':id_prod', $idProducto);
        oci_bind_by_name($statement, ':result', $r, 40);

        $result = oci_execute($statement);

        if (!$result) {
            $e = oci_error($statement);
            echo "<script>alert('Error '".$e.")</script>";
            exit;
        }

        return $r;
    }

    public function insertProductos($id, $nombre, $cantidad, $unidad_med, $valor_unit, $id_prov){

        $query = 'BEGIN inserta_productos(:id, :name, :cantidad, :unidad, :valor, :idprov); END;';

        $statement = oci_parse($this->db,$query);

        oci_bind_by_name($statement, ':id', $id, 32);
        oci_bind_by_name($statement, ':name', $nombre, 32);
        oci_bind_by_name($statement, ':cantidad', $cantidad, 32);
        oci_bind_by_name($statement, ':unidad', $unidad_med, 32);
        oci_bind_by_name($statement, ':valor', $valor_unit, 32);
        oci_bind_by_name($statement, ':idprov', $id_prov, 32);

        $result = oci_execute($statement);

        if (!$result) {
            $e = oci_error($statement);
            echo "<script>alert('Error '".$e.")</script>";
            exit;
        }
    }

    public function deleteProd($id){
        $query = 'BEGIN deleteproducto(:id); END;';

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
