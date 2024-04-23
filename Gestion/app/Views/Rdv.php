<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hopital Saint Maurice</title>
    
    <link rel="stylesheet" type="text/css" href="css/acceuil.css">
    <link rel="stylesheet" type="text/css" href="css/rdv.css">


</head>
<body>
    <header>
    <nav>
    <ul>
        <li id="logo"><a href="#">Hopital Saint Maurice</a></li>
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
            <h1>Rendez Vous</h1>
            <div id="premierTrait"></div>
            <h3>Liste de vos rendez vous </h3>
        </div>
    </header>
    <section id="presentation">
      <div id="texteIntro">
        <h2>RENDEZ VOUS</h2>
        <table>
    <thead>
        <tr>
            <th>ID Rendez-vous</th>
            <th>Sujet</th>
            <th>Date de demande</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th>Email</th>
            <!-- Ajouter d'autres colonnes si nécessaire -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rdvs as $rdv): ?>
            <tr>
                <td><?= $rdv['id'] ?></td>
                <td><?= $rdv['sujet'] ?></td>
                <td><?= $rdv['date_demande'] ?></td>
                <td><?= $rdv['nom'] ?></td>
                <td><?= $rdv['prenom'] ?></td>
                <td><?= $rdv['date_naissance'] ?></td>
                <td><?= $rdv['telephone'] ?></td>
                <td><?= $rdv['adresse'] ?></td>
                <td><?= $rdv['mail'] ?></td>
                <!-- Ajouter d'autres colonnes si nécessaire -->
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

        
       
       
    

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

