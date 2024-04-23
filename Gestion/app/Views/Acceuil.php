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
        <li id="logo"><a href="#">Hopital Saint Maurice</a></li>
        <?php if (session()->has('user')): ?>
            <li><a href="#">Bonjour, <?= session('user')['username'] ?></a></li>
            <li><a href="http://localhost/Gestion/logout">Se déconnecter</a></li>
            <li><a href="http://localhost/Gestion/rdv">Rendez vous</a></li>

        <?php else: ?>
            <li><a href="http://localhost/Gestion/login">Se connecter</a></li>
            <li><a href="http://localhost/Gestion/dmdrdv">Demande de Rendez vous</a></li>

            <li><a href="plan_Public_Exterieur.pdf" download>Plan</a></li>


        <?php endif; ?>
        <li><a href="#contact">Nous contacter</a></li>
        <li><a href="http://localhost/Gestion/">Acceuil</a></li>

    </ul>
</nav>

        <div id="imagePrincipale">
            <h1>Hopital Saint Maurice</h1>
            <div id="premierTrait"></div>
            <h3>12/14 Rue du Val d'Osne, 94410 Saint-Maurice</h3>
        </div>
    </header>
    <section id="presentation">
      <div id="texteIntro">
        <h2>Présentation</h2>
        <h1>L'hôpital Esquirol</h1>
    <p>L'hôpital Esquirol, officiellement appelé établissement public de santé Esquirol (EPS Esquirol), est un ancien asile psychiatrique français, autrefois connu sous le nom d’asile de Charenton. Il est situé sur la commune de Saint-Maurice, dans le Val-de-Marne.</p>
    
    <p>L'établissement n'existe plus en tant que tel depuis le 1er janvier 2011 : il a fusionné avec un établissement mitoyen, l'hôpital national de Saint-Maurice, pour former les hôpitaux de Saint-Maurice1.</p>
    
    <h2>Historique</h2>
    <h3>La Maison royale de Charenton</h3>
    <p>Le 13 septembre 1641, grâce à la donation de Sébastien Leblanc, conseiller et contrôleur des guerres de Louis XIII, faite aux Frères de la Charité de Charenton-Saint-Maurice (actuel Saint-Maurice), les religieux fondent un hôpital de sept lits destiné à recevoir des malades pauvres. Dès 1660, divers documents attestent de la vocation de cet établissement à accueillir des malades mentaux.</p>
    
    <p>L'édification de la Maison royale de Charenton en 1732 permet également de recevoir quelques pensionnaires envoyés par lettre de cachet (demandée par le roi ou, plus souvent, par la famille).</p>
    
    <p>Les patients proviennent en général de milieux aisés, le prix de la pension étant assez élevé.</p>
    
    <p>Après la suppression des ordres religieux, la maison est fermée. Rouverte en 1797, elle est placée sous la tutelle du ministère de l’Intérieur.</p>
    
    <p>En 1804, François Simonnet de Coulmiers, homme d'Église et homme politique, devient directeur de la Maison nationale de Charenton2, hospice destiné à accueillir les aliénés. Cet établissement est totalement dépourvu de règles et Coulmiers en est donc le chef tout puissant. Jean-Étienne Esquirol écrit3 :</p>
    
    <blockquote>
        <p>Le Ministre de l’Intérieur en rétablissant la Maison de Charenton fit une faute grave en se contentant de nommer les principaux chefs de l’Établissement […] sans donner de règlement ni de mode de comptabilité, sans déterminer les attributions des divers fonctionnaires enfin sans établir une surveillance régulière. Il en résulte de là que Monsieur de Coulmiers fut administrateur absolu.</p>
    </blockquote>
    
    <p>S'il n'a aucune formation en médecine, Coulmiers décide de tout, y compris du traitement des aliénés à sa charge, et impose la méthode forte pour « apaiser » les patients de l'hospice : bains d'eau glacée, camisoles de force, cages, etc. Paradoxalement, Coulmiers est aussi un précurseur de l'art-thérapie qui souhaite offrir aux malades des distractions thérapeutiques telles la musique, la danse ou le théâtre.</p>
    
    <p>L’hôpital est reconstruit, au milieu du xixe siècle, par l’architecte Émile Jacques Gilbert dans un style néoclassique, selon les conceptions de Jean-Étienne Esquirol, qui dirige alors l'établissement.</p>
    
    <p>À partir de 1920, l’hôpital accueille une maternité.</p>
    
    <p>Il prend, en 1973, le nom d’hôpital Esquirol.</p>
    
    <p>Le 9 avril 1998, il est classé au titre des monuments historiques4.</p>
    
    <h2>Regroupement et création des hôpitaux de Saint-Maurice</h2>
    <p>L’hôpital Esquirol et l’hôpital national de Saint-Maurice, mitoyens, sont regroupés le 1er janvier 2011 pour former les hôpitaux de Saint-Maurice1. Ils ont un statut d’établissement public de santé (EPS).</p>
    
    <p>Ils sont spécialisés :</p>
    <ul>
        <li>en soins de suite et réadaptation (SSR) de l’enfant et de l’adulte ;</li>
        <li>en psychiatrie (40 structures extra-hospitalières dans les secteurs parisiens et val-de-marnais et une douzaine d’unités d’hospitalisation complète).</li>
    </ul>
    
    <p>Ils disposent également :</p>
    <ul>
        <li>d’un centre de traitement de l’insuffisance rénale chronique ;</li>
        <li>d’une maternité de type 2A.</li>
    </ul>
    

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

