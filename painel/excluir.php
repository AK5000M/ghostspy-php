<?php
session_start();
include '../conexao.php';

// Verifica se o ID do aplicativo foi passado
if (isset($_GET['id'])) {
    $app_id = $_GET['id'];

    // Consultar para pegar o nome do arquivo do banco
    $sql = "SELECT * FROM aplicativos WHERE id = '$app_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $app = $result->fetch_assoc();

        // Caminho para o diretório de uploads
        $upload_dir = '../uploads/';

        // Deletar arquivos do diretório
        unlink($upload_dir . $app['app_logo']);
        unlink($upload_dir . $app['app_file']);
        unlink($upload_dir . $app['img1']);
        unlink($upload_dir . $app['img2']);
        unlink($upload_dir . $app['img3']);
        unlink($upload_dir . $app['img4']);
        unlink($upload_dir . $app['img5']);

        // Deletar aplicativo do banco de dados
        $sql = "DELETE FROM aplicativos WHERE id = '$app_id'";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['success_message'] = 'Aplicativo excluído com sucesso!';
        } else {
            $_SESSION['error_message'] = "Erro ao excluir aplicativo: " . $conn->error;
        }
    } else {
        $_SESSION['error_message'] = "Aplicativo não encontrado.";
    }
} else {
    $_SESSION['error_message'] = "ID do aplicativo não especificado.";
}

// Redireciona de volta para a página principal
header('Location: index.php');
exit;
?>
