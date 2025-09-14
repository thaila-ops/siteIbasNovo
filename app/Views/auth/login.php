<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iba's Buffet - Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    
    <link href="/assets/imagens/novo_logo.jpg" rel="shortcut icon">

    <style>
        body.login-page {
            margin: 0;
            font-family: "Playfair Display", serif;
            background-image: url(/assets/imagens/IMG2_0375.jpg);
            backdrop-filter: blur(4px);
            background-color: rgba(0,0,0,0.3);
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.25);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 25px;
            color: #DAA520; /* Dourado */
        }

        .login-box input[type="email"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #555;
            background-color: #333;
            color: #fff;
            border-radius: 6px;
            font-size: 14px;
        }

        .login-box .submitbutton,
        .login-box .back-button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            display: block;
            transition: background 0.3s ease;
        }

        .login-box .submitbutton {
            background: #a68a64; /* Cor Neutral */
            color: #fff;
        }

        .login-box .submitbutton:hover {
            background: #DAA520; /* Dourado */
        }

        .login-box .back-button {
            background: #555;
            color: #fff;
            margin-top: 10px;
        }

        .login-box .back-button:hover {
            background: #777;
        }
        
        /* Classe para a mensagem de erro */
        .alert-error {
            color: #fff;
            background-color: #dc3545;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>
<body class="login-page">

    <div class="login-box">
        <h2>Acesso Restrito</h2>

        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="alert-error">
                <?= $_SESSION['error_message']; ?>
                <?php unset($_SESSION['error_message']); ?>
            </div>
        <?php endif; ?>

        <form action="/login" method="POST">
            <input type="email" name="email" placeholder="Digite seu e-mail" required>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
            <input class="submitbutton" type="submit" name="submit" value="Entrar">
        </form>
        <a href="/" class="back-button">Voltar ao Home</a>
    </div>

</body>
</html>

