<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cardápio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/projectFinal/tela_cardapio/cardapio.php">

</head>

<body>

    <div class="container">
        <a href="project.php">&lt;</a>


        <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Buscar pratos" />
        </div>

        <h2>Ofertas do Dia</h2>
        <img class="dish-image" src="imagens/prato_do_dia.png" alt="ofertas">


        <div class="item">
            <a href="projectFinal/tela_macarrão/prato_macarrão.php">
                <img src="imagens/massa.png" alt="massa">
            </a>
            <div class="item-name">Macarrão Temperado<br>R$ 40.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <div class="item">
            <a href="projectFinal/tela_caldo/prato_caldo.php">
                <img src="imagens/sopa.png" alt="sopa">
            </a>
            <div class="item-name">Caldo de Legumes Assados<br>R$ 30.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>



        <div class="item">
            <a href="projectFinal/tela_palmito/prato_palmito.php">
                <img src="imagens/torta_p.png" alt="torta palmito">
            </a>
            <div class="item-name">Torta de Palmito<br>R$ 35.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <a href="projectFinal/tela_carrinho/carrinho.php" class="botao">Ver carrinho</a>

    </div>

    <div class="nav">

        <div>
            <a href="projectFinal/tela_cardapio/cardapio.php">
                <i class="fas fa-utensils"></i><br>Cardápio
            </a>
        </div>

        <div class="active">
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