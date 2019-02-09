<?php
    require_once("controller/accueilCtrl.php");
    $ctrl = new AccueilCtrl();
    $billet = $ctrl->getBillet();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Jean Forteroche</title>
        <link rel="stylesheet" href="public/CSS/webfonts.css">
        <link rel="stylesheet" href="public/CSS/accueil.css">
        <link rel="stylesheet" href="public/CSS/theme.css">
        <link rel="stylesheet" href="public/CSS/header.css">


        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </head>
 
    <body>
    <header>
        <div>
        <h1>Jean Forteroche</h1>
        <p>Auteur et écrivain</p>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="?action=accueil">Accueil</a></li>
                <li><a href="?action=roman">Roman</a></li>
                <li><a href="?action=connexion">Connexion</a></li>
            </ul>
         </nav>
    </header>
    <div id="welcome">
        <img id="img1" src="public/images/img2.jpg" alt="">
        <div id="text-img">
            <h2>Découvrez mon roman chapitre par chapitre</h2>
            <h3>"Billet simple pour l'Alaska"</h3>
        </div>
    </div>
    <div id="last-news">
        <h3>Derniere publication</h3> 
        <img id="img4" src="public//images/img4.jpg" alt="">
        <div class="news">
        <h4 name="titre"><?php echo $billet->getTitre();?></h4>
        <p name="postDate">Publié le <?php echo $billet->getPostDate();?> </p>
        <p name="contenu"><?php echo $billet->getResume()?></p>
        <button> <a href="chapitre.php?billetSlug=<?php echo $billet->getSlug();?>"><i class="fas fa-book-open"></i></a></button>
        </div>
    </div>
    
    </body>
</html>
