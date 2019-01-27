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
try{
    $billet = Billet::getBilletBySlugFromBdd($slug);
}
catch(Exception $e){
    echo "Désolé il y a eu l'erreur : " . $e->getMessage();
    die();
}
$idBillet = $billet->getId();
//POSTER UN COMMENTAIRE

if (isset($_POST['pseudo']) && isset($_POST['contenu'])){

    $pseudo = $_POST['pseudo'];
    $contenu = $_POST['contenu'];
    $commentaire = new Commentaire($pseudo, $contenu, $idBillet);
    $billets = Commentaire::saveBdd($commentaire);
    
}

//RECUPERER LES COMMENTAIRES
$commentaires = Commentaire::getCommentairesByIdBillet($idBillet);

