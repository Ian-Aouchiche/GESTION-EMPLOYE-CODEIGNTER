<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hopital Saint Maurice</title>
    
    <link rel="stylesheet" type="text/css" href="css/acceuil.css">


</head>
<body>
    <header>
    <nav>
    <ul>
        <li id="logo"><a href="#">Hopital Saint Maurice DASHBOARD</a></li>
        <?php if (session()->has('admin')): ?>
            <li><a href="#">Bonjour, <?= session('admin')['username'] ?></a></li>
            <li><a href="http://localhost/Gestion/logout">Se déconnecter</a></li>
            <li><a href="http://localhost/Gestion/gestion">Gestion session Employé</a></li>
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
        <h2>bienvenue sur l'interface administarteur</h2>
       <p>L'interface administrateur de votre hôpital est une plateforme permettant de gérer les sessions des employés ainsi que les données des employés. 


    

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

