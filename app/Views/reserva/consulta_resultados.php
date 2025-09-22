<?php 
// Inclui o cabeçalho padrão do site
require_once __DIR__ . '/../layouts/header.php'; 
?>

<div class="consulta-container">

    <h1>Reservas Encontradas</h1>

    <?php if (!empty($reservas)): ?>
        <p>Abaixo estão as reservas encontradas para o e-mail: <strong><?php echo htmlspecialchars($email); ?></strong></p>
        
        <table>
            <thead>
                <tr>
                    <th>Nome do Cliente</th>
                    <th>Data do Evento</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservas as $reserva): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($reserva['nome_cliente']); ?></td>
                        <td><?php echo htmlspecialchars($reserva['data_formatada']); ?></td>
                        <td><?php echo htmlspecialchars($reserva['status']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhuma reserva foi encontrada para o e-mail: <strong><?php echo htmlspecialchars($email); ?></strong></p>
    <?php endif; ?>

    <br>
    <a href="/consultar-reservas" style="text-decoration: none; color: var(--primary);">Fazer outra consulta</a>

</div> <?php 
// Inclui o rodapé padrão do site
require_once __DIR__ . '/../layouts/footer.php'; 
?>