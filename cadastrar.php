<?php
header('Content-Type: application/json'); // Define o tipo de resposta como JSON

// Inclui o arquivo de conexão
include 'conexao.php';

// Recebe os dados do cadastro enviados via JSON
$data = json_decode(file_get_contents('php://input'), true);
$usuario = $data['usuario'];
$email = $data['email'];
$senha = $data['senha'];

// Verifica se os campos estão preenchidos
if (empty($usuario) || empty($email) || empty($senha)) {
    echo json_encode(['success' => false, 'message' => 'Por favor preencha todos os campos.']);
    exit;
}

// Valida o e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Email inválido.']);
    exit;
}

// Verifica se o e-mail já está cadastrado
$sqlCheck = "SELECT id FROM usuarios WHERE email = '$email'";
$resultCheck = mysqli_query($conn, $sqlCheck);

if (mysqli_num_rows($resultCheck) > 0) {
    // Se o e-mail já existir, retorna uma mensagem de erro
    echo json_encode(['error' => false, 'message' => 'usuário já existente.']);
    exit;
}

// Cria a senha hash
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Prepara a consulta SQL para inserir os dados no banco
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$usuario', '$email', '$senhaHash')";

// Executa a consulta
if (mysqli_query($conn, $sql)) {
    // Se a inserção for bem-sucedida, retorna uma resposta de sucesso
    echo json_encode(['success' => true, 'message' => 'Cadastro realizado com sucesso!']);
} else {
    // Se ocorrer um erro na inserção, retorna a mensagem de erro
    echo json_encode(['error' => false, 'message' => 'Erro ao cadastrar: ' . mysqli_error($conn)]);
}

// Fecha a conexão
mysqli_close($conn);
?>
