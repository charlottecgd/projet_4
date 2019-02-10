

<div id="admin">
    <?php if ($viewElements['modeBilletExistant']){?>
        <div id="publication">
        <h3>Modifier un billet</h3>
        <form action="?action=admin&id=<?php echo $viewElements['billet']->getId();?>" method="post">
            <input id="titre-billet" type="text" placeholder="Titre du billet" name="titre">
            <textarea id="contenuBillet" type="text" name="contenu"></textarea>
            <input type="text" name="modification" style="display: none"/>
            <button id="bouton-publier" type="submit" value="submit">modifier</button>
        </form>
        </div>
    <?php }else{ ?>

    <div id="publication">
        <h3>Poster un billet</h3>
        <form action="?action=admin" method="post">
            <input id="titre-billet" type="text" placeholder="Titre du billet" name="titre">
            <textarea type="text" name="contenu"></textarea>
            <button id="bouton-publier" type="submit" value="submit">publier</button>
        </form>
    </div>
    <?php } ?>

    <div id="list-billets">
        <h3>Liste des billets</h3>
            <ul>
            <?php foreach($viewElements['billets'] as $billet){ ?>
                <li name="titre"><?php echo $billet->getTitre();?>
                    <small>
                        <form action="?action=admin"  method="post">
                            <input type="number" style="display: none" name="deleteBillet" value="<?php echo $billet->getId();?>" />
                            <button type="submit">Supprimer</button>
                        </form>
                    </small>
                    <small>
                        <a href="?action=admin&id=<?php echo $billet->getId();?>">Modifier</a>
                    </small>
                </li>
            <?php } ?>
                    
            </ul>
            
                
    </div>
        <div id="comments">
            <h3>Commentaires signalés</h3>
            <article>
            <?php foreach($viewElements['commentaires'] as $commentaire){ ?>
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
</div>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=0we1xr1faowqwxal60fwo8hupje5a8vwhkcnyezdbfi9ofe5"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<script text="language/javascript">
            document.getElementById("titre-billet").value ="<?php echo $viewElements['billet']->getTitre();?>";
            document.getElementById("contenuBillet").value ="<?php echo $viewElements['billet']->getContenu();?>";
        </script>