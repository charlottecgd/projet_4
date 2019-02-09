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
}


