<?php
session_start(); // Inicia a sessão
header('Content-Type: application/json'); // Define o tipo de resposta como JSON

// Inclui o arquivo de conexão
include 'conexao.php';

// Recebe os dados do login enviados via JSON
$data = json_decode(file_get_contents('php://input'), true);
$usuario = $data['email'] ?? null;
$senha = $data['senha'] ?? null;

// Validação básica das entradas
if (empty($usuario) || empty($senha)) {
    echo json_encode(['success' => false, 'message' => 'Por favor, preencha todos os campos.']);
    exit;
}

// Filtra o e-mail para evitar possíveis injeções
$usuario = filter_var($usuario, FILTER_SANITIZE_EMAIL);

// Prepara a consulta SQL para selecionar o usuário
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
if (!$stmt) {
    echo json_encode(['success' => false, 'message' => 'Erro ao preparar a consulta: ' . $conn->error]);
    exit;
}

$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

// Verifica se o usuário foi encontrado
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Verifica se a senha está correta
    if (password_verify($senha, $row['senha'])) {
        // Autenticação bem-sucedida
        $_SESSION['usuario_id'] = $row['id']; // Define o ID do usuário na sessão

        // Verifica se o acesso está liberado
        if (!$row['acesso_liberado']) {
            echo json_encode(['success' => false, 'message' => 'Usuário não liberado, contate o suporte.']);
            exit;
        }

        // Verifica se a data de expiração está definida e se expirou
        if (isset($row['data_expiracao']) && strtotime($row['data_expiracao']) < time()) {
            echo json_encode(['success' => false, 'message' => 'Acesso expirado.']);
            session_destroy(); // Destrói a sessão se o acesso expirou
            exit;
        }

        // Verifica o nível de acesso e redireciona conforme necessário
        if ($row['nivel_acesso'] === 'admin') {
            echo json_encode(['success' => true, 'message' => 'Login bem-sucedido.', 'redirectUrl' => '_admin/']);
        } else {
            echo json_encode(['success' => true, 'message' => 'Login bem-sucedido.', 'redirectUrl' => 'painel/']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Credenciais inválidas.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Usuário não encontrado.']);
}

// Fecha a conexão
$stmt->close();
$conn->close();
?>
