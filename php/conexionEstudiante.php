<?php

$servername = "127.0.0.1";
$database = "adsi";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Conexion fallida: ". mysqli_connect_error());
}
//echo"Conectado satisfactoriamente <br>";

?>