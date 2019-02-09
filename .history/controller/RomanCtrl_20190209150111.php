<?php 

require_once("util/Util.php");
require_once("model/Billet.php");
use projet4\util\Util;
use projet4\Model\Billet;

//Connection BDD
$connection = Util::getBdd();

//AFFICHAGE DES BILLETS
$billets = Billet::getBilletsFromBdd();
$billet = Billet::getLastBilletFromBdd();
 

