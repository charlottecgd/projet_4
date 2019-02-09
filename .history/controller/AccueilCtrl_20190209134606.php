<?php

require_once("model/Util.php");
use projet4\Model\util;
require_once("model/Billet.php");
use projet4\Model\Billet;


$connection = Util::getBdd();

$billet = Billet::getLastBilletFromBdd();
