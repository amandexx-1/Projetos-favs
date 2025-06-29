<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cardápio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/cardapio.css">

</head>

<body>

    <div class="container">
        <a href="project.php">&lt;</a>


        <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Buscar pratos" />
        </div>

        <h2>Ofertas</h2>
        <a href="prato_salada_fit.php">
            <img class="dish-image" src="imagens/prato_do_dia.png" alt="ofertas">
        </a>
        
        <a href="prato_macarrão.php">
            <div class="item">

                <img src="imagens/massa.png" alt="massa">

                <div class="item-name">Macarrão Temperado<br>R$ 40.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_caldo.php">
            <div class="item">

                <img src="imagens/sopa.png" alt="sopa">

                <div class="item-name">Caldo de Legumes Assados<br>R$ 30.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_palmito.php">
            <div class="item">
                <a href="prato_palmito.php">
                    <img src="imagens/torta_p.png" alt="torta palmito">
                </a>
                <div class="item-name">Torta de Palmito<br>R$ 35.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="carrinho.php" class="botao">Ver carrinho</a>

    </div>

    <div class="nav">

        <div>
            <a href="cardapio.php">
                <i class="fas fa-utensils"></i><br>Cardápio
            </a>
        </div>

        <div class="active">
            <a href="oferta.php">
                <i class="fas fa-star"></i><br>Ofertas
            </a>
        </div>

        <div>
            <a href="perfil.php">
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