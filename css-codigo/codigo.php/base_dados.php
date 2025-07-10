<?php
// Conexão com a base de dados MySQL
$conn = new mysqli("localhost", "root", "", "PAP.html");

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Recolher os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$servico = $_POST['servico'];

// Inserir os dados na tabela
$sql = "INSERT INTO pedidos_servico (nome, email, servico)
        VALUES ('$nome', '$email', '$servico')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Pedido enviado com sucesso!";
} else {
    echo "❌ Erro: " . $conn->error;
}

$conn->close();
?>

