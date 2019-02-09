<?php 
require_once("util/Util.php");
use projet4\util\util;

class connexionCtrl extends BaseViewCtrl
{
    public function __construct(){
        parent::__construct();
    }
    /**
     * Initialisation des élements dont la view a besoin
     */
    protected function initViewElements(){
        $this->_viewElements = [];
       
    }

}






$connection = Util::getBdd();
$resultat = $connection->query('SELECT * FROM ecrivain');

if (isset($_GET['error'])){
  $errorConnexion = 'Mauvais identifiant ou mot de passe !';
}
?>