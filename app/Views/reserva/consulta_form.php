<?php 
// Inclui o cabeçalho padrão do site
// O caminho '../partials/header.php' pode precisar de ajuste
// dependendo de onde seu header.php está.
require_once __DIR__ . '/../layouts/header.php'; 
?>

<div class="consulta-container">

    <h1>Consulte suas Reservas</h1>
    <p>Digite o e-mail que você usou ao fazer a reserva para ver seu histórico.</p>

    <form action="/consultar-reservas" method="POST">
        <label for="email">Seu E-mail:</label>
        <input type="email" id="email" name="email" placeholder="seu.email@exemplo.com" required>
        <button type="submit">Buscar Reservas</button>
    </form>

</div> <?php 
// Inclui o rodapé padrão do site
require_once __DIR__ . '/../layouts/footer.php'; 
?>