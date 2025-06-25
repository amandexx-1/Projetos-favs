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

        <div class="category-buttons">
            <button data-category="ovolactovegetariano">o</button>
            <button data-category="lactovegetariano">Lactovegetariano</button>
            <button data-category="vegetariano">Vegetariano</button>
            <button data-category="vegano">Vegano</button>
            <button data-category="sobremesas">Sobremesas</button>
        </div>

        <h2>Pratosssssssssssssssss</h2>
        <h1>teste</h1>
        
        <a href="prato_strogonoff.php">
            <div class="item" data-category="ovolactovegetariano">

                <img src="imagens/strogonoff_cogumelos.png" alt="Strogonoff">

                <div class="item-name">Strogonoff de Cogumelos<br>R$ 40.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>


        <div class="item" data-category="vegano">
            <a href="prato_caldo.php">
                <img src="imagens/sopa.png" alt="sopa">
            </a>
            <div class="item-name">Caldo de Legumes Assados<br>R$ 35.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <div class="item" data-category="vegetariano">
            <a href="prato_berinjela.php">
                <img src="imagens/berinjela.png" alt="Berinjela">
            </a>
            <div class="item-name">Berinjela Grelhada com Molho Chimichurri<br>R$ 49.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <div class="item" data-category="vegetariano">
            <a href="prato_caponata.php">
                <img src="imagens/caponata.png" alt="Caponata">
            </a>
            <div class="item-name">Caponata Siciliana<br>R$ 45.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <div class="item" data-category="vegano">
            <a href="prato_salada.php">
                <img src="imagens/salada.png" alt="Salada Colorida">
            </a>
            <div class="item-name">Salada Colorida<br>R$ 30.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <div class="item" data-category="ovolactovegetariano">
            <a href="prato_lasanha_berinjela.php">
                <img src="imagens/torta_berinjela.png" alt="Lasanha Berinjela">
            </a>
            <div class="item-name">Lasanha de Berinjela<br>R$ 50.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>

        <div class="item" data-category="vegetariano">
            <a href="prato_bruscheta.php">
                <img src="imagens/bruscheta.png" alt="Bruscheta">
            </a>
            <div class="item-name">Bruscheta<br>R$ 25.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <div class="item" data-category="lactovegetariano">
            <a href="prato_risoto.php">
                <img src="imagens/risoto_de_legumes.png" alt="Risoto">
            </a>
            <div class="item-name">Risoto de Legumes<br>R$ 35.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>

        <div class="item" data-category="ovolactovegetariano">
            <a href="prato_macarrão.php">
                <img src="imagens/massa.png" alt="Massa">
            </a>
            <div class="item-name">Macarrão Temperado<br>R$ 35.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>


        <div class="item" data-category="ovolactovegetariano">
            <a href="prato_palmito.php">
                <img src="imagens/torta_p.png" alt="Torta">
            </a>
            <div class="item-name">Torta de Palmito<br>R$ 35.90</div>
            <button onclick="addToCart(this)">Adicionar</button>
        </div>



        <a href="carrinho.php" class="botao">Ver carrinho</a>

    </div>

    <div class="nav">

        <div class="active">
            <a href="cardapio.php">
                <i class="fas fa-utensils"></i><br>Cardápio
            </a>
        </div>

        <div>
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

    <script>
        const buttons = document.querySelectorAll('.category-buttons button');
        const items = document.querySelectorAll('.item');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.dataset.category;

                items.forEach(item => {
                    // Adiciona ou remove a classe "hidden"
                    if (item.dataset.category === category || category === 'all') {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });
    </script>

</body>

</html>