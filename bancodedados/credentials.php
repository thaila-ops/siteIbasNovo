<?php

// print_r($_REQUEST);

if (isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
{
    include_once('../bancodedados/banco-cadastro.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // print_r('Usuario: ' . $usuario);
    // print_r('<br>');
    // print_r('Senha: ' . $senha);

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";

    $result = $conn->query($sql);

    // print_r($sql);
    // exit;

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: ../paginas/login.php');
        exit();
    } else {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('Location: ../paginas/afterlogin.php');
        exit();
    }

}
else
{
    header('Location: ../paginas/login.php');
    exit();
}