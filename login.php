<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login | Gestion Parc Auto</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="login-box">
    <img src="assets/img/logo.png" class="logo">

    <h2>Connexion</h2>

    <?php if (isset($_GET['error'])): ?>
        <p class="error">Identifiants incorrects</p>
    <?php endif; ?>

    <form action="login_process.php" method="POST">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>
    </form>
</div>

</body>
</html>
