
<div id="accueil">
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
        <h4 name="titre"><?php echo $viewElements['lastBillet']->getTitre();?></h4>
        <p name="postDate">Publié le <?php echo $viewElements['lastBillet']->getPostDate();?> </p>
        <p name="contenu"><?php echo $viewElements['lastBillet']->getResume()?></p>
        <button> <a href="?action=chapitre&id=<?php echo $viewElements['lastBillet']->getId();?>"><i class="fas fa-book-open"></i></a></button>
        </div>
    </div>
</div>
