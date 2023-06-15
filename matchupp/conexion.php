<?php

$host = "jpv-development.mysql.database.azure.com";
$user = "administrador";
$pass = "Prometeo2023";
$db = "matchupp";

$con = mysqli_connect($host, $user, $pass, $db);

if(!$con){
    echo "Conexion fallida";
}
?>