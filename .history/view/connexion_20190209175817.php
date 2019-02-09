<div id="connexion">
  <form action="?action=connexion" method="post">
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
       if (isset($viewElements['errorConnexion'])){
        echo $viewElements['errorConnexion'];
       }
       ?></p>
    </form>
</div>
      