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
//AFFICHER CHAPITRE

//POSTER UN COMMENTAIRE
if (isset($_POST['pseudo']) && isset($_POST['contenu'])){
    $pseudo = $_POST['pseudo'];
    $contenu = $_POST['contenu'];
    $idBillet = intval($_SESSION['id']);
    $commentaire = new Commentaire($pseudo, $contenu, $idBillet);

    $req = $connection->prepare('INSERT INTO commentaire (pseudo, contenu, postedDate, signaled, moderate, idBillet) VALUES(?, ?, ?, ?, ?, ?)');
    $resultat = $req->execute(array($commentaire->getPseudo(),$commentaire->getContenu(),$commentaire->getPostDate(),$commentaire->_signaled, $commentaire->_moderate, $commentaire->getIdBillet()));
    
}

//AFFICHER TOUT LES COMMENTAIRES