<?php

namespace projet4\Model;

require_once("Util.php");

class Billet 
{
    private $_titre;
    private $_postDate;
    private $_contenu;
    private $_slug;
    private $_ecrivain;

    public function __construct($titre, $contenu){
            $this->setTitre($titre);
            $this->setcontenu($contenu);
            $this->_postDate = date("d/m/Y H:i:s");
            $util = new Util;
            $this->_slug = $util->slugify($titre);
    }

    public function getTitre(){
        return $this->_titre ;
    }
    public function setTitre($titre){
        $this->_titre = $titre;
    }



    public function getContenu(){

    }
    public function setContenu($contenu){
        $this->_contenu = $contenu;
    }

    public function getPostDate(){
       return $this->_postDate;
    }

   
}
