<?php
namespace projet4\router;
class Router
{
    public function __construct(){

    }
    public function admin(){
        require('view/admin.php');
    }

    public function accueil(){
        require('view/accueil.php');
    }

    public function chapitre(){
        require('view/chapitre.php');
    }

    public function roman(){
        require('view/roman.php');
    }

    public function connexion(){
        require('view/connexion.php');
    }

    public function route($queryParams){
        if (isset($queryParams['action'])) {
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


