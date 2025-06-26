<?php
$msg = "";

// Lógica de login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $codigo = $_POST["codigo"];

    // Conectar ao banco
    $conn = new mysqli("localhost", "root", "", "inhamy");
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    // Verificação simples (sem SQL Injection)
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND codigo='$codigo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION["email"] = $email;

        // Redireciona para a página principal
        header("Location: project.php");
        exit(); // muito importante para impedir execução adicional
    } else {
        $msg = "E-mail ou código incorreto.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Inhamy</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <h1 class="logo">Inhamy</h1>
        <p>Bem-vindo de volta!</p>

        <form id="loginForm" action="login.php" method="POST">
            <label for="email">Login</label>
            <input type="email" name="email" placeholder="E-mail" required>

            <input type="text" name="codigo" placeholder="Código" required>

            <a href="#" class="link">Esqueceu o código?</a>


            <button type="submit">Entrar</button>

        </form>

        <button onclick="primeiroAcesso()" class="primeiro-acesso">Meu primeiro acesso</button>
        <?php if (!empty($msg)): ?>
            <div class="mensagem"><?php echo $msg; ?></div>
        <?php endif; ?>

    </div>

    <script>
        function primeiroAcesso() {
            alert("Redirecionando para o cadastro de primeiro acesso...");
            window.location.href = "primeiro_login.php";
        }
    </script>

</body>

</html>