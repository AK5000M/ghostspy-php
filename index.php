<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GHOSTSPY</title>
    <link rel="icon" href="img/ghostspy-_1_.webp">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Bebas+Neue&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Staatliches&family=Teko:wght@300..700&display=swap"
        rel="stylesheet" />

    <link
        href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Archivo:ital,wght@0,100..900;1,100..900&family=Bebas+Neue&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Staatliches&family=Teko:wght@300..700&display=swap"
        rel="stylesheet">
    </link>

    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Archivo", sans-serif;
        background-image:
            linear-gradient(rgb(29 29 195 / 78%), rgb(19 19 20 / 81%)),
            url("img/6020105.webp");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .css-nyx47w {
        display: flex;
        justify-content: space-between;
        background-color: #0f1536;
        border-radius: 5px;
        border: 1px solid rgb(86, 79, 238);
        height: 650px;
        width: 60%;
        max-width: 850px;
        overflow: hidden;
    }

    @media (min-width: 0px) {
        .css-nyx47w {
            flex-direction: column;
            align-items: center;
        }
    }

    @media (min-width: 900px) {
        .css-nyx47w {
            flex-direction: row;
            align-items: center;
        }
    }

    .box-left {
        flex: 1;
        height: 100%;
        padding: 0;
        overflow: hidden;
    }

    .box-left video {
        width: 100%;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .box-right {
        flex: 1;
        background-color: #0f15357d;
        border-radius: 0 5px 5px 0;
        text-align: center;
        color: white;
    }

    .box-right img {
        margin-bottom: 20px;
        width: 180px;
    }

    .box-right h4 {
        margin-top: 20px;
        margin-bottom: 20px;
        font-family: "Anton SC", sans-serif
    }

    .input-container {
        position: relative;
        width: 100%;
        margin-top: 20px;

    }

    .input-form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    .input-board {
        width: 100%;
    }

    .box-right input {
        width: 100%;
        /* Largura total do contêiner */
        padding: 12px;
        background-color: transparent;
        color: white;
        border: 1px solid white;
        border-radius: 5px;
        font-size: 16px;
        transition: padding 0.3s ease;
    }

    /* Para os placeholders */
    .box-right input::placeholder {
        color: #a7acb1;
        /* Torna o texto do placeholder invisível */
    }

    /* Efeito de label flutuante */
    .input-container label {
        position: absolute;
        top: 20px;
        /* Mantenha o label dentro do input */
        left: 10px;
        color: #ddd;
        pointer-events: none;
        /* O label não deve capturar cliques */
        transition: all 0.3s ease;
        font-size: 16px;
        /* Tamanho do label */
    }

    /* Quando o input está em foco ou preenchido */
    .box-right input:focus+label,
    .box-right input:not(:placeholder-shown)+label {
        top: 0px;
        /* Move o label para cima */
        left: 10px;
        font-size: 12px;
        /* Tamanho do label quando em foco */
        color: #6c63ff;
        /* Cor do label quando em foco */
    }

    .box-right .forgot-password {
        text-align: right;
        color: #6c63ff;
        font-size: 14px;
        margin-top: 5px;
    }

    .box-right button {
        width: 80%;
        /* Ajuste a largura do botão */
        padding: 15px;
        background-color: #564FEE;
        border: none;
        color: white;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        margin-top: 20px;
        transition: background-color 0.3s ease;
        padding: 10px;
        /* Efeito de transição para o botão */
    }

    .box-right button:hover {
        background-color: #5e57f7;
        /* Efeito de hover */
    }

    .box-right a {
        color: #ddd;
        text-decoration: none;
        display: block;
        margin-top: 10px;
    }

    .form-container {
        padding-right: 20px;
        padding-left: 20px;
        display: none;
        /* Inicialmente oculto */
    }

    .form-active {
        display: block;
        /* Mostra o formulário ativo */
    }

    .error {
        border: 1px solid red;
        /* Borda vermelha para erros */
    }

    .error-message {
        display: none;
        /* Esconde as mensagens de erro por padrão */
        color: red;
        /* Cor das mensagens de erro */
        font-size: 12px;
        /* Tamanho da fonte das mensagens de erro */
        margin-top: 5px;
        /* Espaço entre o input e a mensagem de erro */
        text-align: left
    }

    #show-register-form {
        margin-top: 20px
    }

    @media (max-width: 768px) {
        .box-left {
            display: none;
        }

        .box-right {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
        }
    }

    @media (max-width: 480px) {

        .box-right input,
        .box-right button {
            font-size: 14px;
        }
    }

    .message-container {
        margin: 10px 0;
        padding: 10px;
        border-radius: 5px;
    }

    .success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
    </style>
</head>

<body>
    <div class="css-nyx47w">
        <div class="box-left">
            <video autoplay loop muted>
                <source src="img/video_ghostspy.mp4" type="video/mp4">
                Seu navegador não suporta a tag de vídeo.
            </video>
        </div>

        <div class="box-right">
            <img src="img/ghostspy-logo-_2_.webp" alt="Logo do GHOSTSPY">

            <div id="login-form" class="form-container form-active">
                <div id="responseMessage1">
                    <?php
                    if (isset($_SESSION['error_message'])) {
                        echo htmlspecialchars($_SESSION['error_message']);
                        unset($_SESSION['error_message']); // Limpa a mensagem após exibi-la
                    }
                    ?>
                </div>
                <div id="responseMessage1"></div>
                <h4>ENTRAR NO GHOSTSPY</h4>
                <form id="form-login" class="input-form">
                    <div class="input-board">
                        <div class="input-container">
                            <input type="email" id="email" placeholder="E-mail">
                            <div class="error-message" id="email-error">Email inválido</div>
                        </div>
                        <div class="input-container">
                            <input type="password" id="senha" placeholder="Senha">
                            <div class="error-message" id="senha-error">Por favor preencha este campo</div>
                        </div>
                    </div>

                    <button type="submit">Verificar Login</button>
                </form>
                <a href="#" id="show-register-form">Registrar</a>
            </div>

            <div id="register-form" class="form-container">
                <div id="responseMessage"></div>
                <h4>Cadastrar no GHOSTSPY</h4>
                <form id="form-register">
                    <div class="input-container">
                        <input type="text" id="usuario" placeholder="Usuário ">
                        <div class="error-message" id="usuario-error">Por favor preencha este campo</div>
                    </div>
                    <div class="input-container">
                        <input type="email" id="email-register" placeholder="E-mail">
                        <div class="error-message" id="email-register-error">Email inválido</div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="senha-register" placeholder="Senha">
                        <div class="error-message" id="senha-register-error">Por favor preencha este campo</div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="senha-repetir" placeholder="Repetir Senha">
                        <div class="error-message" id="senha-repetir-error">As senhas não conferem</div>
                    </div>
                    <button type="submit">Cadastrar</button>
                </form>
                <a href="#" id="show-login-form">Voltar ao Login</a>
            </div>
        </div>
    </div>


    <script>
    const loginForm = document.getElementById("login-form");
    const registerForm = document.getElementById("register-form");
    const showRegisterForm = document.getElementById("show-register-form");
    const showLoginForm = document.getElementById("show-login-form");

    showRegisterForm.addEventListener("click", function(e) {
        e.preventDefault();
        loginForm.classList.remove("form-active");
        registerForm.classList.add("form-active");
    });

    showLoginForm.addEventListener("click", function(e) {
        e.preventDefault();
        registerForm.classList.remove("form-active");
        loginForm.classList.add("form-active");
    });

    function validateLoginForm() {
        let isValid = true;
        document.querySelectorAll('.error-message').forEach(msg => {
            msg.style.display = 'none';
        });
        document.querySelectorAll('input').forEach(input => {
            input.classList.remove('error');
        });

        const email = document.getElementById('email');

        if (!email.value) {
            email.classList.add('error');
            document.getElementById('email-error').style.display = 'block';
            isValid = false;
        }

        const senha = document.getElementById('senha');
        if (!senha.value) {
            senha.classList.add('error');
            document.getElementById('senha-error').style.display = 'block';
            isValid = false;
        }

        return isValid;
    }


    document.getElementById("form-login").addEventListener("submit", function(e) {
        e.preventDefault(); // Impede o envio padrão do formulário

        // Limpa mensagens anteriores
        const messageDiv = document.getElementById('responseMessage1');
        messageDiv.innerHTML = '';

        if (validateLoginForm()) { // Valida o formulário
            const email = document.getElementById('email').value; // Obtém o e-mail
            const senha = document.getElementById('senha').value; // Obtém a senha

            fetch('login.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json' // Define o tipo de conteúdo
                    },
                    body: JSON.stringify({
                        email,
                        senha
                    }) // Envia os dados como JSON
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Erro na resposta do servidor');
                    }
                    return response.json(); // Converte a resposta para JSON
                })
                .then(data => {
                    console.log('Data:', data); // Para depuração

                    const responseMessage = document.getElementById('responseMessage1');
                    if (data.success) {
                        if (data.redirectUrl) {
                            window.location.href = data
                                .redirectUrl; // Redireciona conforme o nível de acesso
                        }
                        responseMessage.innerHTML = '<p style="color: green;">' + data.message + '</p>';
                    } else {
                        responseMessage.innerHTML = '<p style="color: red;">' + data.message + '</p>';
                    }
                })
                .catch(error => {
                    console.error('Erro:', error);
                    const responseMessage = document.getElementById('responseMessage1');
                    responseMessage.innerHTML =
                        '<p style="color: red;">Erro: Falha na requisição</p>'; // Exibe uma mensagem de erro geral
                });
        }
    });




    function validateRegisterForm() {
        let isValid = true;
        document.querySelectorAll('.error-message').forEach(msg => {
            msg.style.display = 'none';
        });
        document.querySelectorAll('input').forEach(input => {
            input.classList.remove('error');
        });

        const usuario = document.getElementById('usuario');
        if (!usuario.value) {
            usuario.classList.add('error');
            document.getElementById('usuario-error').style.display = 'block';
            isValid = false;
        }

        const emailRegister = document.getElementById('email-register');
        if (!emailRegister.value || !validateEmail(emailRegister.value)) {
            emailRegister.classList.add('error');
            document.getElementById('email-register-error').style.display = 'block';
            isValid = false;
        }

        const senhaRegister = document.getElementById('senha-register');
        const senhaRepetir = document.getElementById('senha-repetir');
        if (!senhaRegister.value) {
            senhaRegister.classList.add('error');
            document.getElementById('senha-register-error').style.display = 'block';
            isValid = false;
        }

        if (senhaRegister.value !== senhaRepetir.value) {
            senhaRepetir.classList.add('error');
            document.getElementById('senha-repetir-error').style.display = 'block';
            isValid = false;
        }

        return isValid;
    }

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }

    document.getElementById("form-register").addEventListener("submit", function(e) {
        e.preventDefault();

        if (validateRegisterForm()) {
            const usuario = document.getElementById('usuario').value;
            const email = document.getElementById('email-register').value;
            const senha = document.getElementById('senha-register').value;

            fetch('cadastrar.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        usuario,
                        email,
                        senha
                    })
                })
                .then(response => response.json())
                .then(data => {
                    const responseMessage = document.getElementById('responseMessage');
                    if (data.success) {
                        responseMessage.innerHTML = '<p style="color: green;">' + data.message + '</p>';
                        registerForm.classList.remove("form-active");
                        loginForm.classList.add("form-active");
                        document.getElementById("form-register").reset();
                    } else {
                        responseMessage.innerHTML = '<p style="color: red;"> ' + data.message + '</p>';
                    }
                })
                .catch(error => {
                    console.error('Erro:', error);
                    const responseMessage = document.getElementById('responseMessage');
                    responseMessage.innerHTML =
                        '<p style="color: red;">Erro: Falha na requisição</p>'; // Display a general error message
                });

        }
    });
    </script>
</body>

</html>