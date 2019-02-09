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

    }
}
