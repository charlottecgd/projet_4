<?php
namespace projet4\router;
class Router
{
    private function __construct(){

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

    public function route($queryParams){
        if (isset($queryParams['action'])) {
            switch ($queryParams['action']) {
                case "admin" : 
                    $this->admin(); 
                    break;
            }



            if ($queryParams['action'] == 'admin') {
                $this->admin();
            }
            else if ($queryParams['action'] == 'connexion') {
                $this->connexion();
            }else if($queryParams['action'] == 'chapitre'){
                $this->chapitre();
            }else if($queryParams['action'] == 'roman'){
                $this->roman();
            }else if($queryParams['action'] == 'accueil'){
                $this->accueil();
            }else{
                $this->accueil();
            }
        }
        else {
            $this->accueil();
        }
    }
}


