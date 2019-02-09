<?php
require_once('router/Router.php');
use projet4\router\Router;

$router = new Router();
$router->route($_GET);

