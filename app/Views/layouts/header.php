<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iba's Buffet - <?= $titulo ?? 'Bem-vindo' ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/estilo-principal.css">
    <link href="/assets/imagens/novo_logo.jpg" rel="shortcut icon">
</head>
<body class="<?= strtolower($titulo ?? '') === 'login' ? 'login-page' : '' ?>">

    <?php if (strtolower($titulo ?? '') !== 'login'): ?>
        <a href="https://wa.me/5544999212043" class="whatsapp-float" target="_blank" title="Fale conosco no WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
        <header>
    <div class="container-fluid px-5">
        <nav>
            <a href="/" class="header-logo">
                <img src="/assets/imagens/novo_logo.jpg" width="120px" alt="Iba's Buffet Logo">
            </a>

            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/reserva">Reserva</a></li>
                <li><a href="/menu-natal">Menu de Natal</a></li>
                <li><a href="/catalogo">Catálogo</a></li>
                <li><a href="/login"><i class="fas fa-user-circle"></i> Login</a></li>
            </ul>
        </nav>
    </div>
</header>
    <?php endif; ?>