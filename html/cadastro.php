<?php
// Inclua a conexão ao banco de dados
include_once('../conexao.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se as variáveis do formulário estão definidas
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Recupera os dados do formulário
        $usuario = $_POST['username'];
        $senha = $_POST['password'];

        // Instrução preparada para evitar SQL injection
        $sql = $mysqli->prepare("INSERT INTO cadastro (username, user_password) VALUES (?, ?)");
        $sql->bind_param("ss", $usuario, $senha);

        if ($sql->execute()) {
            header('location: ../index.php?');
            exit();
        } else {
            echo "Erro ao cadastrar: " . $sql->error;
        }

        $sql->close();
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
}

$mysqli->close();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/funcoes.js"></script>
    <title>Cadastro</title>
</head>
<body>

    <header>
        <a href="../index.php"><div class="logo">
        <img class="logo-img" src="../img/logo.png" alt=""> 
        </div></a>

        <div class="div-pesquisa">
            <input class="pesquisa" type="search" id="busca" name="busca">
            <button onclick="redirect()" class="btn-pesquisa" type="submit">Buscar</button>
        </div>
        
        <a href="../html/login.php"> <div class="login-link"><img class="login" src="../img/user.png" alt=""><p class="login-palavra" id="login_palavra">Login</p></div></a>
    </header>

    <div class="menu">
        <a href="../html/seguros.php"><div class="itens-menu">
            <img src="../img/cadeado.png" alt="" class="cadeado"> <p class="link">Seguros</p>
        </div></a>

        <a href="../html/fretes.php"><div class="itens-menu">
            <img src="../img/aviao.png" alt="" class="aviao"> <p class="link">Fretes</p>
        </div></a>

        <a href="../html/rastreamento.php"><div class="itens-menu">
            <img src="../img/lupa.png" alt="" class="lupa"> <p class="link">Rastreamento</p>
        </div></a> 

        <a href="../html/quemsomos.php"><div class="itens-menu">
            <img src="../img/pessoa.png" alt="" class="pessoa"> <p class="link">Quem somos</p>
        </div></a>
    </div>

    <div class="titulo-cadastro">
        <h3>Novo por aqui?</h3>
    </div>

    <div class="login-box">
        <h2 class="welcome">Boas Vindas!</h2>
        <br>
        <form action="cadastro.php" method="post">
            <label for="username">Usuário</label>
            <input type="text" id="username" name="username" placeholder="Adicione seu nome" required>

            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Adicione sua senha" required>

            <!-- <label for="password-confirm">Confirmar Senha</label> -->
            <!-- <input type="password" name="password-confirm" id="password-confirm" placeholder="Confirme sua senha" required> -->
        
            <input class="login-check" type="submit" value="Cadastre-se">

        </form>
    </div>
</body>
</html>