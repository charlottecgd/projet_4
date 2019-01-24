<?php

namespace projet4\Model;

require_once("Util.php");

class Billet 
{
    private $_titre;
    private $_postDate;
    private $_contenu;
    private $_slug;
    private $_idEcrivain;
    private $_resume;

    public function __construct($titre, $contenu, $idEcrivain, $postDate = null){
            $this->_titre = $titre;
            $this->_contenu = $contenu;
            $this->_idEcrivain = $idEcrivain;
            if($postDate){
                $this->_postDate = $postDate;
            }else{
                $this->_postDate = date("Y-m-d H:i:s");
            }
            $util = new Util;
            $this->_slug = $util->slugify($titre);
            $this->initResume();
    }
    private function initResume(){
        $this->_resume = substr($this->_contenu, 0, 50);
    } 
    private function getResume(){
        return $this->_resume;
    }

    public function getTitre(){
        return $this->_titre ;
    }
    public function setTitre($titre){
        $this->_titre = $titre;
        $util = new Util;
        $this->_slug = $util->slugify($titre);
    }

    public function getContenu(){
        return $this->_contenu ;
    }
    public function getSlug(){
        return $this->_slug ;
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

    public static function getBilletsFromBdd(){
        $connection = Util::getBdd();
        $reponse = $connection->query("SELECT * FROM billet");
        $billets = [];
        while ($donnees = $reponse->fetch()){
            $billet = new Billet($donnees['titre'],$donnees['contenu'],$donnees['idEcrivain']);
            array_push($billets,$billet);
        }
        $reponse->closeCursor();
        return $billets;
    }
   
   
}
