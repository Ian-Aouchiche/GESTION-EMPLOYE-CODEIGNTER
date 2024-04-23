<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">

</head>
<body>

<body>
    <div class="container">
        <h2>Inscription</h2>
        <?php if (session()->has('error')): ?>
            <p style="color: red;"><?= session('error') ?></p>
        <?php endif; ?>
        <form action="<?= site_url('signup/processSignup') ?>" method="post">
            <label for="username">Nom d'utilisateur:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="email">Adresse e-mail:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="password">Mot de passe:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit">S'inscrire</button> 
        </form>
    </div>
</body>


</html>
