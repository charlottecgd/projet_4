<?php
namespace projet4\router;
use projet4\controller\AccueilCtrl;
use projet4\connexion\ConnexionCtrl;
class Router
{

    private $_queryParams;
    private $_postParams;

    public function __construct(){
        session_start();
        $this->_queryParams = $this->secureParams($_GET);
        $this->_postParams = $this->secureParams($_POST);
    }

    public function route(){
        require_once("controller/BaseViewCtrl.php");
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

    private function onlyConnected($requiredView){
        $connected = isset($_SESSION['id']) && isset($_SESSION['email']);
        if(!$connected){
            header('Location: ?action=connexion'); 
        }else{
            require_once($requiredView);
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
        $this->onlyConnected('view/admin.php');
    }

    private function accueil(){
        require_once("controller/accueilCtrl.php");
        
        $ctrl = new AccueilCtrl($this->_queryParams, $this->_postParams);
        $viewElements = $ctrl->getViewElements();
        require_once('view/header-public.php');
        require_once('view/accueil.php');
    }

    private function chapitre(){
        require_once('view/chapitre.php');
    }

    private function roman(){
        require_once('view/roman.php');
    }

    private function connexion(){
        require_once("connexion/ConnexionCtrl.php");
        $ctrl = new ConnexionCtrl($this->_queryParams, $this->_postParams);
        $viewElements = $ctrl->getViewElements();
        require_once('view/connexion.php');
    }
}
