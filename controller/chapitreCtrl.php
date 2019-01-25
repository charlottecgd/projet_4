<?php

//$slug = $_GET['chapitre'];

require_once("../model/Util.php");
require_once("../model/Billet.php");
require_once("../model/Commentaire.php");
use projet4\Model\Util;
use projet4\Model\Billet;
use projet4\Model\Commentaire;

//Connection BDD
$connection = Util::getBdd();
session_start();
//AFFICHER BIllet
$slug = $_GET['billetSlug'];
$billet = Billet::getBilletBySlugFromBdd($slug);

//POSTER UN COMMENTAIRE
$commentaires = Commentaire::getCommentairesFromBdd();

if (isset($_POST['pseudo']) && isset($_POST['contenu'])){

    $pseudo = $_POST['pseudo'];
    $contenu = $_POST['contenu'];
    $idBillet = $billet->getId();
    $commentaire = new Commentaire($pseudo, $contenu, $idBillet);

    $billets = Commentaire::saveBdd($commentaire);
    
}

//AFFICHER TOUT LES COMMENTAIRES