<?php
include_once('../conexaoRastreio.php'); 

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_produto = $_POST["nome-produto"];
    $numero_produto = $_POST["codigo"];

    if(isset($_POST["excluir_produto"])) {
        $id_produto_excluir = $_POST["excluir_produto"];

        // Excluir o produto do banco de dados
        $sql_delete = "DELETE FROM produtos WHERE id = $id_produto_excluir";

        if ($mysqli->query($sql_delete) === TRUE) {
            header("Location: rastreamento.php");
            exit();
        } else {
            echo "Erro ao excluir produto: " . $mysqli->error;
        }
    }

    // Verificar se o botão de atualização foi pressionado
    if(isset($_POST["atualizar_produto"])) {
        $id_produto_atualizar = $_POST["atualizar_produto"];
        $novo_nome_produto = $_POST["novo_nome_produto"];

        // Atualizar o nome do produto no banco de dados
        $sql_update = "UPDATE produtos SET nome = '$novo_nome_produto' WHERE id = $id_produto_atualizar";

        if ($mysqli->query($sql_update) === TRUE) {
            header("Location: rastreamento.php");
            exit();
        } else {
            echo "Erro ao atualizar nome do produto: " . $mysqli->error;
        }
    }

    // Inserir novo produto no banco de dados
    $sql = "INSERT INTO produtos (nome, codigo) VALUES ('$nome_produto', $numero_produto)";

    if ($mysqli->query($sql) === TRUE) {
        header("Location: rastreamento.php");
        exit();
    } else {
        echo "Erro ao adicionar produto: " . $mysqli->error;
    }
}

// Selecionar produtos do banco de dados
$sql_select = "SELECT * FROM produtos";
$result = $mysqli->query($sql_select);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/rastreamento.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/funcoes.js"></script>
    <title>Rastreamento</title>
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

        <a href="../html/login.php"> <div class="login-link"><img class="login" src="../img/user.png" alt=""><p class="login-palavra">Login</p></div></a>    </header>

    <div class="menu">
        <a href="../html/seguros.php"><div class="itens-menu">
            <img src="../img/cadeado.png" alt="" class="cadeado"> <p class="link">Seguros</p>
        </div></a>

        <a href="../html/fretes.php"><div class="itens-menu">
            <img src="../img/aviao.png" alt="" class="aviao"> <p class="link">Fretes</p>
        </div></a>

        <a href="../html/rastreamento.php"><div class="itens-menu">
            <img src="../img/lupa.png" alt="" class="lupa"> <p class="link pag-atual">Rastreamento</p>
        </div></a> 

        <a href="../html/quemsomos.php"><div class="itens-menu">
            <img src="../img/pessoa.png" alt="" class="pessoa"> <p class="link">Quem somos</p>
        </div></a>
    </div>

    <!-- <p class="titulo-pag">Rastreamento de encomendas</p> -->
    
    <div class="raster-box">
        <h2 class="titulo">Quer encontrar seu pedido?</h2>
        <br>
        <form action="rastreamento.php" method="post">
            <div>
                <label class="label-nome" for="nome-produto">Nome</label>
                <input type="text" id="nome-produto" name="nome-produto" placeholder="Adicione o nome do produto:" required>

                <label class="label-cod" for="codigo">Código</label>
                <input type="text" id="codigo" name="codigo" placeholder="Adicione o código do produto:" required>
            </div>

            <input class="rastrear-pedido" type="submit" value="Rastrear pedido">

        </form>
        <div class="lista-produtos">
            <h2 class="titulo">Lista de Produtos</h2>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='produto'>";
                    echo "<div class='pronum'>";
                    echo "<strong>Produto:</strong> " . $row["nome"] . "<br>";
                    echo "<p class='spamando'>Número:</p> " . $row["codigo"];
                    echo "</div>";

                    // Adicionar botão Atualizar
                    echo "<form action='rastreamento.php' method='post' class='atualizar-form'>";
                    echo "<input type='hidden' name='atualizar_produto' value='" . $row["id"] . "'>";
                    echo "<input class='input-atualizacao' type='text' name='novo_nome_produto' placeholder='Novo nome' required>";
                    echo "<input class='btn-acao' type='submit' value='Atualizar Nome'>";
                    echo "</form>";

                    // Adicionar botão Excluir
                    echo "<form action='rastreamento.php' method='post' class='excluir-form'>";
                    echo "<input type='hidden' name='excluir_produto' value='" . $row["id"] . "'>";
                    echo "<input class='btn-acao' type='submit' value='Excluir'>";
                    echo "</form>";
                    

                    echo "<p class='fakeAlert'>Produto não encontrado :(</p>";

                    echo "</div>";
                }
            } else {
                echo "Nenhum produto encontrado.";
            }
            ?>
        </div>
    </div>

<!--<label class="label-local" for="localizacao">Localização</label>
    <textarea name="localizacao" id="localizacao" placeholder="Seu produto está em:"></textarea> -->


    <a href="../index.php"><footer>
        <div class="logofoot">
            <img class="logo-img-footer" src="../img/logo-preta.png" alt="">
            <p class="nome-empresa-footer">Mão na Roda</p>
        </div>

        <p class="cop">©2023 - 2030 - Mão na Roda</p>
        <p class="cnpj">Serviços da Mão na Roda Brasil - CNPJ 24.123.123/01.123.561</p>
    </footer></a>

</body>
</html>