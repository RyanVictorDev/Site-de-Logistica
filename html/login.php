<?php
include_once('../conexao.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $usuario = $_POST['username'];
        $senha = $_POST['password'];

        // Verificar no banco de dados se o usuário e senha são válidos
        $sql = "SELECT * FROM cadastro WHERE username = ? AND user_password = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss", $usuario, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // Login bem-sucedido
            header('location: ../index.php');
            exit();
        } else {
            echo '<script>alert("Usuário ou senha incorretos. Tente novamente.");</script>';
        }

        $stmt->close();
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
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/funcoes.js"></script>
    <title>Login</title>
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
        
        <a href="../html/login.php"> <div class="login-link"><img class="login" src="../img/user.png" alt=""><p class="login-palavra">Login</p></div></a>    
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
        <h3>Que felicidade vê-lo novamente!</h3>
    </div>

    <div class="login-box">
        <h2 class="welcome">Bem Vindo(a) devolta!</h2>
        <br>
        <form action="login.php" method="post">
            <label for="username">Usuário</label>
            <input type="text" id="username" name="username" placeholder="Adicione seu usuário" required>

            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Adicione sua senha" required>
            

            <input class="login-check" type="submit" value="Log-in">


        </form>

        <div class="login-links">
            <!-- <a href="#">Esqueci a Senha</a> -->
            <a href="../html/cadastro.php">Cadastre-se</a>
        </div>
    </div>



    <!-- <a href="../index.php"><footer>
        <div class="logofoot">
            <img class="logo-img-footer" src="../img/logo-preta.png" alt="">
            <p class="nome-empresa-footer">Mão na Roda</p>
        </div>

        <p class="cop">©2023 - 2030 - Mão na Roda</p>
        <p class="cnpj">Serviços da Mão na Roda Brasil - CNPJ 24.123.123/01.123.561</p>
    </footer></a> -->

</body>
</html>