<?php

// print_r($_REQUEST);

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    include_once('../bancodedados/bnc-dd.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r('Email: ' . $email);
    // print_r('<br>');
    // print_r('Senha: ' . $senha);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    $result = $conn->query($sql);

    // print_r($sql);
    // exit;

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../paginas/login.php');
        exit();
    } else {
        $_SESSION['email'] = $email;
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
