<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    $_SESSION['error_message'] = 'Você precisa estar logado para acessar esta página.';
    header('Location: ../'); // Redireciona para a página de login
    exit;
}

// Incluindo o arquivo de conexão
include '../conexao.php';

$user_id = $_SESSION['usuario_id']; // ID do usuário logado

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Coletar dados do formulário
    $app_name = $_POST['app_name'];
    $app_description = $_POST['app_description'];
    $app_text = $_POST['app_text'];

    // Para o upload do logo e arquivos
    $app_logo = $_FILES['app_logo']['name'];
    $app_file = $_FILES['app_file']['name'];
    $img1 = $_FILES['img1']['name'];
    $img2 = $_FILES['img2']['name'];
    $img3 = $_FILES['img3']['name'];
    $img4 = $_FILES['img4']['name'];
    $img5 = $_FILES['img5']['name'];

    // Caminho para onde os arquivos serão enviados
    $upload_dir = '../uploads/';

    // Mover arquivos para o diretório de uploads
    move_uploaded_file($_FILES['app_logo']['tmp_name'], $upload_dir . $app_logo);
    move_uploaded_file($_FILES['app_file']['tmp_name'], $upload_dir . $app_file);
    move_uploaded_file($_FILES['img1']['tmp_name'], $upload_dir . $img1);
    move_uploaded_file($_FILES['img2']['tmp_name'], $upload_dir . $img2);
    move_uploaded_file($_FILES['img3']['tmp_name'], $upload_dir . $img3);
    move_uploaded_file($_FILES['img4']['tmp_name'], $upload_dir . $img4);
    move_uploaded_file($_FILES['img5']['tmp_name'], $upload_dir . $img5);

    // Preparar a consulta SQL
    $sql = "INSERT INTO aplicativos (user_id, app_name, app_logo, app_description, app_text, app_file, img1, img2, img3, img4, img5) VALUES ('$user_id', '$app_name', '$app_logo', '$app_description', '$app_text', '$app_file', '$img1', '$img2', '$img3', '$img4', '$img5')";

    // Executar a consulta
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = 'Aplicativo cadastrado com sucesso!';
        header("Location: index.php");
        exit;
    } else {
        $_SESSION['error_message'] = "Erro: " . $conn->error;
    }
}

// Consultar aplicativos cadastrados pelo usuário
$sql = "SELECT * FROM aplicativos WHERE user_id = '$user_id'";
$result = $conn->query($sql);
$currentDomain = "https://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) .  "/link.php?id=";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/ghostspy-_1_.webp">
    <title>GHOSTSPY</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
    body {
        background-color: #000;
        margin: 0;
        padding: 0;
        font-family: "Archivo", sans-serif;
        height: 100vh;
    }

    header {
        background-color: rgb(15, 21, 53);
        padding: 20px;
        text-align: center;
        position: relative;
    }

    header img {
        width: 150px;
    }

    .container {
        padding: 50px 0px
    }

    /* Botão de logout à direita */
    .logout-button {
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    /* Estilo das mensagens */
    .alert {
        max-width: 300px;
        margin: 10px auto;
        padding: 10px;
        font-size: 14px;
        display: none;
    }

    .alert-success,
    .alert-danger {
        text-align: center;
    }

    /* Centraliza o botão */
    .main-button {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .empty-app {
        width: 100%;
        color: #a7acb1;
        text-align: center
    }

    /* Estilo para as cartas de aplicativos */
    .card {
        width: 266px;
        border: 1px solid #564FEE;
        background-color: rgba(15, 21, 53, 0.49);
        color: white;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
        padding: 20px 15px
    }

    .card-title {
        color: #e6ecf0
    }

    .card-description {
        color: #a7acb1;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* number of lines to show */
        line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .btn-group {
        width: 100%;
        display: flex;
        justify-content: center;
        gap: 20px
    }

    .btn {
        background-color: #564FEE;
        border-radius: 5px !important;
        font-weight: 600;
        color: #fff;
    }

    .btn:hover {
        background-color: #5e57f7;
        color: #fff;
    }

    .delete-btn {
        background-color: red
    }

    .delete-btn:hover {
        background-color: red
    }

    .app-list {
        display: flex;
        flex-wrap: wrap;
        gap: 15px
    }

    /* Estilos do formulário */
    #appForm {
        display: none;
        color: white;
    }

    #appForm input,
    #appForm textarea {
        background-color: #1f234a;
        border: 1px solid rgb(255 255 255 / 15%);
        color: white;
        border-radius: 5px;
    }

    #appForm input[type="text"],
    #appForm textarea,
    #appForm input[type="file"] {
        padding: 10px;
        font-size: 16px;
        width: 100%;
        border-radius: 5px;
    }

    /* Campos menores */

    .image-group {
        display: flex;
        flex-wrap: wrap;
        gap: 15px
    }


    .form-group {
        flex: 1 1 30%;
        margin-bottom: 15px;
    }


    .form-group:last-child {
        margin-right: 0;
    }

    /* Modo mobile: cada campo em uma linha e maior */
    @media (max-width: 767px) {
        .form-group {
            width: 100%;
            margin-bottom: 15px;
        }

        /* Form ocupando toda a tela no mobile */
        #appForm {
            padding: 20px;
        }
    }

    .form-button {
        width: 100%;
        display: flex;
        justify-content: flex-end
    }

    /* Estilo do botão submit */
    button[type="submit"] {
        width: 250px;
    }
    </style>
</head>

<body>
    <header>
        <img src="../img/ghostspy-logo-_2_.webp" alt="Logo">
        <a href="../" class="btn logout-button">Logout</a> <!-- Redireciona para a página de login -->
    </header>

    <div class="container">
        <!-- Mensagem de link copiado -->
        <div id="success-message" class="alert alert-success">Ação Realizada com Sucesso</div>
        <div class="alert alert-success" id="success-message" style="display: none;">
            <?php if (isset($_SESSION['success_message'])): ?>
            <?php echo $_SESSION['success_message']; ?>
            <?php unset($_SESSION['success_message']); // Limpa a mensagem após exibi-la ?>
            <?php endif; ?>
        </div>
        <div class="alert alert-danger" id="error-message" style="display: none;">
            <?php if (isset($_SESSION['error_message'])): ?>
            <?php echo $_SESSION['error_message']; ?>
            <?php unset($_SESSION['error_message']); // Limpa a mensagem após exibi-la ?>
            <?php endif; ?>
        </div>

        <!-- Botão centralizado -->
        <div class="main-button">
            <button class="btn mb-4" onclick="toggleFormAndApps()">Novo Aplicativo</button>
        </div>

        <!-- Formulário -->
        <form action="index.php" method="post" enctype="multipart/form-data" id="appForm"
            onsubmit="return validateForm()">
            <div class="form-group">
                <label for="app_name">Nome do Aplicativo:</label>
                <input type="text" class="form-control" name="app_name" required>
            </div>
            <div class="form-group">
                <label for="app_logo">Logo do Aplicativo:</label>
                <input type="file" class="form-control-file" name="app_logo" required>
            </div>
            <div class="form-group">
                <label for="app_description">Descrição do Aplicativo:</label>
                <textarea class="form-control" name="app_description" required></textarea>
            </div>
            <div class="form-group">
                <label for="app_text">Comentário:</label>
                <textarea class="form-control" name="app_text" required></textarea>
            </div>
            <div class="form-group">
                <label for="app_file">Selecione o Aplicativo (APK):</label>
                <input type="file" class="form-control-file" name="app_file" accept=".apk" required>
            </div>

            <!-- Grupo de imagens -->
            <div class="image-group">
                <div class="form-group">
                    <label for="img1">Imagem 1:</label>
                    <input type="file" class="form-control-file" name="img1" required>
                </div>
                <div class="form-group">
                    <label for="img2">Imagem 2:</label>
                    <input type="file" class="form-control-file" name="img2" required>
                </div>
                <div class="form-group">
                    <label for="img3">Imagem 3:</label>
                    <input type="file" class="form-control-file" name="img3" required>
                </div>
                <div class="form-group">
                    <label for="img4">Imagem 4:</label>
                    <input type="file" class="form-control-file" name="img4" required>
                </div>
                <div class="form-group">
                    <label for="img5">Imagem 5:</label>
                    <input type="file" class="form-control-file" name="img5" required>
                </div>
            </div>
            <div class="form-button">
                <button type="submit" class="btn">Cadastrar Aplicativo</button>
            </div>
        </form>

        <!-- Lista de aplicativos cadastrados -->
        <div id="appsList" class="app-list">
            <?php
            if ($result->num_rows > 0) {
                while ($app = $result->fetch_assoc()) {
                    $link = $currentDomain . $app['id'];
                    // Construct the image source
                    $appLogoPath = "../uploads/" . htmlspecialchars($app['app_logo']);

                    echo "<div class='card mt-3'>";
                    echo "<div class='card-body'>";
                    echo "<img src='$appLogoPath' alt='app_image' style='margin-bottom: 10px ;width: 50px; height: 50px; border-radius: 50%; border:solid 2px #5e57f7'>"; 
                    echo "<div><h5 class='card-title'>" . htmlspecialchars($app['app_name']) . "</h5></div>";
                    echo "<div><p class='card-description'>" . htmlspecialchars($app['app_description']) . "</p></div>";
                    echo "<div class='btn-group'>";
                    echo "<a href='#' class='btn copy-btn' onclick=\"copyLink('$link')\">Gerar Link</a>";
                    echo "<a href='excluir.php?id=" . $app['id'] . "' class='btn delete-btn'>Excluir</a>";
                    echo "</div></div></div>";
                }
            } else {
                echo "<p class='empty-app'>Nenhum aplicativo cadastrado ainda.</p>";
            }
            ?>
        </div>
    </div>

    <script>
    function toggleFormAndApps() {
        var form = document.getElementById("appForm");
        var appsList = document.getElementById("appsList");
        // Verifica o estado atual do form e altera o display
        if (form.style.display === "none" || form.style.display === "") {
            form.style.display = "block"; // Exibe o formulário
            appsList.style.display = "none"; // Esconde a lista de apps
        } else {
            form.style.display = "none"; // Esconde o formulário
            appsList.style.display = "flex"; // Exibe a lista de apps
        }
    }
    document.addEventListener("DOMContentLoaded", function() {
        var successMessage = document.getElementById("success-message");
        var errorMessage = document.getElementById("error-message");

        // Exibir mensagem de sucesso se existir
        if (successMessage.innerHTML.trim() !== "") {
            successMessage.style.display = "block";
            setTimeout(function() {
                successMessage.style.display = "none";
            }, 2000);
        }

        // Exibir mensagem de erro se existir
        if (errorMessage.innerHTML.trim() !== "") {
            errorMessage.style.display = "block";
            setTimeout(function() {
                errorMessage.style.display = "none";
            }, 2000);
        }
    });


    function copyLink(link) {
        var tempInput = document.createElement("input");
        tempInput.value = link;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);

        var successDiv = document.getElementById("success-message");
        successDiv.style.display = "block";
        setTimeout(function() {
            successDiv.style.display = "none";
        }, 2000);
    }



    // Validação para aceitar somente arquivos APK
    function validateForm() {
        var apkFile = document.querySelector('input[name="app_file"]').files[0];
        if (apkFile && apkFile.type !== "application/vnd.android.package-archive") {
            alert("Por favor, selecione um arquivo APK válido.");
            return false;
        }
        return true;
    }
    </script>
</body>

</html>