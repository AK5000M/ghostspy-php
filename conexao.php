<?php
// Configurações do banco de dados
$host = 'localhost'; // Endereço do servidor
$dbname = 'black'; // Nome do banco de dados
$username = 'root'; // Usuário do banco de dados
$password = ''; // Senha do banco de dados

// Estabelece a conexão com o banco de dados
$conn = mysqli_connect($host, $username, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}
?>
