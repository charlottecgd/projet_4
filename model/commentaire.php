<?php

namespace projet4\Model;

require_once("Util.php");

class Commentaire 
{
    private $_pseudo;
    private $_postDate;
    private $_contenu;
    private $_signaledAt;
    private $_moderateAt;
    private $_idBillet;
    private $_id;

    public function __construct($pseudo, $contenu, $idBillet, $postDate = null, $id = null){
        $this->_pseudo = $pseudo;
        $this->_contenu = $contenu;
        $this->_idBillet = $idBillet;
        $this->_id = $id;
        if($postDate){
            $this->_postDate = $postDate;
        }else{
            $this->_postDate = date("Y-m-d H:i:s");
        } 
        $this->_signaledAt = null;
        $this->_moderateAt = null;
    }

    public function getId(){
        return $this->_id ;
    }
    public function getPseudo(){
        return $this->_pseudo ;
    }
    public function setPseudo($pseudo){
        $this->_pseudo = $pseudo;
    }
    public function getContenu(){
        return $this->_contenu;
    }
    public function setContenu($contenu){
        $this->_contenu = $contenu;
    }
    public function getModerateAt(){
        return $this->_moderateAt;
    }
    public function getSignaledAt(){
        return $this->_signaledAt;
    }
    public function setSignaledAt($date){
        $this->_signaledAt = $date;
    }
    public function getPostDate(){
        return $this->_postDate;
    }
    public function getHumanDate(){
        return date("d/m/Y H:i:s", strtotime($this->_postDate));
    }

    public function getIdBillet(){
        return $this->_idBillet;
    }

    public static function getCommentairesFromBdd(){
        $connection = Util::getBdd();
        $reponse = $connection->query("SELECT * FROM commentaire");
        $commentaires = [];
        while ($donnees = $reponse->fetch()){
            $commentaire = new Commentaire($donnees['pseudo'],$donnees['contenu'],$donnees['idBillet'],$donnees['postedDate'],$donnees['id']);
            array_push($commentaires,$commentaire);
        }
        $reponse->closeCursor();
        return $commentaires;
    }
    public static function getCommentairesByIdBillet($idBillet){
        $connection = Util::getBdd();
        $response = $connection->prepare("SELECT * FROM commentaire WHERE idBillet = :idBillet");
        $params = array('idBillet' => $idBillet);
        $response->execute($params);
        $commentaires = [];
        while ($donnees = $response->fetch()){
            $commentaire = new Commentaire($donnees['pseudo'],$donnees['contenu'],$donnees['idBillet'],$donnees['postedDate'],$donnees['id']);
            array_push($commentaires,$commentaire);
        }
        $response->closeCursor();
        return $commentaires;
    }
    
    public static function saveBdd($commentaire){
        $connection = Util::getBdd();
        $req = $connection->prepare('INSERT INTO commentaire (pseudo, contenu, postedDate, moderateAt, signaledAt, idBillet) VALUES(?, ?, ?, ?, ?, ?)');
        $resultat = $req->execute(array($commentaire->getPseudo(),$commentaire->getContenu(),$commentaire->getPostDate(),$commentaire->getModerateAt(),$commentaire->getSignaledAt(),$commentaire->getIdBillet()));
    }

    public static function signalCommentById($id){
        $connection = Util::getBdd();
        $reponse = $connection->prepare("SELECT * FROM commentaire WHERE id = :id");
        $reponse->execute(array('id' => $id));
        $donnees = $reponse->fetch();
        $commentaire = new Commentaire($donnees['pseudo'],$donnees['contenu'],$donnees['idBillet'],$donnees['postedDate'],$donnees['id']);
        $date = date("Y-m-d H:i:s");
        $commentaire->setSignaledAt($date);
        $commentaire ->saveBdd($commentaire);
        
    }
}