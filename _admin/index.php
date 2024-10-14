<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    $_SESSION['error_message'] = 'Você precisa estar logado para acessar esta página.';
    header('Location: ../'); // Redireciona para a página de login
    exit;
}

// Inclui o arquivo de conexão
require '../conexao.php';

// Função para formatar a data no formato dd/mm/aaaa
function formatDate($date) {
    return date('d/m/Y', strtotime($date));
}

// Verifica se o formulário foi enviado para exclusão ou atualização
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Excluir usuário
    if (isset($_POST['delete_user'])) {
        $id = intval($_POST['user_id']);
        $query = "DELETE FROM usuarios WHERE id = $id";
        mysqli_query($conn, $query);
        $_SESSION['success_message'] = "Usuário excluído com sucesso.";
        header('Location: index.php'); // Redireciona para evitar reenvio de formulário
        exit;
    }

    // Atualizar acesso e data de expiração
    if (isset($_POST['update_user'])) {
        $id = intval($_POST['user_id']);
        $acesso_liberado = isset($_POST['acesso_liberado']) ? 1 : 0;
        $data_expiracao = mysqli_real_escape_string($conn, $_POST['data_expiracao']);
        $query = "UPDATE usuarios SET acesso_liberado = $acesso_liberado, data_expiracao = '$data_expiracao' WHERE id = $id";
        mysqli_query($conn, $query);
        $_SESSION['success_message'] = "Usuário atualizado com sucesso.";
        header('Location: index.php'); // Redireciona para evitar reenvio de formulário
        exit;
    }
}

// Busca usuários
$query = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $query);
$usuarios = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/ghostspy-_1_.webp">
    <title>GHOSTSPY - Gerenciar Usuários</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #161c3b;
        }
        header {
            background-color: #0f1535;
            padding: 20px;
            text-align: center;
            position: relative;
        }
        header img {
            width: 150px;
        }
        .logout-button {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }
        .alert {
            max-width: 300px;
            margin: 10px auto;
            padding: 10px;
            font-size: 14px;
        }
        .card {
            border: 1px solid white;
            background-color: transparent;
            color: white;
        }
        .card-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <header>
        <img src="../img/ghostspy-logo-_2_.webp" alt="Logo">
        <a href="../" class="btn btn-danger logout-button">Logout</a>
    </header>

    <div class="container mt-5">
        <!-- Mensagem de sucesso -->
        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="alert alert-success" id="success-message"><?php echo $_SESSION['success_message']; unset($_SESSION['success_message']); ?></div>
        <?php endif; ?>

        <!-- Lista de usuários -->
        <h2>Lista de Usuários</h2>
        <div class="list-group" id="user-list">
            <?php foreach ($usuarios as $usuario): ?>
                <div class="card mt-2">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($usuario['nome']); ?></h5>
                        <p class="card-text">Email: <?php echo htmlspecialchars($usuario['email']); ?></p>
                        <p class="card-text">Acesso Liberado: <?php echo $usuario['acesso_liberado'] ? 'Sim' : 'Não'; ?></p>
                        <p class="card-text">Data de Expiração: <?php echo formatDate($usuario['data_expiracao']); ?></p>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#updateUserModal<?php echo $usuario['id']; ?>">Editar</button>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="user_id" value="<?php echo $usuario['id']; ?>">
                            <button type="submit" name="delete_user" class="btn btn-danger">Excluir</button>
                        </form>
                    </div>
                </div>

                <!-- Modal para editar usuário -->
                <div class="modal fade" id="updateUserModal<?php echo $usuario['id']; ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Editar Usuário</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST">
                                    <input type="hidden" name="user_id" value="<?php echo $usuario['id']; ?>">
                                    <div class="form-group">
                                        <label>Acesso Liberado</label>
                                        <input type="checkbox" name="acesso_liberado" <?php echo $usuario['acesso_liberado'] ? 'checked' : ''; ?>>
                                    </div>
                                    <div class="form-group">
                                        <label>Data de Expiração</label>
                                        <select name="data_expiracao" class="form-control">
                                            <option value="<?php echo htmlspecialchars($usuario['data_expiracao']); ?>" selected><?php echo formatDate($usuario['data_expiracao']); ?></option>
                                            <option value="<?php echo date('Y-m-d', strtotime('+2 hours')); ?>">Teste - 2 Horas</option>
                                            <option value="<?php echo date('Y-m-d', strtotime('+1 week')); ?>">Semanal</option>
                                            <option value="<?php echo date('Y-m-d', strtotime('+1 month')); ?>">Mensal</option>
                                            <option value="<?php echo date('Y-m-d', strtotime('+15 days')); ?>">Quinzenal</option>
                                            <option value="<?php echo date('Y-m-d', strtotime('+2 months')); ?>">2 Meses</option>
                                            <option value="<?php echo date('Y-m-d', strtotime('+3 months')); ?>">3 Meses</option>
                                            <option value="<?php echo date('Y-m-d', strtotime('+6 months')); ?>">6 Meses</option>
                                            <option value="<?php echo date('Y-m-d', strtotime('+1 year')); ?>">1 Ano</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" name="update_user" class="btn btn-primary">Atualizar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Ocultar mensagem de sucesso após 2 segundos
        $(document).ready(function() {
            // Verifica se a mensagem de sucesso está presente
            if ($("#success-message").length) {
                setTimeout(function() {
                    $("#success-message").fadeOut();
                }, 2000);
            }
        });
    </script>
</body>
</html>
