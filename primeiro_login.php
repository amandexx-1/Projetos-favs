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
        <a href="login.php">&lt;Voltar</a>
        <h1 class="logo">Inhamy</h1>
        <p>Infome seu e-mail</p>

        <form id="loginForm" action="login.php" method="POST">
            <input type="email" name="email" placeholder="E-mail" required>
            <button type="submit">Enviar</button>
        </form>

        <?php if (!empty($msg)): ?>
            <div class="mensagem"><?php echo $msg; ?>
            <?php endif; 
        ?>

    </div>
</body>