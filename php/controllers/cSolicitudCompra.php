<?php 
require_once '../models/mSolicitudCompra.php';

$solicitud = new solicitudCompra();

$datosSolicitud = $solicitud->getSolicitudInfo();


?>