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

    public function __construct($titre, $contenu, $idEcrivain){
            $this->setTitre($titre);
            $this->setContenu($contenu);
            $this->_idEcrivain = $idEcrivain;
            $this->_postDate = date("Y-m-d H:i:s");
            $util = new Util;
            $this->_slug = $util->slugify($titre);
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

   
}
