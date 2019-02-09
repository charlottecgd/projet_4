<?php
namespace projet4\Controller;

require_once("model/Util.php");
use projet4\Model\util;
require_once("model/Billet.php");
use projet4\Model\Billet;

class MainCtrl 
{
    
    public function __construct(){

    }

}




$connection = Util::getBdd();

$billet = Billet::getLastBilletFromBdd();
