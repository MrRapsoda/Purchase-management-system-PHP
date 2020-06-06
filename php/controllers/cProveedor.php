<?php 
require_once '../connection/dbconnection.php';
require_once '../models/mProveedor.php';

$proveedor = new proveedor();

$datosProveedor = $proveedor->getProveedorName();
$lastId = $proveedor->lastId();

?>