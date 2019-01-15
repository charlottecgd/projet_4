<?php

// require_once("../model/Billet.php");
//use projet4\Model\Billet;

require_once("../model/Util.php");
use projet4\Model\util;

$connection = Util::getBdd();
$resultat = $connection->query('SELECT * FROM ecrivain');
$donnees = $resultat->fetch();
var_dump($donnees);