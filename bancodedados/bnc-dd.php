<?php
$localhost= "localhost";
$username= "root";
$password= "";
$database= "usuarios";

$conn= mysqli_connect($localhost, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

echo"Conectado com sucesso";
?>