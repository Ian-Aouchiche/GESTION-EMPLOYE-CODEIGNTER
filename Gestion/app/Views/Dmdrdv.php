<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hopital Saint Maurice</title>
    
<!-- Premier fichier CSS -->
<link rel="stylesheet" type="text/css" href="css/acceuil.css">
    
    <!-- Deuxième fichier CSS -->
    <link rel="stylesheet" type="text/css" href="css/dmdrdv.css">
    


</head>
<body>
    <header>
    <nav>
    <ul>
    <li id="logo"><a href="http://localhost/Gestion">Hopital Saint Maurice</a></li>
        <?php if (session()->has('user')): ?>
            <li><a href="#">Bonjour, <?= session('user')['username'] ?></a></li>
            <li><a href="http://localhost/Gestion/logout">Se déconnecter</a></li>
            <li><a href="http://localhost/Gestion/rdv">Rendez vous</a></li>

        <?php else: ?>
            <li><a href="http://localhost/Gestion/login">Se connecter</a></li>
            <li><a href="plan_Public_Exterieur.pdf" download>Plan</a></li>


        <?php endif; ?>
        <li><a href="#contact">Nous contacter</a></li>
        <li><a href="http://localhost/Gestion/">Acceuil</a></li>

    </ul>
</nav>

        <div id="imagePrincipale">
            <h1>Demande de Rendez Vous</h1>
            <div id="premierTrait"></div>
        
        </div>
    </header>
    <section id="presentation">
      <div id="texteIntro">
        <h2>Demander un Rendez Vous</h2>
        <form action="<?= site_url('dmdrdv/processDemande') ?>" method="post">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br>
        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom" required><br>
        <label for="date_naissance">Date de naissance :</label><br>
        <input type="date" id="date_naissance" name="date_naissance" required><br>
        <label for="telephone">Téléphone :</label><br>
        <input type="tel" id="telephone" name="telephone" required><br>
        <label for="adresse">Adresse :</label><br>
        <input type="text" id="adresse" name="adresse" required><br>
        <label for="mail">Mail :</label><br>
        <input type="text" id="mail" name="mail" required><br>

    <label for="sujet">Sujet du rendez-vous :</label><br>
    <input type="text" id="sujet" name="sujet" required><br>
    <label for="user">Choisir un utilisateur :</label><br>
    <select id="user" name="user">
        <?php foreach ($users as $user): ?>
            <option value="<?= $user['id'] ?>"><?= $user['username'] ?></option>
        <?php endforeach; ?>
    </select><br><br>
    <button type="submit">Envoyer la demande</button> 
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

