<?php
require_once '../connection/dbconnection.php';
require_once '../models/mProducto.php';

session_start();
$producto = new producto();
$datos_productos = $producto->getProductos();
$all_data = $producto->getAllProductData();
/* foreach ($datos_productos as $data){
    echo json_encode($data);
}  */




/* if (isset($_POST['id'])) {
    //var_dump($_POST['id']);
    $_SESSION ['id-proveedor'] = $_POST['id'];
    $id = $_POST['id'];
    $datosProds = $producto->getProductosXProveedor($id);
    //require_once '../views/modal-add-products.php';
}

$datosProds = $producto->getProductosXProveedor($id); */
