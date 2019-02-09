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
        $req = $bddConnection->prepare('SELECT id, mp FROM ecrivain WHERE email = :email AND mp = :mp');
        $req->execute(array(
            'email' => $email, 
            'mp' =>$mp
        ));
        $resultat = $req->fetch();
        if(!$resultat){// Mauvais id ou mot de passe
            throw new \BadCredentialsException();
        }else{//Bons email mot de passe
            // on renseigne la session
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['email'] = $email;
            return true;
        }
    }
}
