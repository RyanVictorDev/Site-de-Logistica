<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/rastreamento.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Rastreamento</title>
</head>
<body>

    <header>
        <a href="../index.php"><div class="logo">
        <img class="logo-img" src="../img/logo.png" alt=""> 
        </div></a>
        
        <div class="div-pesquisa">
            <input class="pesquisa" type="search" id="busca" name="busca">
            <button class="btn-pesquisa" type="submit">Buscar</button>
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
        <form action="" method="post">
            <div>
                <label class="label-nome" for="nome-produto">Nome</label>
                <input type="text" id="nome-produto" name="nome-produto" placeholder="Adicione o nome do produto:" required>

                <label class="label-cod" for="codigo">Código</label>
                <input type="text" id="codigo" name="codigo" placeholder="Adicione o código do produto:" required>
            </div>

            <input class="rastrear-pedido" type="submit" value="Rastrear pedido">

        </form>
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