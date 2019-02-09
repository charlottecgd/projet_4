<?php
    require_once("controller/adminCtrl.php");
    use projet4\Controller\AdminCtrl;
    $ctrl = new AdminCtrl();
    $viewElements = $ctrl->getViewElements();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Jean Forteroche</title>
        <link rel="stylesheet" href="public/CSS/webfonts.css">
        <link rel="stylesheet" href="public/CSS/chapitre.css">
        <link rel="stylesheet" href="public/CSS/theme.css">
        <link rel="stylesheet" href="public/CSS/header.css">
        <link rel="stylesheet" href="public/CSS/admin.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=0we1xr1faowqwxal60fwo8hupje5a8vwhkcnyezdbfi9ofe5"></script>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <script>tinymce.init({ selector:'textarea' });</script>
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
                <li><a href="?action=admin">ADMINISTRATION</a></li>
                <li><a href="?action=accueil">BLOG</a></li>
              
            </ul>
         </nav>
    </header>
    <?php if (isset($_GET['updateBillet'])){?>
    <div id="publication">
    <h3>Modifier un billet</h3>
    <form action="view/admin.php" method="post">
    <input id="titre-billet" type="text" placeholder="Titre du billet" name="titre">
    <textarea id="contenuBillet" type="text" name="contenu"></textarea>
    <button id="bouton-publier" type="submit" value="submit">modifier</button>
    </form>
    </div>
    <?php } ?>

    <div id="publication">
    <h3>Poster un billet</h3>
    <form action="view/admin.php" method="post">
    <input id="titre-billet" type="text" placeholder="Titre du billet" name="titre">
    <textarea type="text" name="contenu"></textarea>
    <button id="bouton-publier" type="submit" value="submit">publier</button>
    </form>
    </div>

    <div id="list-billets">
        <h3>Liste des billets</h3>
            <ul>
            <?php foreach($billets as $leBillet){ ?>
                <li name="titre"><?php echo $leBillet->getTitre();?>
                    <small>
                        <a href="?action=admin&deleteBillet=<?php echo $leBillet->getId();?>">Supprimer</a>
                    </small>
                    <small>
                        <a href="?action=admin&updateBillet=<?php echo $leBillet->getSlug();?>">Modifier</a>
                    </small>
                </li>
            <?php } ?>
                    
            </ul>
            
                
    </div>
        <div id="comments">
            <h3>Commentaires signalés</h3>
            <article>
            <?php foreach($commentaires as $commentaire){ ?>
                <b name="pseudo"><?php echo $commentaire->getPseudo();?></b>
                <span name=postDate>Le <?php echo $commentaire->getPostDate();?></span>
                <small>
                    <a href="?action=admin&moderateComment=<?php echo $commentaire->getId();?>">Supprimer</a>
                </small>
                <p name="contenu"><?php echo $commentaire->getContenu();?></p>
                <hr>
             <?php } ?>
            </article>
        </div>
    </div>
    </body>
    <script text="language/javascript">
            document.getElementById("titre-billet").value ="<?php echo $billet->getTitre();?>";
            document.getElementById("contenuBillet").value ="<?php echo $billet->getContenu();?>";
    </script>
</html>