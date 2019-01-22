<?php

require_once("../model/Util.php");
use projet4\Model\util;

$connection = Util::getBdd();
$resultat = $connection->query('SELECT * FROM billet');
