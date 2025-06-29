<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tela Principal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/project.css">
</head>


<body>
    <div class="container">
        <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Buscar pratos" />

        </div>

        <div class="container">

            <p class="data"><?php echo date("d.m.Y"); ?></p>
            <h2>MENU DO DIA</h2>
            <p class="subtitulo">Entrada + Prato Principal + Sobremesa</p>

        </div>


        <div class="carousel-container">
            <div class="carousel-track">

                <div class="carousel-slide">
                    <a href="prato_salada_fit.php">
                        <img src="imagens/prato_do_dia.png" alt="Prato1 Salada">
                    </a>
                </div>

                <div class="carousel-slide">
                    <a href="prato_abobora.php">
                        <img src="imagens/abobora.png" alt="Prato2 Abóbora Grelhada">
                    </a>
                </div>

                <div class="carousel-slide">
                    <a href="prato_mouse.php">
                        <img src="imagens/mouse.png" alt="Prato3 Mousse de Maracujá">
                    </a>
                </div>


            </div>
        </div>

        <a href="prato_salada_fit.php">
            <div class="item">

                <img src="imagens/salada.fit.png" alt="Salada Fit">

                <div class="item-name">Salada Mediterrânea<br>R$ 40.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_abobora.php">
            <div class="item">

                <img src="imagens/abobora.grelhada.png" alt="Abobora">

                <div class="item-name">Abóbora Grelhada<br>R$ 49.90</div>
                <button onclick="addToCart(this)">Adicionar</button>
            </div>
        </a>

        <a href="prato_mouse.php">
            <div class="item">

                <img src="imagens/mouse.m.png" alt="Mouse de Maracujá">

                <div class="item-name">Mouse de Maracujá<br>R$ 25.90</div>
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
    <!-- Code injected by live-server -->
    <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function() {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() ==
                            "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date()
                                .valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function(msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script>

    <script>
        let index = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const track = document.querySelector('.carousel-track');

        function moveSlides() {
            index++;
            if (index >= slides.length) {
                index = 0;
            }
            track.style.transform = `translateX(-${index * 100}%)`;
        }

        setInterval(moveSlides, 3000); // troca a cada 3 segundos
    </script>

    <script>
        items.forEach(item => {
            // Adiciona ou remove a classe "hidden"
            if (item.dataset.category === category || category === 'all') {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    </script>
</body>

</html>