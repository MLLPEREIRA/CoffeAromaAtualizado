<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MÁQUINA DE CAFÉ GC-1 - CAFÉ&AROMA</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="../../image/miniatura.png" type="image/x-icon">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../produto.css">
    
</head>
<body>
    <header>
        <ul class="ul">
            <li class="li"><i id="menu" class="material-icons" onclick="clickMenu()" style="color: var(--cor2); font-size: 25px;">menu</i></li>
            <li class="li"><a href="#" id="link">HOME</a></li>
            <li class="li"><a href="#" id="link">CARRINHO</a></li>
        </ul>
        <menu></menu>
        <div class="botao">
            <a href="../../cadastro/cadastro.html" id="criar">Crie uma conta</a>
            <a href="../../login/login.html" id="logar">Login</a>
        </div>
        <div id="logoshop">
            <a href="teste-shop.html"><img src="../../image/logos/logo-shop.png" width="160" height="65" id="imglogoshop"></a>
        </div>
    </header>
    <div class="menuloja">
        <p class="menushop"><a href="" class="linkshop" id="link">Pó de café</a><a href="" class="linkshop" id="link">Grãos</a><a href="" class="linkshop" id="link">Cápsulas</a><a href="" class="linkshop" id="link">Máquinas</a><a href="" class="linkshop" id="link">Personalização</a><a href="" class="linkshop" id="link">Cosméticos</a><a href="" class="linkshop" id="link">Itens</a><a href="" class="linkshop" id="linkpremium">Premium</a></p>
    </div>

    <main>
        <a href="../shop.html" id="voltar-shop"><i class="material-icons" id="arrow-back">arrow_back_ios</i> Voltar</a>
        <div class="area-produto"><br><br><br>
            <div class="detalhes-compra" id="config-area">
                <p id="prazo">Chegará entre os dias <br>30/11 e 03/12 às <br>17hrs</p>
                <p id="frete">Frete: GRÁTIS</p>
                <br>
                <p id="qtd-produto">Quantidade: 01</p>
                <h5 id="estoque">Em estoque: 99+</h5>
                <br><br>
                <a href="" id="comprar">Comprar agora</a><br><br><br>
                <a href="" id="ir-para-carrinho">Adicionar ao carrinho</a>
            </div>
            <div class="image-produto" id="config-area">
                <img src="../../image/shop/produto1.png" alt="" width="550" height="550" id="mudar">
            </div>
            <div class="preco-produto" id="config-area">
                <div id="ranking-produto">
                    <h5>NOVO | + 99 vendidos</h5>
                    <h5 id="icon-mais-vendidos">MAIS VENDIDOS</h5><h5>N°1 em Máquinas</h5>
                </div>
                <div id="nome-produto">
                    <p>Máquina de Café CAFÉ&AROMA Mini GC-1 <br> Automática Vermelha e Preta (110V)</p>
                    <div id="estrelas">
                        <p id="stars">4.2 <i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></p>
                    </div>
                    <div>
                        <h5 id="h5preco"><del>R$419,90</del></h5>
                        <h1 id="h1preco">R$ 249,99</h1>
                        <p id="juros">ou 12x R$29,90 <br> sem juros</p>
                    </div>
                </div>
                <div id="outras-imagens-produto">
                    <div class="box" id="box-1" onclick="mudarImagem1()">
                        <img src="../../image/shop/produto1.png" alt="" width="120" height="120">
                    </div>
                    <div class="box" id="box-2">
                        <img src="../../image/shop/produto1imagem2.png" alt="" width="120" height="120" id="mudar2" onclick="mudarImagem2()">
                    </div>
                    <div class="box" id="box-3" onclick="mudarImagem3()">
                        <img src="../../image/shop/produto1imagem3.png" alt="" width="120" height="120">
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="descricao-e-especificacao">
                <h2 class="h2-main">Descrição do produto</h2>
                <p class="p-main">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ab necessitatibus itaque quos nesciunt facere iusto non totam cum. Facilis corporis dolor debitis velit quod quaerat expedita perferendis impedit cumque?</p><br>
                <p class="p-main">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ab necessitatibus itaque quos nesciunt facere iusto non totam cum. Facilis corporis dolor debitis velit quod quaerat expedita perferendis impedit cumque?</p><br>
                <p class="p-main">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ab necessitatibus itaque quos nesciunt facere iusto non totam cum. Facilis corporis dolor debitis velit quod quaerat expedita perferendis impedit cumque?</p><br>
                <p class="p-main">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ab necessitatibus itaque quos nesciunt facere iusto non totam cum. Facilis corporis dolor debitis velit quod quaerat expedita perferendis impedit cumque?</p>
                <br>
                <h2 class="h2-main">Detalhes do produto</h2>
                <p class="p-main">Características</p>
                <p class="p-main">Ainda não foi cadastrado as características desse produto</p>
                <br>
                <p class="p-main">Especificações</p>
                <p class="p-main">Ainda não foi cadastrado as especificações desse produto</p>
                </ul>
            </div><br><br>
            <div id="produtos-relacionados">
                <h3 id="h3-relacionados">PRODUTOS RELACIONADOS</h3><br><br>
                <div>
                    <div id="pdt2-mv">
                        <div id="img-pdt2-mv">
                            <img src="../../image/shop/maquina1.webp" alt="" width="150" height="150" id="img-extra">
                        </div>
                        <h5>Máquina Automática S27 Pop Plus</h5>
                        <h5><del>R$350</del>R$280</h5>
                    </div>
                    <div id="pdt2-mv">
                        <div id="img-pdt2-mv">
                            <img src="../../image/shop/maquina3.webp" alt="" width="150" height="150" id="img-extra">
                        </div>
                        <h5>Máquina Tres G2 touch 220V</h5>
                        <h5><del>R$450</del> R$375</h5>
                    </div>
                    <div id="pdt2-mv">
                        <div id="img-pdt2-mv">
                            <img src="../../image/shop/maquina4.avif" alt="" width="150" height="150" id="img-extra">
                        </div>
                        <h5>Máquina 3 AROMAS GESTOS</h5>
                        <h5><del>R$280</del> R$230</h5>
                    </div>
                    <div id="pdt2-mv">
                        <div id="img-pdt2-mv">
                            <img src="../../image/shop/produto5.png" alt="" width="150" height="150" id="img-extra">
                        </div>
                        <h5>Cafeteira 3 AROMAS EXPRESS</h5>
                        <h5><del>R$440,90</del> R$380,90</h5>
                    </div>
                </div>
                <form action="#" method="get" class="avaliacao-produto">
                    <h2>Avalie nosso atendimento</h2>
                    <br>
                    <label for="avaliacao">Aponte melhorias e/ou elogie nosso atendimento, para fazer melhorias</label><br>
                    <textarea name="avaliacao" cols="40" rows="13">Avalie-nos</textarea><br>
                    <button onclick="alert('Avaliação enviada com sucesso')">Enviar</button>
                </form><br><br>
            </div>
        </div>
    </main>

    <footer style="border: none;">
        <img src="../../image/miniatura.png" alt="" id="mini">
        <img src="../../image/midias.png" alt="" id="apps">
        <p id="extras"><strong><a href="" class="extras">Termos de uso</a> |<a href="" class="extras">Política de Privacidade</a> |<a href="" class="extras">Política de Cookies</a></strong></p>
        <h5 id="copyright">2024 - <i class="material-icons" style="font-size: 0.94em;">copyright</i>CAFÉ E AROMA. Todos os direiros reservados.</h5>
    </footer>
    <script src="../../script.js"></script>
</body>
</html>