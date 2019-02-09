<?php
namespace projet4\connexion;
require_once("util/Util.php");
use projet4\util\Util;

class ConnexionUser 
{
    public function __construct(){
    }

    public function connectUser($email, $mp){
        $bddConnection  = Util::getBdd();
        $req = $bddConnection->prepare('SELECT id, mp FROM ecrivain WHERE email = :email');
        $req->execute(array('email' => $email));
        $resultat = $req->fetch();

        // Comparaison du pass envoyé via le formulaire avec la base
        $isPasswordCorrect = $mp == $resultat['mp']; //TODO : gerer avec password haché pour password_verify
    }
}
