<?php 

require_once("../model/Util.php");
use projet4\Model\util;

//Connection BDD
$connection = Util::getBdd();

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
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['email'] = $email;
   // echo 'Vous êtes connecté !';
}
  

