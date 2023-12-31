<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/quemsomos.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/funcoes.js"></script>
    <title>Quem somos</title>
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
            <img src="../img/lupa.png" alt="" class="lupa"> <p class="link">Rastreamento</p>
        </div></a> 

        <a href="../html/quemsomos.php"><div class="itens-menu">
            <img src="../img/pessoa.png" alt="" class="pessoa"> <p class="link pag-atual">Quem somos</p>
        </div></a>
    </div>

    <img class="quemsomos_banner" src="../img/quemsomos-banner.png" alt="">

    <p class="titu">O que é Logistica</p>

    <div class="desc">A logística é uma área fundamental que envolve o planejamento, execução e 
        gerenciamento eficiente de todas as etapas do fluxo de produtos, desde a origem até o destino, com o 
        objetivo de atender às necessidades dos clientes da maneira mais eficaz e econômica possível. </div>

    <p class="titu">Quem é Mão na Roda</p>
    <div class="desc">É uma empresa de logística inovadora, dedicada a oferecer soluções de transporte e 
        gerenciamento de cadeia de suprimentos excepcionais para empresas de todos os tamanhos e setores. 
        Fundada com a visão de simplificar e otimizar o fluxo de mercadorias em escala global, somos apaixonados 
        por enfrentar desafios logísticos complexos e transformá-los em oportunidades de sucesso para nossos clientes.</div>

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
