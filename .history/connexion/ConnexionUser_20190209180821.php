<?php
namespace projet4\connexion;
require_once("util/Util.php");
use projet4\util\Util;

require_once("exception/BadCredentialsException.php");

class ConnexionUser 
{
    public function __construct(){
    }

    public static function connectUser($email, $mp){
        $bddConnection  = Util::getBdd();
        $req = $bddConnection->prepare('SELECT id, mp FROM ecrivain WHERE email = :email');
        $req->execute(array(
            'email' => $email
        ));
        $resultat = $req->fetch();
        if(!$resultat){// Mauvais id 
            throw new \BadCredentialsException();
        }else if(password_verify($mp, $resultat['mp'])){//Bons email mot de passe
            // on renseigne la session
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['email'] = $email;
            return true;
        }else{// Mauvais mot de passe 
            throw new \BadCredentialsException();
        }
    }
}
