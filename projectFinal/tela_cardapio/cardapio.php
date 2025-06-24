<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cardápio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="projectFinal/tela_cardapio/cardapio.css">
</head>

<body>
    <div class="container">
        <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Buscar pratos" />
        </div>

        <h2>Pratos</h2>


        <div class="item">
            <a href="projectFinal/tela_strogonoff/prato_strogonoff.php">
                <img src="imagens/strogonoff_cogumelos.png" alt="Strogonoff">
            </a>
            <div class="item-name">Strogonoff de Cogumelos<br>R$ 40.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <div class="item">
            <a href="projectFinal/tela_caldo/prato_caldo.php">
                <img src="imagens/sopa.png" alt="sopa">
            </a>
            <div class="item-name">Caldo de Legumes Assados<br>R$ 35.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <div class="item">
            <a href="projectFinal/tela_berinjela/prato_berinjela.php">
                <img src="imagens/berinjela.png" alt="Berinjela">
            </a>
            <div class="item-name">Berinjela Grelhada com Molho Chimichurri<br>R$ 49.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <div class="item">
            <a href="projectFinal/tela_caponata/prato_caponata.php">
                <img src="imagens/caponata.png" alt="Caponata">
            </a>
            <div class="item-name">Caponata Siciliana<br>R$ 45.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <div class="item">
            <a href="projectFinal/tela_salada/prato_salada.php">
                <img src="imagens/salada.png" alt="Salada Colorida">
            </a>
            <div class="item-name">Salada Colorida<br>R$ 30.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <div class="item">
            <a href="projectFinal/tela_lasanha_berinjela/prato_lasanha_berinjela.php">
                <img src="imagens/torta_berinjela.png" alt="Lasanha Berinjela">
            </a>
            <div class="item-name">Lasanha de Berinjela<br>R$ 50.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <div class="item">
            <a href="projectFinal/tela_risoto/prato_risoto.php">
                <img src="imagens/risoto_de_legumes.png" alt="Risoto">
            </a>
            <div class="item-name">Risoto de Legumes<br>R$ 35.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>

        <div class="item">
            <a href="projectFinal/tela_macarrão/prato_macarrão.php">
                <img src="imagens/massa.png" alt="Massa">
            </a>
            <div class="item-name">Macarrão Temperado<br>R$ 35.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <div class="item">
            <a href="projectFinal/tela_palmito/prato_palmito.php">
                <img src="imagens/torta_p.png" alt="Torta">
            </a>
            <div class="item-name">Torta de Palmito<br>R$ 35.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>



        <a href="projectFinal/tela_carrinho/carrinho.php" class="botao">Ver carrinho</a>

    </div>

    <div class="nav">

        <div class="active">
            <a href="projectFinal/tela_cardapio/cardapio.php">
                <i class="fas fa-utensils"></i><br>Cardápio
            </a>
        </div>

        <div>
            <a href="projectFinal/tela_ofertas/oferta.php">
                <i class="fas fa-star"></i><br>Ofertas
            </a>
        </div>

        <div>
            <a href="projectFinal/tela_perfil/perfil.php">
                <i class="fas fa-user"></i><br>Perfil
            </a>
        </div>

    </div>

    <script>
        function addToCart(button) {
            button.textContent = 'Adicionado';
            button.classList.add('added');
            button.disabled = true;
        }
    </script>
</body>

</html>