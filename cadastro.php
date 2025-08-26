<?php
if(isset($_POST['submit'])) 
{
//  print_r($_POST['nome']);
//   print_r($_POST['email']);
//   print_r($_POST['senha']);

  include_once('../bancodedados/bnc-dd.php');

  $nome= $_POST['nome'];
  $email= $_POST['email'];
  $senha= $_POST['senha'];

  $result= mysqli_query($conn, "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')");

  header('Location: login.php');

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iba's Buffet</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-yHfM4D5xYcHc8MIhBhHtL9BRDOoN0uRM3kskmvwlLoAhDQ/IuCB6v0IZI1iUvXkYOiMd9Rvi9BkD+fS2gk0PRA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="../cadastro.css/style.css">
  <link href="../imagens/Logo.png.jpg" rel="shortcut icon">

</head>


<body>
</head>
<body class="cadastro-body">
  
  <div class="cadas-box">
    <h2>Cadastro</h2>
    <form action="cadastro.php" method="POST">
      <input type="text" name="nome" placeholder="Digite seu nome" required>
      <input type="email" name="email" placeholder="Digite seu e-mail" required>
      <input type="password" name="senha" placeholder="Digite sua senha" required>
      <button type="submit" name="submit">Cadastrar</button> 
      <div class="sm_cnt">Já tem uma conta? <a href="login.php">Faça login</a>
    
  </div>
    </form>
    

</body>
</html>