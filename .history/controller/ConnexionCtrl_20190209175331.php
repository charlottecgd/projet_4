<?php 

namespace projet4\Controller;
require_once("util/Util.php");
use projet4\util\Util;
require_once("connexion/ConnexionUser.php");
use projet4\connexion\ConnexionUser;
require_once("exception/BadCredentialsException.php");
use \Exception;

class connexionCtrl extends BaseViewCtrl
{
    public function __construct($queryParams, $postParams){
        parent::__construct($queryParams, $postParams);
    }

    protected function initViewElements(){
        $this->_viewElements = [];
        if (isset($queryParams['error'])){
          $this->_viewElements['errorConnexion'] = 'Mauvais identifiant ou mot de passe !';
        }
    }

    protected function control(){
      // si on a les données de formulaire concernant la connexion on tente de connecter l'utilsateur
      if (isset($this->_postParams['email']) && isset($this->_postParams['mp'])){
        try{
          ConnexionUser::connectUser($this->_postParams['email'], $this->_postParams['mp']);
        }catch(\Exception $e){
          header('Location: ?action=connexion&error=true');//page de redirection
          exit();
        }
        
      }
    }
}

?>