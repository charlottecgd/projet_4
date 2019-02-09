

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
        <h4 name="titre"><?php echo $viewElements['lastBillet']->getTitre();?></h4>
        <p name="postDate">Publié le <?php echo $viewElements['lastBillet']->getPostDate();?> </p>
        <p name="contenu"><?php echo $viewElements['lastBillet']->getResume()?></p>
        <button> <a href="chapitre.php?billetSlug=<?php echo $viewElements['lastBillet']->getSlug();?>"><i class="fas fa-book-open"></i></a></button>
        </div>
    </div>
    
    </body>
</html>
