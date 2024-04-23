<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hopital Saint Maurice</title>
    
    <link rel="stylesheet" type="text/css" href="css/acceuil.css">
    <link rel="stylesheet" type="text/css" href="css/gestion.css">


</head>
<body>
    <header>
    <nav>
    <ul>
        <li id="logo"><a href="#">Hopital Saint Maurice DASHBOARD</a></li>
        <?php if (session()->has('admin')): ?>
            <li><a href="#">Bonjour, <?= session('admin')['username'] ?></a></li>
            <li><a href="http://localhost/Gestion/logout">Se déconnecter</a></li>
            <li><a href="http://localhost/Gestion/gestion">Création Employé</a></li>
            <li><a href="http://localhost/Gestion/dashboard">DashBoard</a></li>

        <?php endif; ?>
    </ul>
</nav>


        <div id="imagePrincipale">
            <h1>Hopital Saint Maurice</h1>
            <div id="premierTrait"></div>
            <h3>DASHBOARD</h3>
        </div>
    </header>
    <section id="presentation">
      <div id="texteIntro">
        <h2>Tableau des employés</h2>
        
<form id="deleteForm" action="<?= base_url('gestion/supprimer') ?>" method="post">
    <table>
        <!-- Entêtes du tableau -->
        <thead>
            <tr>
                <!-- Entête pour la case à cocher -->
                <th></th>
                <th>ID</th>
                <th>Nom d'utilisateur</th>
                <th>Email</th>
                <th>Date de création</th>
                <th>Emploi</th>
            </tr>
        </thead>
        <!-- Corps du tableau -->
        <tbody>
            <!-- Boucle pour afficher chaque employé -->
            <?php foreach ($users as $user) : ?>
                <tr>
                    <!-- Case à cocher pour sélectionner l'employé -->
                    <td><input type="checkbox" name="selected_users[]" value="<?= $user['id'] ?>"></td>
                    <!-- Informations sur l'employé -->
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['created_at'] ?></td>
                    <td><?= $user['emploi'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Bouton pour supprimer les employés sélectionnés -->
    <button type="submit" form="deleteForm">Supprimer les employés sélectionnés</button>
</form>










<h2>Ajouter un Employé</h2>

<!-- Afficher les messages d'erreur -->
<?php if (session()->has('error')): ?>
    <p style="color: red;"><?= session('error') ?></p>
<?php endif; ?>

<form action="<?= base_url('gestion/ajouter') ?>" method="post">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br>

    <label for="emploi">Emploi :</label>
    <input type="emploi" id="emploi" name="emploi" required><br>

    <!-- Afficher les messages d'erreur pour le champ email -->
    <?php if (isset($validation) && $validation->hasError('email')): ?>
        <p style="color: red;"><?= $validation->getError('email') ?></p>
    <?php endif; ?>

    <!-- Afficher les messages d'erreur pour le champ username -->
    <?php if (isset($validation) && $validation->hasError('username')): ?>
        <p style="color: red;"><?= $validation->getError('username') ?></p>
    <?php endif; ?>

    <button type="submit">Ajouter</button>
</form>


    </section>
   
    <footer>
      <h2 id="contact">Contactez-nous</h2>
      <form>
        <input placeholder="Nom">
        <input placeholder="E-mail">
        <input placeholder="Votre message ici...">

        <button>Envoyer</button>
        <p>Vous pouvez également nous appeler au <strong>01 43 96 61 61</strong>.</p>
      </form>


    </footer>
</body>
</html>

