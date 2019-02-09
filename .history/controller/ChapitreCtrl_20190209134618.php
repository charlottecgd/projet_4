<?php

require_once("model/Util.php");
require_once("model/Billet.php");
require_once("model/Commentaire.php");
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
    try{
        $commentaire = new Commentaire($pseudo, $contenu, $idBillet);
        $commentaire->saveBdd();
    }
    catch(Exception $e){
        echo "Désolé il y a eu l'erreur : " . $e->getMessage();
        die();
    }
}
else if(isset($_GET['signalComment'])){
    $id = $_GET['signalComment'];
    try{
        $commentaire = Commentaire::getCommentaireById($id);
        $date = date("Y-m-d H:i:s");
        $commentaire->setSignaledAt($date);
        Commentaire::updateCommentaire($commentaire);
    }
    catch(Exception $e){
        echo "Désolé il y a eu l'erreur : " . $e->getMessage();
        die();
    }  
}

//RECUPERER LES COMMENTAIRES

$commentaires = Commentaire::getNotModeratedCommentairesByIdBillet($idBillet);

