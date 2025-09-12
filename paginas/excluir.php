<?php
include '../conexao.php';


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM agendamentos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // depois de excluir, volta para a página da lista
        header("Location: painel.php?msg=apagado");
        exit;
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }
}
