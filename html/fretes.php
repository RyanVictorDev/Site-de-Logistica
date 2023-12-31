<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fretes.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/funcoes.js"></script>
    <title>Fretes</title>
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
            <img src="../img/aviao.png" alt="" class="aviao"> <p class="link pag-atual">Fretes</p>
        </div></a>

        <a href="../html/rastreamento.php"><div class="itens-menu">
            <img src="../img/lupa.png" alt="" class="lupa"> <p class="link">Rastreamento</p>
        </div></a> 

        <a href="../html/quemsomos.php"><div class="itens-menu">
            <img src="../img/pessoa.png" alt="" class="pessoa"> <p class="link">Quem somos</p>
        </div></a>
    </div>
    
    <img src="../img/fretes-banner.png" alt="" class="fretes_banner">

    
    <p class="planos">Nossos Planos</p>

    <div class="sessoes-servicos">
        <div class="lado-esquerdo text-1">
            <div class="ali-text">
                <h1>Frete comum</h1><p class="text-sessoes">O serviço de frete desempenha um papel crucial na 
                    facilitação do comércio, proporcionando conveniência aos consumidores e permitindo que empresas 
                    alcancem mercados distantes. Além da praticidade de receber produtos no conforto do lar, 
                    a expansão geográfica viabilizada pelo transporte de mercadorias impulsiona o crescimento 
                    econômico e fortalece os laços comerciais. A segurança nas operações de frete, com medidas 
                    rigorosas para preservar a integridade das mercadorias, adiciona um elemento essencial de confiança, 
                    essencial para a prosperidade do comércio moderno.</p>
            </div>
        </div>

        <div class="lado-direito img-1">
            <img class="img-sessoes" src="../img/frete-comum.png" alt="">
        </div>
    </div>

    <div class="sessoes-servicos">
        <div class="lado-esquerdo img-2">
            <img class="img-sessoes" src="../img/frete-express.png" alt="">
        </div>

        <div class="lado-direito text-2">
            <div class="ali-text">
                <h1>Frete Express</h1><p class="text-sessoes">O serviço de frete express agrega ainda mais valor
                    ao comércio, proporcionando uma entrega rápida e eficiente de produtos. 
                    A agilidade no transporte não apenas atende às expectativas crescentes dos consumidores 
                    por entregas rápidas, mas também possibilita uma resposta mais ágil às demandas do mercado. 
                    Empresas que oferecem frete express destacam-se pela sua capacidade de atender prontamente às 
                    necessidades dos clientes, contribuindo para uma experiência de compra mais satisfatória. 
                    Essa modalidade de frete não apenas otimiza a logística, mas também desempenha um papel vital 
                    na era do comércio eletrônico, onde a rapidez na entrega é muitas vezes um diferencial decisivo.</p>
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