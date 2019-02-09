<?php
require_once('router/Router.php');
use projet4\router\Router;

$mainController = new Router();
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'admin') {
        $mainController->admin();
    }
    else if ($_GET['action'] == 'connexion') {
        $mainController->connexion();
    }else if($_GET['action'] == 'chapitre'){
        $mainController->chapitre();
    }else if($_GET['action'] == 'roman'){
        $mainController->roman();
    }else if($_GET['action'] == 'accueil'){
        $mainController->accueil();
    }else{
        $mainController->accueil();
    }
}
else {
    $mainController->accueil();
}