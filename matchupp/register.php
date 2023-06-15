<?php

require 'init.php';

$name = $_POST["name"];
$lastname = $_POST["lastname"];
$nickname = $_POST["nickname"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$created = $_POST["created"];

$sql = "INSERT INTO user_account(first_name, last_name, nickname, email, pass, created) VALUES('$name','$lastname','$nickname','$email','$pass','$created')";

if(mysqli_query($con, $sql)){
    echo "Success";
}else{
    echo "Error".myslqi_error($con);
}
mysqli_close($con)

?>