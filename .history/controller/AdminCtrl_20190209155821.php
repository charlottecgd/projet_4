<?php 

require_once("util/Util.php");
require_once("model/Billet.php");
require_once("model/Commentaire.php");
use projet4\util\Util;
use projet4\Model\Billet;
use projet4\Model\Commentaire;

class AdminCtrl extends BaseViewCtrl
{
    public function __construct(){
        parent::__construct();
    }
    /**
     * Initialisation des élements dont la view a besoin
     */
    protected function initViewElements(){
        $this->_viewElements = [];
        // set viewElements array...
    }

}

//Connection BDD
$connection = Util::getBdd();
    

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



   

