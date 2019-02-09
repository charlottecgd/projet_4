<?php
require_once('router/Router.php');
use projet4\router\Router;

$router = new Router();
$router->route($_GET);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Jean Forteroche</title>
        <link rel="stylesheet" href="public/CSS/webfonts.css">
        <link rel="stylesheet" href="public/CSS/accueil.css">
        <link rel="stylesheet" href="public/CSS/theme.css">
        <link rel="stylesheet" href="public/CSS/header.css">


        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </head>
 
    <body>

    
    </body>
</html>