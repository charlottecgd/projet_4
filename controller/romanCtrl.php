<?php 

require_once("../model/Util.php");
require_once("../model/Billet.php");
use projet4\Model\Util;
use projet4\Model\Billet;

//Connection BDD
$connection = Util::getBdd();

//AFFICHAGE DES BILLETS
$billets = Billet::getBilletsFromBdd();
 

