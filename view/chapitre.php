<div id="chapitre">
    <div class="news">
        <h4><?php echo $viewElements['billet']->getTitre();?></h4>
        <p><?php echo $viewElements['billet']->getContenu();?></p>
    </div>
    <img id="img4" src="public/images/img51.jpg" alt="">

    <div id="formulaire-comment">
            <h3>Poster un commentaire</h3>
            <form action="?action=chapitre&id=<?php echo $viewElements['billet']->getId();?>" method="post">
                <input id="input-author-name"type="text" name="pseudo" placeholder="Votre nom ou pseudo">
                <textarea name="contenu" id="" rows="5"  placeholder="Votre commentaire"></textarea>
                <button type="submit" value="submit"><a href="?action=chapitre&id=<?php echo $viewElements['billet']->getId();?>"></a>Envoyer</button>
            </form>
    </div>
    <div id="comments">
        <h3>Commentaires</h3>
        <article>
        <?php foreach($viewElements['commentaires'] as $commentaire){?>
                <b name="pseudo"><?php echo $commentaire->getPseudo();?></b>
                <span name=postDate>Le <?php echo $commentaire->getPostDate();?></span>
                <p name="contenu"><?php echo $commentaire->getContenu();?></p>
                
                <?php if ($commentaire->getSignaledAt()){?>
                    <small> 
                        <p>Ce commentaire à été signalé, en attente de modération.</p>
                    </small>
                    <?php }else{ ?>
                        <small>
                            <a href="?action=chapitre&id=<?php echo $viewElements['billet']->getId();?>&signalComment=<?php echo $commentaire->getId();?>">Signaler</a>
                        </small>
                    <?php }?>
                <hr>
             <?php } ?>
        </article>
    </div>

</div>