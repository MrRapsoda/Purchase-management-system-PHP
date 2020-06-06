<?php 
    session_start();
    require_once '../models/mEmpleado.php';
    $id = $_SESSION['id_emp'];
    $empleado = new empleado();

    $datos = $empleado->getEmployeeInfo($id);
?>