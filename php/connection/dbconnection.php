<?php

class connection{
    
    public static function conect(){
      $conn = oci_connect("proyectolbd", "bd321", "localhost/XE");
        if ($conn) {
            //echo "<script>console.log('Conexion Exitosa')</script>"; 
        } else {
            //echo "<script>console.log('Error en la conexion')</script>";
        } 
        
        return $conn;
    }
    
    
}
        
?> 