<?php
    require_once("../controller/chapitreCtrl.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Jean Forteroche</title>
        <link rel="stylesheet" href="../public/CSS/webfonts.css">
        <link rel="stylesheet" href="../public/CSS/chapitre.css">
        <link rel="stylesheet" href="../public/CSS/theme.css">
        <link rel="stylesheet" href="../public/CSS/header.css">
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
    <div class="news">
        <h4><?php echo $billet->getTitre();?></h4>
        <p><?php echo $billet->getContenu();?></p>
    </div>
    <img id="img4" src="../public/images/img51.jpg" alt="">

    <div id="formulaire-comment">
            <h3>Poster un commentaire</h3>
            <form action="chapitre.php?billetSlug=<?php echo $billet->getSlug();?>" method="post">
                <input id="input-author-name"type="text" name="pseudo" placeholder="Votre nom ou pseudo">
                <textarea name="contenu" id="" rows="5"  placeholder="Votre commentaire"></textarea>
                <button type="submit" value="submit"><a href="chapitre.php?billetSlug=<?php echo $billet->getSlug();?>"></a>Envoyer</button>
            </form>
    </div>
    <div id="comments">
        <h3>Commentaires</h3>
        <article>
        <?php foreach($commentaires as $commentaire){ ?>
                <b name="pseudo"><?php echo $commentaire->getPseudo();?></b>
                <span name=postDate>Le <?php echo $commentaire->getPostDate();?></span>
                <p name="contenu"><?php echo $commentaire->getContenu();?></p>
                <small>
                    <a href="chapitre.php?billetSlug=<?php echo $billet->getSlug();?>&signalComment=<?php echo $commentaire->getId();?>">Signaler</a>
                </small>
                <?php if (isset($_GET['signalComment'])){?>
                    <small> 
                        <p>Ce commentaire à été signalé, en attente de modération.</p>
                    </small>
                    <?php } ?>
                <hr>
             <?php } ?>
        </article>
    </div>

    </div>
    </body>
</html>