<?php 
require_once '../connection/dbconnection.php';
require_once '../models/mSolicitudCompra.php';
require_once '../models/mProducto.php';
require_once '../models/mProveedor.php';

$solicitudes = new solicitudCompra();
$producto = new producto();
$proveedor = new proveedor();

$accion = $_GET['accion'];

switch ($accion) {
    case 'crear-sol':
        $lastConsecutivo = $solicitudes->createNewSolicitude();
    break;

    case 'get-val':
        $valor_unitario = $producto->getValueUnit($_GET['id_producto']);
        echo $valor_unitario;
    break;

    case 'insert-prods':
        $id = $_GET['id-producto'];
        $name = $_GET['nombre-prod'];
        $cantidad = $_GET['cantidad-prod'];
        $unidad = $_GET['unidad-medida'];
        $valor = $_GET['valorunitario'];
        $producto->insertProductos($id, $name, $cantidad, $unidad, $valor, 3);
    break;

    case 'insert-prov':
        $id = $_GET['id-prov'];
        $name = $_GET['nombre-prov'];
        $proveedor->insertProvs($id, $name);
    break;

    case 'edit-prov':
        $id = $_GET['id-prov'];
        $name = $_GET['nombre-prov'];
        $proveedor->modifyProv($id, $name);
    break;

    case 'delete-prov':
        $id = $_GET['id-prov'];
        $proveedor->deleteProveedor($id);
    break;

    case 'delete-prod':
        $id = $_GET['id-prov'];
        $producto->deleteProd($id);
    break;
    }
    
    
?>