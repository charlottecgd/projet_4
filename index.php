<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Jean Forteroche</title>
        <link rel="stylesheet" href="public/css/webfonts.css">
        <link rel="stylesheet" href="public/css/theme.css">
        <link rel="stylesheet" href="public/css/header.css">
        <link rel="stylesheet" href="public/css/accueil.css">
        <link rel="stylesheet" href="public/css/roman.css">
        <link rel="stylesheet" href="public/css/chapitre.css">
        <link rel="stylesheet" href="public/css/admin.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
       
       <script>
           //empecher le navigateur de demander le renvoi du formulaire quand on recharge une page
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </head>
        <body>
            <?php
                require_once('Router.php');
                $router = new Router();
                $router->route();
            ?>
        </body>
        
</html>