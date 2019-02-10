<?php 
 require_once("controller/BaseViewCtrl.php");
 require_once("service/bdd/BddService.php");
 require_once("service/connexion/ConnexionUserService.php");
 require_once("exception/BadCredentialsException.php");

class connexionCtrl extends BaseViewCtrl
{
    public function __construct($queryParams, $postParams){
        parent::__construct($queryParams, $postParams);
    }

    protected function initViewElements(){
        $this->_viewElements = [];
        if (isset($this->_queryParams['error'])){
          $this->_viewElements['errorConnexion'] = 'Mauvais identifiant ou mot de passe !';
        }
    }

    protected function control(){
      // si on a les données de formulaire concernant la connexion on tente de connecter l'service/utilsateur
      if (isset($this->_postParams['email']) && isset($this->_postParams['mp'])){
        try{
          ConnexionUserService::connectUser($this->_postParams['email'], $this->_postParams['mp']);
          header('Location: ?action=admin');//page de redirection
          exit();
        }catch(\Exception $e){
          header('Location: ?action=connexion&error=true');//page de redirection
          exit();
        }
        
      }
    }
}

?>