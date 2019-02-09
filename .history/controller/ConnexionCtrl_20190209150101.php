<?php 
require_once("util/Util.php");
use projet4\util\util;

$connection = Util::getBdd();
$resultat = $connection->query('SELECT * FROM ecrivain');

if (isset($_GET['error'])){
  $errorConnexion = 'Mauvais identifiant ou mot de passe !';
}
?>