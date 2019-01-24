<?php

namespace projet4\Model;

require_once("Util.php");

class Commentaire 
{
    private $_pseudo;
    private $_postDate;
    private $_contenu;
    private $_signaled;
    private $_moderate;
    private $_idBillet;

    public function __construct($pseudo, $contenu, $idBillet){
        $this->setPseudo($pseudo);
        $this->setcontenu($contenu);
        $this->_postDate = date("Y-m-d H:i:s");
        $util = new Util;
        $this->_signaled = false;
        $this->_moderate = false;
        $this->_idBillet = $idBillet;
        
    }
    public function getPseudo(){
        return $this->_pseudo ;
    }
    public function setPseudo($pseudo){
        $this->_pseudo = $pseudo;
    }
    public function getContenu(){

    }
    public function setContenu($contenu){
        $this->_contenu = $contenu;
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
}