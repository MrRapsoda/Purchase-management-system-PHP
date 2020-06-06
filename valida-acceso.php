<?php
session_start();
if(!isset($_SESSION["id_emp"]) ){
   header("Location:index.php");
}