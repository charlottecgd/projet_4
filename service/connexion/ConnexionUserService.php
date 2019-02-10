<?php
 require_once("service/bdd/BddService.php");
 require_once("exception/BadCredentialsException.php");

class ConnexionUserService 
{
    public static function connectUser($email, $mp){

        $bddConnection  = BddService::getBdd();
        $req = $bddConnection->prepare('SELECT id, mp FROM ecrivain WHERE email = :email');
        $req->execute(array(
            'email' => $email
        ));
        $resultat = $req->fetch();
        
        if(!$resultat){
            // Mauvais id 
            throw new \BadCredentialsException();
        }else if(password_verify($mp, $resultat['mp'])){
            //Bons email mot de passe
            // on renseigne la session
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['email'] = $email;
            return true;
        }else{
            // Mauvais mot de passe 
            throw new \BadCredentialsException();
        }
    }
}
