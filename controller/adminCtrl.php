<?php 
require_once("controller/BaseViewCtrl.php");
 require_once("service/bdd/BddService.php");
 require_once("model/Billet.php");
 require_once("model/Commentaire.php");

class AdminCtrl extends BaseViewCtrl
{
    private $_billet;
    private $_billets;
    private $_signaledComments;
    private $_modeBilletExistant;
    private $_commentaires;

    public function __construct($queryParams, $postParams){
        parent::__construct($queryParams, $postParams);
    }
    protected function control(){
        /*
        GESTION DES BILLETS
        */
        //Definition des intentions de l'utilisateur
        $modeBilletExistant = isset($this->_queryParams['id']);
        $this->_modeBilletExistant = $modeBilletExistant;
        $modePublication = isset($this->_postParams['titre']) && isset($this->_postParams['contenu']);
        $modeSuppression = isset($this->_postParams['deleteBillet']);

        //Suppression d'un billet si demandé
        if($modeSuppression){
            $id = $this->_postParams['deleteBillet'];
            try{
                Billet::deleteBilletBdd($id);
            }
            catch(Exception $e){
                echo "Désolé il y a eu l'erreur : " . $e->getMessage();
            }
        }
        else if($modeBilletExistant){// afficher un billet existant
            $idBillet = $this->_queryParams['id'];
            try{
                $billet = Billet::getBilletByIdFromBdd($idBillet);
                $this->_billet = $billet;
            }
            catch(Exception $e){
                echo "Désolé il y a eu l'erreur : " . $e->getMessage();
            }
            if($modePublication){// modifier le billet affiché
                $titre = $this->_postParams['titre'];
                $contenu = htmlspecialchars_decode($this->_postParams['contenu']);
                $this->_billet->setTitre($titre);
                $this->_billet->setContenu($contenu);
                try{
                    Billet::updatebillet($billet);
                }
                catch(Exception $e){
                    echo "Désolé il y a eu l'erreur : " . $e->getMessage();
                }
            }
        }else if($modePublication){// créer un nouveau billet
            $titre = $this->_postParams['titre'];
            $contenu = htmlspecialchars_decode($this->_postParams['contenu']);
            $idEcrivain = intval($_SESSION['id']);
            $this->_billet = new Billet($titre, $contenu, $idEcrivain);
            try{
                $this->_billet->saveBdd();
            }
            catch(Exception $e){
                echo "Désolé il y a eu l'erreur : " . $e->getMessage();
            }
        }
        // Récupération de tous les billets  (après éventuelles modifications de bdd)  
        $this->_billets = Billet::getBilletsFromBdd();
        /*
        GESTION DES COMMENTAIRES
        */
        // Récupération des commentaires signalés
        $modeModeration = isset($this->_queryParams['moderateComment']);
        if($modeModeration){// Modérer un commentaire
            $id = $this->_queryParams['moderateComment'];
            try{
                $commentaire = Commentaire::getCommentaireById($id);
                $date = date("Y-m-d H:i:s");
                $commentaire->setModeratedAt($date);
                Commentaire::updateCommentaire($commentaire);
            }
            catch(Exception $e){
                echo "Désolé il y a eu l'erreur : " . $e->getMessage();
            }
        }
        
        $this->_signaledComments = Commentaire::getCommentairesSignaledFromBdd();
    }
    protected function initViewElements(){
        $this->_viewElements = [];
        $this->_viewElements['billet'] = $this->_billet;
        $this->_viewElements['billets'] = $this->_billets;
        $this->_viewElements['modeBilletExistant'] = $this->_modeBilletExistant;
        $this->_viewElements['commentaires'] = $this->_signaledComments;
    }   

}



   

