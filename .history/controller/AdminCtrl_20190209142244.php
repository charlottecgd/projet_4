<?php 

require_once("model/Util.php");
require_once("model/Billet.php");
require_once("model/Commentaire.php");
use projet4\Model\Util;
use projet4\Model\Billet;
use projet4\Model\Commentaire;

class AdminCtrl 
{
    private $_viewElements;

    public function __construct(){
        $this->initViewElements();
    }

    public function getBillet(){
        return $this->_billet;
    }

}

//Connection BDD
$connection = Util::getBdd();
session_start();
/*
 CONNEXION ADMIN
 */
if (!isset($_SESSION['id']) && !isset($_SESSION['email'])){
    if (!isset($_POST['email']) && !isset($_POST['mp'])){
        header('Location: http://localhost/projet_4/projet_4/view/connexion.php?error=true');//page de redirection
        exit();
    }
    $email = $_POST['email'];
    $mp = $_POST['mp'];

    $req = $connection->prepare('SELECT id, mp FROM ecrivain WHERE email = :email');
    $req->execute(array('email' => $email));
    $resultat = $req->fetch();

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = $_POST['mp'] == $resultat['mp']; //TODO : gerer avec password haché pour password_verify

    //Si le mp tapé ne correspond pas a celui de la BDD alors redirection vers page connexion 
    if (!$resultat || !$isPasswordCorrect){
        header('Location: http://localhost/projet_4/projet_4/view/connexion.php?error=true');//page de redirection
        exit();
    }else{//sinon 
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['email'] = $email;
    // echo 'Vous êtes connecté !';
    }
}else{
    /*
    POSTER UN BILLET
    */
    if (isset($_POST['titre']) && isset($_POST['contenu']) && !isset($_GET['updateBillet'])){
        echo"coucou";
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $idEcrivain = intval($_SESSION['id']);//
        $billet = new Billet($titre, $contenu, $idEcrivain);
        $billet->saveBdd();
        
    }else if (isset($_GET['updateBillet'])){//affiche un billet exisant
        $slug = $_GET['updateBillet'];
        echo "coucou2";
        try{
            $billet = Billet::getBilletBySlugFromBdd($slug);
        }
        catch(Exception $e){
            echo "Désolé il y a eu l'erreur : " . $e->getMessage();
            die();
        }
        if (isset($_POST['titre']) && isset($_POST['contenu'])){
            echo"coucou3";
            $titre = $_POST['titre'];
            $contenu = $_POST['contenu'];
            $billet->setTitre($titre);
            $billet->setContenu($contenu);
            $billet = Billet::updatebillet($billet);
        }
   }
     /*
    Preparer les objets à afficher
    */       
    $billets = Billet::getBilletsFromBdd();
    $commentaires = Commentaire::getCommentairesSignaledFromBdd();

   // moderer Commentaire
if(isset($_GET['moderateComment'])){
    $id = $_GET['moderateComment'];
    try{
    $commentaire = Commentaire::getCommentaireById($id);
    $date = date("Y-m-d H:i:s");
    $commentaire->setModeratedAt($date);
    Commentaire::updateCommentaire($commentaire);
    }
    catch(Exception $e){
        echo "Désolé il y a eu l'erreur : " . $e->getMessage();
        die();
    }
} 
 
if (isset($_GET['deleteBillet'])){
     $id = $_GET['deleteBillet'];
     try{
     $billet = Billet::deleteBilletBdd($id);
   }
    catch(Exception $e){
        echo "Désolé il y a eu l'erreur : " . $e->getMessage();
        die();
    }
}
}


   

