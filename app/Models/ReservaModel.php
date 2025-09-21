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

}