<?php
namespace projet4\Controller;
class MainCtrl 
{
    public function __construct(){

    }
    public function admin(){

        require('view/admin.php');
    }

    public function accueil(){
        $posts = getPosts();

        require('view/accueil.php');
    }

    public function chapitre(){
        $posts = getPosts();

        require('view/chapitre.php');
    }

    public function roman(){
        $posts = getPosts();

        require('view/roman.php');
    }

    public function connexion(){
        $posts = getPosts();

        require('view/connexion.php');
    }
}


