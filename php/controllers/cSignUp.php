<?php
    
    require_once '../models/mAccionesUsuario.php';

    session_start();

    /*if(!isset($_SESSION['id_emp'])){
        header('location: ../../index.php');
    }*/

    $accion = new acciones();
    
    $nombre_usuario = $_POST['txtUsername'];
    $contrasena_usuario = $_POST['txtPass'];

    $accion->login($nombre_usuario, $contrasena_usuario);
    


    //Codigo se traslado a '../models/mAccionesUsuario.php'

    /*$query = "SELECT nombreusuario,contrasena ". 
    "from usuarios where nombreusuario='".$nombre_usuario.
    "' and contrasena='".$contrasena_usuario."'";

    $statement = oci_parse($conn, $query );
    
    //Definicion de variables a partir de valores sql
    oci_define_by_name($statement, 'nombreusuario', $c_user_name);
    oci_define_by_name($statement, 'contrasena', $c_contrasena);

    $result = oci_execute($statement);

    echo $result;
    
    while ($row = oci_fetch_array($statement)){
        echo $row[0];
    }

    if (!$result) {
        $e = oci_error($statement);
        echo "<script>alert('Error')</script>";
        exit;
    } else {
        //header("location: ../../dashboard.php");
    }*/
?>


