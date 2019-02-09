<?php
require_once('router/Router.php');
use projet4\router\Router;

$router = new Router();
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'admin') {
        $router->admin();
    }
    else if ($_GET['action'] == 'connexion') {
        $router->connexion();
    }else if($_GET['action'] == 'chapitre'){
        $router->chapitre();
    }else if($_GET['action'] == 'roman'){
        $router->roman();
    }else if($_GET['action'] == 'accueil'){
        $router->accueil();
    }else{
        $router->accueil();
    }
}
else {
    $router->accueil();
}