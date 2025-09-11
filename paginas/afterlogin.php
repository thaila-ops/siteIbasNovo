<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas - Iba's Buffet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #8b7100ff;
            --secondary: #f9e90aff;
            --accent: #DAA520;
            --light: #FFF9F0;
            --dark: #1A1A1A;
            --neutral: #A68A64;
            --text: #4b3621;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Playfair Display", serif;
        }

        body {
            background-image: url(../imagens/IMG2_0375.jpg);
            color: var(--text);
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(to right, var(--primary), #503b00ff);
            color: white;
            padding: 25px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }



        .header-content h1 {
            padding: 20px;
            font-size: 24px;
            margin-bottom: 5px;
        }

        .header-content p {
            font-size: 14px;
            opacity: 0.9;
        }

        .stats {
            display: flex;
            background-color: var(--light);
            padding: 15px 30px;
            border-bottom: 1px solid #e0e0e0;
        }

        .stat-item {
            display: flex;
            align-items: center;
            margin-right: 30px;
        }

        .stat-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background-color: rgba(139, 0, 0, 0.1);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-size: 18px;
        }

        .stat-content h3 {
            font-size: 20px;
            margin-bottom: 2px;
        }

        .stat-content p {
            font-size: 13px;
            color: #666;
        }

        .table-container {
            padding: 30px;
            overflow-x: auto;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .table-header h2 {
            color: var(--primary);
            font-size: 22px;
            display: flex;
            align-items: center;
        }

        .table-header h2 i {
            margin-right: 10px;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 10px 15px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-secondary {
            background-color: var(--light);
            color: var(--text);
            border: 1px solid #ddd;
        }

        .btn i {
            margin-right: 5px;
        }

        .btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        table th,
        table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eaeaea;
        }

        table th {
            background-color: #f8f9fa;
            color: var(--primary);
            font-weight: 600;
            position: sticky;
            top: 0;
        }

        table tr:last-child td {
            border-bottom: none;
        }

        table tr:hover {
            background-color: #f9f9f9;
        }

        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-confirmed {
            background-color: #e8f5e9;
            color: #2e7d32;
        }

        .status-pending {
            background-color: #fff3e0;
            color: #ef6c00;
        }

        .action-cell {
            display: flex;
            gap: 8px;
        }

        .icon-btn {
            width: 32px;
            height: 32px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .icon-btn:hover {
            transform: scale(1.1);
        }

        .edit-btn {
            background-color: #e3f2fd;
            color: #1565c0;
        }

        .delete-btn {
            background-color: #ffebee;
            color: #c62828;
        }

        .view-btn {
            background-color: #e8f5e9;
            color: #2e7d32;
        }

        .footer {
  background-color: white;
  color: var(--dark);
  padding: 60px 0 40px;
  text-align: center;
  margin-top: 80px;
}

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 8px;
        }

        .pagination-btn {
            width: 36px;
            height: 36px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            border: 1px solid #ddd;
            cursor: pointer;
            transition: all 0.3s;
        }

        .pagination-btn.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .pagination-btn:hover:not(.active) {
            background-color: #f5f5f5;
        }

        @media (max-width: 992px) {
            .stats {
                flex-wrap: wrap;
            }

            .stat-item {
                flex: 1 0 50%;
                margin-bottom: 15px;
            }
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }

            .logo-container {
                margin-bottom: 15px;
                justify-content: center;
            }

            .stats {
                flex-direction: column;
            }

            .stat-item {
                flex: 1;
                margin-right: 0;
                margin-bottom: 15px;
            }

            .table-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .actions {
                margin-top: 15px;
                width: 100%;
                justify-content: space-between;
            }

            .btn {
                flex: 1;
                justify-content: center;
            }

            table {
                display: block;
                overflow-x: auto;
            }

            table th,
            table td {
                padding: 10px;
            }
        }
    </style>
</head>

<body>

    <div class="btn" style="" text-decoration:none;>
        <a href="../index.php?pagina=home" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Voltar ao Menu
        </a>
    </div>
    <div class="container">
        <div class="header">
            <div class="logo-container">
                <div class="logo">
                    <img src="../imagens/novo_logo.jpg" alt="Iba's Buffet"
                        style="width: 130px; height: 130px; border-radius: 50%;">
                </div>
                <div class="header-content">
                    <h1>Reservas - Iba's Buffet</h1>
                    <p>Painel administrativo de reservas</p>
                </div>
            </div>



            <button class="btn btn-secondary" onclick="window.print()">
                <i class="fas fa-print"></i> Imprimir
            </button>
        </div>


        <div class="stats">
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>

            </div>
        </div>



        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Tipo de Evento</th>
                    <th>Convidados</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //bc.d_contato/banco_dados.php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "buffet_db";

                $conn = new mysqli($host, $user, $pass, $db);


                if ($conn->connect_error) {
                    die("Falha na conexão: " . $conn->connect_error);
                }


                $sql = "SELECT id, nome, telefone, email, data_evento, hora_evento, tipo_evento, num_convidados, criado_em FROM reserva ORDER BY criado_em DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        $statuses = ['status-confirmed', 'status-pending'];
                        $status_class = $statuses[array_rand($statuses)];
                        $status_text = $status_class == 'status-confirmed' ? 'Confirmado' : 'Pendente';

                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td><strong>" . $row["nome"] . "</strong></td>";
                        echo "<td>" . $row["telefone"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . date('d/m/Y', strtotime($row["data_evento"])) . "</td>";
                        echo "<td>" . $row["hora_evento"] . "</td>";
                        echo "<td>" . $row["tipo_evento"] . "</td>";
                        echo "<td>" . $row["num_convidados"] . "</td>";
                       
                        echo "<td class='action-cell'>";

                       
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='10' style='text-align: center; padding: 20px; color: #666;'>Nenhuma reserva encontrada</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>

        <div class="pagination">
            <div class="pagination-btn active">1</div>
            <div class="pagination-btn">2</div>
            <div class="pagination-btn">3</div>
            <div class="pagination-btn">...</div>
            <div class="pagination-btn">10</div>
        </div>
    </div>

    <div class="footer">
        <p>Iba's Buffet &copy; 2023 - Todos os direitos reservados</p>
    </div>
    </div>

   
</body>

</html>