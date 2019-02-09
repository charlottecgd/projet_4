
<div id="admin">
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
    <script text="language/javascript">
            document.getElementById("titre-billet").value ="<?php echo $billet->getTitre();?>";
            document.getElementById("contenuBillet").value ="<?php echo $billet->getContenu();?>";
    </script>
</div>