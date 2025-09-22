<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Iba's Buffet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="/assets/imagens/novo_logo.jpg" rel="shortcut icon">
    <style>
        /* Estilos extraídos e adaptados do afterlogin.php original */
        :root {
            --primary: #8b7100ff;
            --light: #FFF9F0;
            --text: #4b3621;
        }
        * {
            margin: 0; padding: 0; box-sizing: border-box; font-family: "Playfair Display", serif;
        }
        body {
            color: var(--text); line-height: 1.6; padding: 20px;
        }
        body::before {
            content: ""; position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: url(/assets/imagens/IMG2_0375.jpg) no-repeat center center / cover;
            filter: blur(5px); z-index: -1;
        }
        .main-container {
            max-width: 1200px; margin: 0 auto; background-color: white;
            border-radius: 10px; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); overflow: hidden;
        }
        .header {
            background: linear-gradient(to right, var(--primary), #503b00ff); color: white;
            padding: 25px 30px; display: flex; align-items: center; justify-content: space-between;
        }
        .header-content { padding-left: 20px; }
        .header-content h1 { font-size: 24px; margin-bottom: 5px; color: white; }
        .header-content p { font-size: 14px; opacity: 0.9; color: white; }
        .logo-container { display: flex; align-items: center; }
        .logo img { width: 80px; height: 80px; border-radius: 50%; }
        .btn {
            padding: 10px 15px; border-radius: 5px; border: none; cursor: pointer;
            display: inline-flex; align-items: center; font-weight: 500; transition: all 0.3s;
            text-decoration: none;
        }
        .btn-secondary { background-color: #6c757d; color: white; }
        .btn-danger { background-color: #c62828; color: white; }
        .btn i { margin-right: 8px; }
        .btn:hover { opacity: 0.9; transform: translateY(-2px); }
        .table-container { padding: 30px; overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; }
        table th, table td { padding: 15px; text-align: left; border-bottom: 1px solid #eaeaea; }
        table th { background-color: #f8f9fa; color: var(--primary); font-weight: 600; }
        table tr:hover { background-color: #f9f9f9; }

        /* ESTILOS ADICIONADOS PARA A NOVA CÉLULA DE AÇÕES */
        .action-cell {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .action-cell form {
            margin: 0;
        }
        .status-select {
            padding: 5px 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .btn-sm { /* Botão menor para salvar status e excluir */
            padding: 5px 10px;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="header">
            <div class="logo-container">
                <div class="logo">
                    <img src="/assets/imagens/novo_logo.jpg" alt="Iba's Buffet">
                </div>
                <div class="header-content">
                    <h1>Painel de Reservas</h1>
                    <p>Bem-vindo, <?= htmlspecialchars($_SESSION['user_name']); ?>!</p>
                </div>
            </div>
            <a href="/logout" class="btn btn-secondary">
                <i class="fas fa-sign-out-alt"></i> Sair
            </a>
        </div>

        <div class="table-container">
            <h2 style="color: var(--primary); margin-bottom: 20px;">Reservas Recebidas</h2>

            <?php if (empty($reservas)): ?>
                <div style="background-color: #e9ecef; padding: 20px; border-radius: 5px; text-align: center;">
                    Nenhuma reserva encontrada no momento.
                </div>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Evento</th>
                            <th>Data</th>
                            <th>Convidados</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($reservas as $reserva): ?>
                            <tr>
                                <td><?= htmlspecialchars($reserva['nome_cliente']); ?></td>
                                <td><?= htmlspecialchars($reserva['telefone']); ?></td>
                                <td><?= htmlspecialchars($reserva['email']); ?></td>
                                <td><?= htmlspecialchars($reserva['tipo_evento']); ?></td>
                                <td><?= $reserva['data_formatada']; ?> às <?= htmlspecialchars(substr($reserva['hora_evento'], 0, 5)); ?></td>
                                <td><?= htmlspecialchars($reserva['num_convidados']); ?></td>
                                
                                <td><?= htmlspecialchars($reserva['status']); ?></td>
                                
                                <td class="action-cell">
                                    <form action="/reserva/update-status" method="POST">
                                        <input type="hidden" name="id" value="<?= $reserva['id']; ?>">
                                        <select name="status" class="status-select">
                                            <option value="Pendente" <?= $reserva['status'] === 'Pendente' ? 'selected' : '' ?>>Pendente</option>
                                            <option value="Confirmada" <?= $reserva['status'] === 'Confirmada' ? 'selected' : '' ?>>Confirmada</option>
                                            <option value="Cancelada" <?= $reserva['status'] === 'Cancelada' ? 'selected' : '' ?>>Cancelada</option>
                                        </select>
                                        <button type="submit" class="btn btn-sm btn-secondary">Salvar</button>
                                    </form>

                                    <form action="/reserva/delete" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta reserva?');">
                                        <input type="hidden" name="id" value="<?= $reserva['id']; ?>">
                                        <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>