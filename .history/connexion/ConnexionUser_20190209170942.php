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

        if()
    }
}
