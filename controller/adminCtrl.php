<?php 

require_once("../model/Util.php");
require_once("../model/Billet.php");
require_once("../model/Commentaire.php");
use projet4\Model\Util;
use projet4\Model\Billet;
use projet4\Model\Commentaire;

//Connection BDD
$connection = Util::getBdd();
session_start();
/*
 CONNEXION ADMIN
 */
if (!isset($_SESSION['id']) && !isset($_SESSION['email'])){
    if (!isset($_POST['email']) && !isset($_POST['mp'])){
        header('Location: http://localhost/projet_4/projet_4/view/connexion.php?error=true');//page de redirection
        exit();
    }
    $email = $_POST['email'];
    $mp = $_POST['mp'];

    $req = $connection->prepare('SELECT id, mp FROM ecrivain WHERE email = :email');
    $req->execute(array('email' => $email));
    $resultat = $req->fetch();

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = $_POST['mp'] == $resultat['mp']; //TODO : gerer avec password haché pour password_verify

    //Si le mp tapé ne correspond pas a celui de la BDD alors redirection vers page connexion 
    if (!$resultat || !$isPasswordCorrect){
        header('Location: http://localhost/projet_4/projet_4/view/connexion.php?error=true');//page de redirection
        exit();
    }else{//sinon 
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['email'] = $email;
    // echo 'Vous êtes connecté !';
    }
}else{
    /*
    POSTER UN BILLET
    */
    if (isset($_POST['titre']) && isset($_POST['contenu'])){
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $idEcrivain = intval($_SESSION['id']);//
        $billet = new Billet($titre, $contenu, $idEcrivain);
        $billet->saveBdd();
        
    }
     /*
    Preparer les objets à afficher
    */       
    $billets = Billet::getBilletsFromBdd();
    $commentaires = Commentaire::getCommentairesFromBdd();
                
   
   // SUPPRIMER BILLET
   //DELETE FROM `billet` WHERE `billet`.`id` = 2 
}


   

