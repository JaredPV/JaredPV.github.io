<?php

require 'conexion.php';


$email=$_POST['email'];
$pass=$_POST['pass'];
//$email = "jared@micorreo.upp.edu.mx";
//$pass = "1234";

$sentencia = $con->prepare("SELECT * FROM user_account WHERE email=? AND pass=?");
$sentencia->bind_param('ss', $email, $pass);
$sentencia->execute();

$resultado = $sentencia->get_result();

if ($fila = $resultado->fetch_assoc()) {
    echo json_encode($fila, JSON_UNESCAPED_UNICODE);
}
$sentencia->close();
$con->close();
?>