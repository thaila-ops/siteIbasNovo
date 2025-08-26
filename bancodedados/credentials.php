<?php

// print_r($_REQUEST);

if (isset($_POST['submit'])) 
{
 header('Location: ../paginas/afterlogin.php');
}
else
{
    header('Location: ../paginas/login.php');
    exit();
}
