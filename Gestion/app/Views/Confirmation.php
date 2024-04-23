<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hopital Saint Maurice</title>
    
<!-- Premier fichier CSS -->
<link rel="stylesheet" type="text/css" href="css/acceuil.css">
<link rel="stylesheet" type="text/css" href="css/confirmation.css">

    
    
    


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
        <h2> Rendez-vous confirmé </h2>
    

        <p>Votre rendez-vous a été confirmé avec succès.</p>
        <con><a href="http://localhost/Gestion/">Retour à la page d'accueil</a></con>
        
        
        


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

