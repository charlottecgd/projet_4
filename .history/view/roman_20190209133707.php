<?php
    require_once("controller/romanCtrl.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Jean Forteroche</title>
        <link rel="stylesheet" href="public/CSS/webfonts.css">
        <link rel="stylesheet" href="public/CSS/roman.css">
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
    <section>
    
    <img id="img4" src="public//images/img4.jpg" alt="">
      <?php foreach($billets as $billet){ ?>
        <div class="news">
        <h4 name="titre"><?php echo $billet->getTitre();?></h4>
        <p name="postDate">publié le <?php echo $billet->getPostDate();?> </p>
        <p name="contenu"><?php echo $billet->getResume()?></p>
        <button> <a href="chapitre.php?billetSlug=<?php echo $billet->getSlug();?>"><i class="fas fa-book-open"></i></a></button>
        </div>
        <?php }?>
    
    </section>
    </body>
</html>