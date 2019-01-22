<?php 
require_once("../model/Util.php");
use projet4\Model\util;

$connection = Util::getBdd();
$resultat = $connection->query('SELECT * FROM ecrivain');

if (isset($_GET['error'])){
  $errorConnexion = 'Mauvais identifiant ou mot de passe !';
}
?>