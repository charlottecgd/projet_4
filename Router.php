<?php

class Router
{

    private $_queryParams;
    private $_postParams;

    public function __construct(){

        // on démarre une session 
        session_start();

        // on sécurise le contenu de $_GET et $_POST 
        $this->_queryParams = $this->secureParams($_GET);
        $this->_postParams = $this->secureParams($_POST);
        
        // on détruit les $_GET et $_POST pour s'assurer qu'ils ne seront pas réutilisés tels quels
        unset($_GET);
        unset($_POST);
    }

    public function route(){
        if (isset($this->_queryParams['action'])) {
            
            switch ($this->_queryParams['action']) {
                case "admin" : 
                    $this->admin(); 
                    break;
                case "connexion" : 
                    $this->connexion(); 
                    break;
                case "chapitre" : 
                    $this->chapitre(); 
                    break;
                case "roman" : 
                    $this->roman(); 
                    break;
                case "accueil" : 
                    $this->accueil(); 
                    break;
                default:
                    $this->accueil(); 
                    break;
            }
        }else{
            $this->accueil(); 
        }
    }

    private function userConnected(){
        $connected = isset($_SESSION['id']) && isset($_SESSION['email']);
        if(!$connected){
            header('Location: ?action=connexion'); 
            return false;
        }else{
            return true;
        }
    }

    private function secureParams($paramsArray){
        $securedParamsArray = [];
        foreach($paramsArray as $key => $param){
             $securedParamsArray[$key] = htmlspecialchars($param);
        }
        return $securedParamsArray;
    }

    private function admin(){
        if($this->userConnected()){
            require_once("controller/AdminCtrl.php");
            $ctrl = new AdminCtrl($this->_queryParams, $this->_postParams);
            $viewElements = $ctrl->getViewElements();
            require_once('view/header-admin.php');
            require_once('view/admin.php');
        }
    }

    private function accueil(){
        require_once("controller/AccueilCtrl.php");
        $ctrl = new AccueilCtrl($this->_queryParams, $this->_postParams);
        $viewElements = $ctrl->getViewElements();
        require_once('view/header-public.php');
        require_once('view/accueil.php');
    }

    private function chapitre(){
        require_once("controller/ChapitreCtrl.php");
        $ctrl = new ChapitreCtrl($this->_queryParams, $this->_postParams);
        $viewElements = $ctrl->getViewElements();
        require_once('view/header-public.php');
        require_once('view/chapitre.php');
    }

    private function roman(){  
        require_once("controller/RomanCtrl.php");
        $ctrl = new RomanCtrl($this->_queryParams, $this->_postParams);
        $viewElements = $ctrl->getViewElements();
        require_once('view/header-public.php');
        require_once('view/roman.php');
    }

    private function connexion(){
        require_once("controller/ConnexionCtrl.php");
        $ctrl = new ConnexionCtrl($this->_queryParams, $this->_postParams);
        $viewElements = $ctrl->getViewElements();
        require_once('view/connexion.php');
    }
}
