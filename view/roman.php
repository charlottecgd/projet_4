
<div id="roman">
    <section>
    
    <img id="img4" src="public//images/img4.jpg" alt="">
      <?php foreach($viewElements['billets'] as $billet){ ?>
        <div class="news">
        <h4 name="titre"><?php echo $billet->getTitre();?></h4>
        <p name="postDate">publié le <?php echo $billet->getPostDate();?> </p>
        <p name="contenu"><?php echo $billet->getResume()?></p>
        <button> <a href="?action=chapitre&id=<?php echo $billet->getId();?>"><i class="fas fa-book-open"></i></a></button>
        </div>
        <?php }?>
    
    </section>
</div>
 