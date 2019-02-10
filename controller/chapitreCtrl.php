<?php
 require_once("controller/BaseViewCtrl.php");
 require_once("service/bdd/BddService.php");
 require_once("model/Billet.php");
 require_once("model/Commentaire.php");

class ChapitreCtrl extends BaseViewCtrl{

    private $_billet;
    private $_commentaires;

    public function __construct($queryParams, $postParams){
        parent::__construct($queryParams, $postParams);
    }

    protected function control(){
        //Billet à afficher
        $idBillet = $this->_queryParams['id'];
        try{
            $this->_billet = Billet::getBilletByIdFromBdd($idBillet);
        }
        catch(Exception $e){
            echo "Désolé il y a eu l'erreur : " . $e->getMessage();
        }
        //Definition des intentions de l'utilisateur
        $modeSignalerCommentaire = isset($this->_queryParams['signalComment']);
        $modePublicationCommentaire = isset($this->_postParams['pseudo']) && isset($this->_postParams['contenu']);
       
        if($modePublicationCommentaire){//poster un commentaire
            $pseudo = $this->_postParams['pseudo'];
            $contenu = $this->_postParams['contenu'];
            try{
                $commentaire = new Commentaire($pseudo, $contenu, $idBillet);
                $commentaire->saveBdd();
            }
            catch(Exception $e){
                echo "Désolé il y a eu l'erreur : " . $e->getMessage();
            }
        }else if($modeSignalerCommentaire){ //signaler un commentaire
            $id = $this->_queryParams['signalComment'];
            try{
                $commentaire = Commentaire::getCommentaireById($id);
                $date = date("Y-m-d H:i:s");
                $commentaire->setSignaledAt($date);
                Commentaire::updateCommentaire($commentaire);
            }
            catch(Exception $e){
                echo "Désolé il y a eu l'erreur : " . $e->getMessage();
            }  
        }
        //RECUPERER LES COMMENTAIRES
       $this->_commentaires = Commentaire::getNotModeratedCommentairesByIdBillet($idBillet);
   
    }

    protected function initViewElements(){
        $this->_viewElements = [];
        $this->_viewElements['billet'] = $this->_billet;
        $this->_viewElements['commentaires'] = $this->_commentaires;
    } 
}




