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
            <button data-category="ovolactovegetariano">Ovolactovegetariano</button>
            <button data-category="lactovegetariano">Lactovegetariano</button>
            <button data-category="vegetariano">Vegetariano</button>
            <button data-category="vegano">Vegano</button>
            <button data-category="sobremesas">Sobremesas</button>
        </div>

        <h2>Pratos</h2>

        <a href="prato_strogonoff.php">
            <div class="item" data-category="ovolactovegetariano">

                <img src="imagens/strogonoff_cogumelos.png" alt="Strogonoff">

                <div class="item-name">Strogonoff de Cogumelos<br>R$ 40.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_salada_fit.php">
            <div class="item" data-category="vegano">

                <img src="imagens/salada.fit.png" alt="Salada Fit">

                <div class="item-name">Salada Mediterrânea<br>R$ 40.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_creme.php">
            <div class="item" data-category="sobremesas">

                <img src="imagens/creme.png" alt="Crème Brûlée">

                <div class="item-name">Tarte Tatin de Maçã<br>R$ 29.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_caldo.php">
            <div class="item" data-category="vegano">

                <img src="imagens/sopa.png" alt="sopa">

                <div class="item-name">Caldo de Legumes Assados<br>R$ 35.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_berinjela.php">
            <div class="item" data-category="vegetariano">

                <img src="imagens/berinjela.png" alt="Berinjela">

                <div class="item-name">Berinjela Grelhada com Molho Chimichurri<br>R$ 49.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_tiramisu.php">
            <div class="item" data-category="sobremesas">

                <img src="imagens/tiramisu.png" alt="Tiramisu">

                <div class="item-name">Tiramisu<br>R$ 29.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_caponata.php">
            <div class="item" data-category="vegetariano">

                <img src="imagens/caponata.png" alt="Caponata">

                <div class="item-name">Caponata Siciliana<br>R$ 45.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_tartetatin.php">
            <div class="item" data-category="sobremesas">

                <img src="imagens/tartetatin.png" alt="Tarte Tatin">

                <div class="item-name">Tarte Tatin de Maçã<br>R$ 109.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_salada.php">
            <div class="item" data-category="vegano">

                <img src="imagens/salada.png" alt="Salada Colorida">

                <div class="item-name">Salada Colorida<br>R$ 30.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_mouse.php">
            <div class="item" data-category="sobremesas">

                <img src="imagens/mouse.m.png" alt="Mouse de Maracujá">

                <div class="item-name">Mouse de Maracujá<br>R$ 25.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_lasanha_berinjela.php">
            <div class="item" data-category="ovolactovegetariano">

                <img src="imagens/torta_berinjela.png" alt="Lasanha Berinjela">

                <div class="item-name">Lasanha de Berinjela<br>R$ 50.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_bruscheta.php">
            <div class="item" data-category="vegetariano">

                <img src="imagens/bruscheta.png" alt="Bruscheta">

                <div class="item-name">Bruscheta<br>R$ 25.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_risoto.php">
            <div class="item" data-category="lactovegetariano">

                <img src="imagens/risoto_de_legumes.png" alt="Risoto">

                <div class="item-name">Risoto de Legumes<br>R$ 35.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_abobora.php">
            <div class="item" data-category="lactovegetariano">

                <img src="imagens/abobora.grelhada.png" alt="Abobora Grelhada">

                <div class="item-name">Abóbora Grelhada<br>R$ 49.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_macarrão.php">
            <div class="item" data-category="ovolactovegetariano">

                <img src="imagens/massa.png" alt="Massa">

                <div class="item-name">Macarrão Temperado<br>R$ 35.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_palmito.php">
            <div class="item" data-category="ovolactovegetariano">

                <img src="imagens/torta_p.png" alt="Torta">

                <div class="item-name">Torta de Palmito<br>R$ 125.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>


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