<?php 

namespace projet4\Controller;
require_once("util/Util.php");
use projet4\util\util;

class connexionCtrl extends BaseViewCtrl
{
    public function __construct($queryParams, $postParams){
        parent::__construct($queryParams, $postParams);
    }

    protected function initViewElements(){
        $this->_viewElements = [];
    }

    protected function control(){
      // si on a les données de formulaire concernant la connexion
      if (isset($postParams['email']) && isset($postParams['mp'])){
        $this->connectUser($postParams['email'], $postParams['mp']);
      }
    }

    private function connect
}

if (!isset($_POST['email']) && !isset($_POST['mp'])){
  header('Location: http://localhost/projet_4/projet_4/view/connexion.php?error=true');//page de redirection
  exit();
}
$email = $_POST['email'];
$mp = $_POST['mp'];

$req = $connection->prepare('SELECT id, mp FROM ecrivain WHERE email = :email');
$req->execute(array('email' => $email));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = $_POST['mp'] == $resultat['mp']; //TODO : gerer avec password haché pour password_verify

//Si le mp tapé ne correspond pas a celui de la BDD alors redirection vers page connexion 
if (!$resultat || !$isPasswordCorrect){
  header('Location: http://localhost/projet_4/projet_4/view/connexion.php?error=true');//page de redirection
  exit();
}else{//sinon 
  $_SESSION['id'] = $resultat['id'];
  $_SESSION['email'] = $email;
// echo 'Vous êtes connecté !';
}


$connection = Util::getBdd();
$resultat = $connection->query('SELECT * FROM ecrivain');

if (isset($_GET['error'])){
  $errorConnexion = 'Mauvais identifiant ou mot de passe !';
}
?>