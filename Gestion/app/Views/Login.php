<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    
        


     <link rel="stylesheet" type="text/css" href="css/login.css">
   
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>
        <?php if (session()->has('error')): ?>
            <p style="color: red;"><?= session('error') ?></p>
        <?php endif; ?>
        <form action="<?= site_url('login/processlogin') ?>" method="post">
            <label for="username">Nom d'utilisateur:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Mot de passe:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Se connecter">
            
        </form>
        <form action="<?= site_url('/admin') ?>" method="get">
            <input type="submit" value="Admin Acess">
        </form>
    </div>
</body>
</html>
