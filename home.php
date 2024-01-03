<?php
// Conectar ao banco de dados (substitua as informações de conexão com as suas)
$servername = "localhost:3308"; // Endereço do servidor de banco de dados
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "formulario_contato"; // Nome do banco de dados

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter dados do formulário
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];


// Inserir dados no banco de dados
$sql = "INSERT INTO cruzeiro (CPF, Senha) VALUES ('$cpf','$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechar a conexão
$conn->close();
?>
