<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao Sistema</title>
    <link rel="stylesheet" href="./CSS/login.css">
</head>
<body>

<div class="login-container">
    <h1>Acesso Restrito</h1>
    
    <?php if (isset($_GET['erro'])): ?>
        <p class="error-message"><?php echo htmlspecialchars($_GET['erro']); ?></p>
    <?php endif; ?>

    <form id="loginForm" method="POST" action="index.php?url=autenticar">
        <div class="input-group">
            <label for="txtusu">Usuário:</label>
            <input type="text" id="txtusu" name="txtusu" required autofocus>
        </div>
        <div class="input-group">
            <label for="txtsenha">Senha:</label>
            <input type="password" id="txtsenha" name="txtsenha" required>
        </div>
        <button type="submit" class="login-button">Entrar no Sistema</button>
    </form>
</div>

<script src="./JS/login.js"></script>

</body>
</html>