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
        $req = $bddConnection->prepare('SELECT id, mp FROM ecrivain WHERE email = :email AND mp = :mp');
        $req->execute(array(
            'email' => $email, 
            'mp' =>$mp
        ));
        $resultat = $req->fetch();
        if(!$resultat){// Mauvais id ou mot de passe
            // redirection vers page de connexion avec paramètre indiquant une erreur
            header('Location: http://localhost/projet_4/projet_4/view/connexion.php?error=true');
            exit();
        }else{//Bons email mot de passe
            // on renseigne la session
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['email'] = $email;
            return true;
        }
    }
}
