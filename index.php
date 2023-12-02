<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <script src="./js/funcoes.js"></script>
    <title>HomePage</title>
</head>
<body>

    <header>
        <a href="./index.php"><div class="logo">
        <img class="logo-img" src="./img/logo.png" alt=""> 
        </div></a>

        <div class="div-pesquisa">
            <input class="pesquisa" type="search" id="busca" name="busca">
            <button onclick="redirect()" class="btn-pesquisa" type="submit">Buscar</button>
        </div>

        <a href="./html/login.php"> <div class="login-link"><img class="login" src="./img/user.png" alt=""><p class="login-palavra">Login</p></div></a>
    </header>

    <div class="menu">
        <a href="./html/seguros.php"><div class="itens-menu">
            <img src="./img/cadeado.png" alt="" class="cadeado"> <p class="link">Seguros</p>
        </div></a>

        <a href="./html/fretes.php"><div class="itens-menu">
            <img src="./img/aviao.png" alt="" class="aviao"> <p class="link">Fretes</p>
        </div></a>

        <a href="./html/rastreamento.php"><div class="itens-menu">
            <img src="./img/lupa.png" alt="" class="lupa"> <p class="link">Rastreamento</p>
        </div></a> 

        <a href="./html/quemsomos.php"><div class="itens-menu">
            <img src="./img/pessoa.png" alt="" class="pessoa"> <p class="link">Quem somos</p>
        </div></a>
    </div>

    <img class="index_banner" src="./img/index_banner.png" alt="">

    <p class="veja-servicos">Veja Nossos Serviços</p>

    <div class="wrap">
        <div class="servicos-desc"><div class="op-servicos"><a href="./html/seguros.php"><img class="imagem-servicos" src="./img/cadeado-png.png" alt=""></a></div><h1>Seguros</h1></div>
        <div class="servicos-desc"><div class="op-servicos"><a href="./html/fretes.php"> <img class="imagem-servicos" src="./img/caixa-png.png" alt=""></a> </div><h1>Fretes</h1></div>
        <div class="servicos-desc"><div class="op-servicos"> <a href="./html/rastreamento.php"><img class="imagem-servicos" src="./img/lupa-png.png" alt=""></a></div><h1>Rastreamento</h1></div>
    </div>

    <div class="traco"></div>

    <div class="sessoes-servicos">
        <div class="lado-esquerdo text-1">
            <div class="ali-text">
                <h1>Seguros</h1><p class="text-sessoes">A empresa de logística Mão na Roda destaca-se por oferecer serviços abrangentes, incluindo seguro de encomendas,
                    garantindo a segurança e tranquilidade dos clientes no transporte de mercadorias.
                    Em parceria com seguros renomados, a empresa fornece cobertura sólida contra roubo,
                    danos e extravios, adaptada às necessidades individuais de cada cliente.
                    A equipe especializada fornece informações transparentes e orientação personalizada,
                    reforçando o compromisso da "Mão na Roda" com a excelência e satisfação do cliente,
                    oferecendo eficiência logística e proteção financeira.</p>
            </div>
        </div>

        <div class="lado-direito img-1">
            <img class="img-sessoes" src="./img/seguros-figura.png" alt="">
        </div>
    </div>

    <div class="sessoes-servicos">
        <div class="lado-esquerdo img-2">
            <img class="img-sessoes" src="./img/fretes-figura.png" alt="">
        </div>

        <div class="lado-direito text-2">
            <div class="ali-text">
                <h1>Fretes</h1><p class="text-sessoes">A empresa de logística Mão na Roda se destaca por sua abordagem abrangente no transporte de mercadorias, 
                    oferecendo serviços de frete que combinam eficiência e confiabilidade. 
                    Com opções de fretes adaptadas às necessidades específicas de cada cliente, 
                    a empresa garante entregas pontuais e seguras. 
                    A "Mão na Roda" prioriza parcerias estratégicas para otimização de rotas e redução de custos, 
                    garantindo eficácia nos serviços de transporte. A equipe dedicada fornece informações transparentes, 
                    destacando-se pelo compromisso com a satisfação do cliente e pela excelência no gerenciamento de fretes, 
                    consolidando a confiança da empresa como líder no setor logístico.</p>
            </div>
        </div>
    </div>

    <div class="sessoes-servicos">
        <div class="lado-esquerdo text-3">
            <div class="ali-text">
                <h1>Rastreamento</h1><p class="text-sessoes">
                    A Mão na Roda se destaca no cenário logístico ao oferecer um serviço de rastreamento de 
                    produtos que proporciona aos clientes total visibilidade e controle sobre suas mercadorias durante todo o 
                    processo de transporte. A empresa investe em tecnologia de ponta para garantir um sistema de rastreamento 
                    preciso e em tempo real, permitindo que os clientes acompanhem o status de suas encomendas de maneira eficiente. 
                    Com uma abordagem centrada no cliente, o "Mão na Roda" oferece transparência e confiabilidade, 
                    garantindo que os clientes estejam sempre informados sobre a localização e o progresso de suas mercadorias. 
                    Esse compromisso com o rastreamento eficaz reforça a confiança da empresa como líder em fornecer uma 
                    experiência logística segura e transparente.</p>
            </div>
        </div>

        <div class="lado-direito img-3">
            <img class="img-sessoes" src="./img/rastreamento-figura.png" alt="">
        </div>
    </div>

    <footer>
        <div class="logofoot">
            <img class="logo-img-footer" src="./img/logo-preta.png" alt="">
            <p class="nome-empresa-footer">Mão na Roda</p>
        </div>

        <p class="cop">©2023 - 2030 - Mão na Roda</p>
        <p class="cnpj">Serviços da Mão na Roda Brasil - CNPJ 24.123.123/01.123.561</p>
    </footer>
 
</body>
</html> 