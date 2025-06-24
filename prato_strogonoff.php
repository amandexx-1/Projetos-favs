<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strogonoff de Cogumelos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/prato_strogonoff.css">
</head>


<body>
    <div class="container">
        <a href="project.php">&lt;</a>
        <h2>Strogonoff de Cogumelos</h2>



        <img class="dish-image" src="imagens/strogonoff_cogumelos.png" alt="Strogonoff de Cogumelos">

        <p>
            Cogumelos frescos salteados com cebola e alho, envolvidos em um molho cremoso à base de creme vegetal,
            mostarda e ketchup. Finalizado com um toque de páprica defumada. Acompanhado de arroz branco e batata palha
            crocante.
        </p>


        <p>
            Porção: Serve 1 pessoa<br>
            Opções sem glúten disponíveis
        </p>


        <button>Adicionar</button>
        <span class="price">R$ 85,00</span>
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

</body>

</html>