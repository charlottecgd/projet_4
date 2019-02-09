<?php
namespace projet4\router;
class Router
{

    private $_queryParams;
    private $_payload;

    public function __construct(){
        $this->_queryParams = $_GET;
        $this->_payload = $_POST;
    }

    public function route($queryParams){
        if (isset($queryParams['action'])) {
            switch ($queryParams['action']) {
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
        session_start();
        $connected = isset($_SESSION['id']) && isset($_SESSION['email']);
        if(!$connected){
            $this->connexion(); 
        }else{
            require_once($requiredView);
        }
    }

    private function admin(){
        $this->onlyConnected('view/admin.php');
    }

    private function accueil(){
        require_once('view/accueil.php');
    }

    private function chapitre(){
        require_once('view/chapitre.php');
    }

    private function roman(){
        require_once('view/roman.php');
    }

    private function connexion(){
        require_once('view/connexion.php');
    }
}
