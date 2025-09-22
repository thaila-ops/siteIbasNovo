<?php

namespace App\Models;

use Config\Database;
use PDO;

class ReservaModel
{
    private PDO $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    /**
     * Salva uma nova reserva no banco de dados.
     * Retorna true em caso de sucesso, false em caso de falha.
     */
    public function save(array $data): bool
    {
        $sql = "INSERT INTO reservas (nome_cliente, telefone, email, data_evento, hora_evento, tipo_evento, num_convidados) 
                VALUES (:nome_cliente, :telefone, :email, :data_evento, :hora_evento, :tipo_evento, :num_convidados)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':nome_cliente'   => $data['nome'],
            ':telefone'       => $data['telefone'],
            ':email'          => $data['email'],
            ':data_evento'    => $data['data_evento'],
            ':hora_evento'    => $data['hora_evento'],
            ':tipo_evento'    => $data['tipo_evento'],
            ':num_convidados' => $data['num_convidados'],
        ]);
    }

    /**
     * Busca todas as reservas, ordenando pelas mais recentes.
     * Retorna um array com todas as reservas.
     */
    public function findAll(): array
    {
        $stmt = $this->conn->query(
            "SELECT *, DATE_FORMAT(data_evento, '%d/%m/%Y') as data_formatada 
             FROM reservas 
             ORDER BY criado_em DESC"
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Exclui uma reserva do banco de dados pelo seu ID.
     */
    public function deleteById(int $id): bool
    {
        $stmt = $this->conn->prepare("DELETE FROM reservas WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    
    /**
     * Busca todas as reservas associadas a um e-mail.
     * @param string $email O e-mail do cliente a ser buscado.
     * @return array Retorna um array com as reservas encontradas.
     */
    public function buscarPorEmail(string $email): array
    {
        // Note que usei a coluna `email` conforme seu método save().
        $query = "SELECT *, DATE_FORMAT(data_evento, '%d/%m/%Y') as data_formatada
                  FROM reservas 
                  WHERE email = :email 
                  ORDER BY data_evento DESC";

        // Prepara a consulta de forma segura para evitar SQL Injection
        $stmt = $this->conn->prepare($query);

        // Associa o valor do e-mail ao parâmetro :email na query
        $stmt->bindValue(':email', $email);

        // Executa a query
        $stmt->execute();

        // Retorna todas as linhas encontradas como um array associativo
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Atualiza o status de uma reserva específica.
     * @param int $id O ID da reserva a ser atualizada.
     * @param string $status O novo status ('Pendente', 'Confirmada', 'Cancelada').
     * @return bool Retorna true em caso de sucesso, false em caso de falha.
     */
    public function updateStatus(int $id, string $status): bool
    {
        $sql = "UPDATE reservas SET status = :status WHERE id = :id";
        
        $stmt = $this->conn->prepare($sql);
        
        $stmt->bindValue(':status', $status);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        
        return $stmt->execute();
    }

/**
     * Verifica se uma data de evento já está reservada e não foi cancelada.
     * @param string $data_evento A data no formato YYYY-MM-DD.
     * @return bool Retorna true se a data estiver ocupada, false caso contrário.
     */
    public function dataJaReservada(string $data_evento): bool
    {
        // A query conta quantas reservas existem para a data que NÃO ESTEJAM canceladas.
        $sql = "SELECT COUNT(*) FROM reservas WHERE data_evento = :data_evento AND status != 'Cancelada'";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':data_evento', $data_evento);
        $stmt->execute();
        
        // fetchColumn() retorna o valor da primeira coluna da primeira linha (o nosso COUNT(*))
        $count = $stmt->fetchColumn();
        
        // Se a contagem for maior que 0, a data está ocupada.
        return $count > 0;
    }

}