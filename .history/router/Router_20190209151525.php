<?php
namespace projet4\router;
class Router
{
    private function __construct(){

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
        }
    }

    private function onlyConnected(){
        session_start();
    }

    private function admin(){
        require('view/admin.php');
    }

    private function accueil(){
        require('view/accueil.php');
    }

    private function chapitre(){
        require('view/chapitre.php');
    }

    private function roman(){
        require('view/roman.php');
    }

    private function connexion(){
        require('view/connexion.php');
    }
}
