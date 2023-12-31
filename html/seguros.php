<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/seguros.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/funcoes.js"></script>
    <title>Seguros</title>
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
        <a href="../html/seguros.php">
            <div class="itens-menu">
                <img src="../img/cadeado.png" alt="" class="cadeado">
                <p class="link pag-atual">Seguros</p>
            </div>
        </a>

        <a href="../html/fretes.php">
            <div class="itens-menu">
                <img src="../img/aviao.png" alt="" class="aviao">
                <p class="link">Fretes</p>
            </div>
        </a>

        <a href="../html/rastreamento.php">
            <div class="itens-menu">
                <img src="../img/lupa.png" alt="" class="lupa">
                <p class="link">Rastreamento</p>
            </div>
        </a>

        <a href="../html/quemsomos.php">
            <div class="itens-menu">
                <img src="../img/pessoa.png" alt="" class="pessoa">
                <p class="link">Quem somos</p>
            </div>
        </a>
    </div>

    <img class="seguros_banner" src="../img/Seguros-banner.png" alt="">

    <p class="planos">Nossos Planos</p>

    <div class="sessoes-servicos">
        <div class="lado-esquerdo text-1">
            <div class="ali-text">
                <h1>Seguros de Encomendas</h1><p class="text-sessoes">
                    O serviço de seguros de encomendas da "Mão na Roda" é uma escolha confiável 
                    para aqueles que buscam proteção abrangente durante o transporte de mercadorias. 
                    Uma das principais vantagens é a personalização das opções de cobertura, permitindo que os 
                    clientes ajustem seus planos de acordo com o valor e a natureza específica de suas mercadorias. 
                    A empresa valoriza a simplicidade no processo de contratação, tornando acessível a oferta de um 
                    seguro que atende às necessidades individuais.</p>
            </div>
        </div>

        <div class="lado-direito img-1">
            <img class="img-sessoes" src="../img/retrato-de-entregador-distribuindo-encomendas-removebg-preview.png" alt="">
        </div>
    </div>

    <div class="sessoes-servicos">
        <div class="lado-esquerdo img-2">
            <img class="img-sessoes" src="../img/seguros-retrato.png" alt="">
        </div>

        <div class="lado-direito text-2">
            <div class="ali-text">
                <h1>Seguros de Veículos</h1><p class="text-sessoes">O serviço de seguros de veículos da "Mão na Roda" oferece uma série de vantagens que destacam a empresa no mercado. 
                    Em primeiro lugar, a flexibilidade nas opções de cobertura permite aos clientes personalizar seus planos de acordo 
                    com as necessidades específicas de seus veículos e orçamentos. A "Mão na Roda" prioriza a agilidade no processo de 
                    sinistro, proporcionando uma resposta rápida e eficiente em momentos críticos. Além disso, a empresa mantém uma rede 
                    de escritórios comprometidos e parceiros confiáveis, 
                    garantindo reparos de qualidade em caso de acidentes.</p>
            </div>
        </div>
    </div>


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