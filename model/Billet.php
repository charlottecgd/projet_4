<?php
require_once("service/bdd/BddService.php");

class Billet 
{
    private $_id;
    private $_titre;
    private $_postDate;
    private $_contenu;
    private $_idEcrivain;
    private $_resume;

    public function __construct($titre, $contenu, $idEcrivain, $postDate = null, $id = null){
            $this->_titre = $titre;
            $this->_contenu = $contenu;
            $this->_idEcrivain = $idEcrivain;
            if($postDate){
                $this->_postDate = $postDate;
            }else{
                $this->_postDate = date("Y-m-d H:i:s");
            }
            $this->initResume();
            $this->_id = $id;
    }
    public function getId(){
        return $this->_id;
    }
    private function initResume(){
        $this->_resume = substr($this->_contenu, 0, 500);
    } 
    public function getResume(){
        return $this->_resume;
    }

    public function getTitre(){
        return $this->_titre ;
    }
    public function setTitre($titre){
        $this->_titre = $titre;
    }

    public function getContenu(){
        return $this->_contenu ;
    }
    public function setContenu($contenu){
        $this->_contenu = $contenu;
    }

    public function getPostDate(){
       return $this->_postDate;
    }

    public function getIdEcrivain(){
        return $this->_idEcrivain;
    }

    public function getHumanDate(){
        return date("d/m/Y H:i:s", strtotime($this->_postDate));
    }

    //METHODES ADMIN
    public static function deleteBilletBdd($id){
        $connection = BddService::getBdd();
        $reponse = $connection->exec('DELETE FROM billet WHERE id = '.$id);
    }
    public function saveBdd(){
        $connection = BddService::getBdd();
        $req = $connection->prepare('INSERT INTO billet (titre, contenu, postedDate, idEcrivain) VALUES(?, ?, ?, ? )');
        $resultat = $req->execute(array($this->_titre,$this->_contenu,$this->_postDate, $this->_idEcrivain));
    }
    public static function updatebillet($billet){
        $connection = BddService::getBdd();
        $req = $connection->prepare('UPDATE billet SET titre = :titre, contenu = :contenu  WHERE id = :id');
        $tab = [
            'titre'=> $billet->getTitre(), 
            'contenu'=> $billet->getContenu(),
            'id'=> $billet->getId()
        ];
        $req->execute($tab);
    }
    //METHODE ACCUEIL DERNIER BILLET
    public static function getLastBilletFromBdd(){
        $connection = BddService::getBdd();
        $reponse = $connection->query('SELECT * FROM billet ORDER BY id DESC LIMIT 1');
        $donnees = $reponse->fetch();
        if(!$donnees){
            throw new Exception('Aucun billet a afficher');
        }
        $billet = new Billet($donnees['titre'],$donnees['contenu'],$donnees['idEcrivain'],$donnees['postedDate'],$donnees['id']);
        return $billet;
    }


    //METHODE ROMAN 
    public static function getBilletsFromBdd(){
        $connection = BddService::getBdd();
        $reponse = $connection->query("SELECT * FROM billet");
        $billets = [];
        while ($donnees = $reponse->fetch()){
            $billet = new Billet($donnees['titre'],$donnees['contenu'],$donnees['idEcrivain'],$donnees['postedDate'],$donnees['id']);
            array_push($billets,$billet);
        }
        $reponse->closeCursor();
        return $billets;
    }
    
    //METHODE CHAPITRE
    public static function getBilletByIdFromBdd($id){
        $connection = BddService::getBdd();
        $reponse = $connection->prepare('SELECT * FROM billet WHERE id = :id');
        $reponse->execute(array('id' => $id));
        $donnees = $reponse->fetch();
        if(!$donnees){
            throw new Exception('Aucun billet avec cet id');
        }
        $billet = new Billet($donnees['titre'],$donnees['contenu'],$donnees['idEcrivain'],$donnees['postedDate'],$donnees['id']);
        return $billet;
       
    }

   
    
   
}
