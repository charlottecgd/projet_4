<?php
    require_once("../controller/romanCtrl.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Jean Forteroche</title>
        <link rel="stylesheet" href="../public/CSS/webfonts.css">
        <link rel="stylesheet" href="../public/CSS/roman.css">
        <link rel="stylesheet" href="../public/CSS/theme.css">
        <link rel="stylesheet" href="../public/CSS/header.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
 
    <body>
    <header>
        <div>
        <h1>Jean Forteroche</h1>
        <p>Auteur et ecrivain</p>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="roman.php">Roman</a></li>
                <li><a href="connexion.php">Connexion</a></li>
            </ul>
         </nav>
    </header>
    
    <div id="last-news">
        <h3>Derniere publication</h3>
        <img id="img4" src="../public/images/img4.jpg" alt="">
        <div>
        <h4>Chapitre 4</h4>
        <p>Mensonge, le sophisme, n'est muni d'une grille. Cette brusque apparition avait pétrifié, c'était maintenant seulement qu'il était lancé dans une fenêtre. Décidé à partir, et emporter à la nuit. Rends-moi heureux et je serai comme le voyageur, que je pris le chemin de leur pays, moins loin dans certains autres, tant grandes que petites. Empêcher que le souvenir lui revint. Rendez-vous avec elles au champ d'honneur... </p>
        <button> <a href="chapitre.php"><i class="fas fa-book-open"></i></a></button>
        </div>
    </div>

    <div class="news">
    <?php foreach($billets as $billet){ ?>
        <h4 name="titre"><?php echo $billet->getTitre();?></h4>
        <p name="postDate">publié le <?php echo $billet->getPostDate();?> </p>
        <p name="contenu"><?php echo $billet->getResume()?></p>
        <button> <a href="chapitre.php"><i class="fas fa-book-open"></i></a></button>
        <?php }?>
    </div>
    </body>
</html>