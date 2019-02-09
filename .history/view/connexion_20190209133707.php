<?php 
require_once("controller/connexionCtrl.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog Jean Forteroche</title>
        <link rel="stylesheet" href="public/CSS/admin.css">
        <script>
            if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
          }
        </script>
    </head>
 
    <body>
      <form id="connexion" action="http://localhost/projet_4/projet_4/view/admin.php" method="post">
      <h3>Connexion reservée à l'admninistrateur</h3>
      <div>
        <label for="mail">E-mail :</label>
        <input type="email" id="mail" name="email">
      </div>
      <div>
        <label for="msg">Mot de passe</label>
        <input type="password" name="mp">
      </div>
      <div><button type="submit" value="submit">Connexion</button></div>
      <p><?php
       if (isset($errorConnexion)){
       echo $errorConnexion;
       }
       ?></p>
      </form>
    </body>
</html>