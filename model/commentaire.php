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

    public function __construct($pseudo, $contenu){
        $this->setPseudo($pseudo);
        $this->setcontenu($contenu);
        $this->_postDate = date("d/m/Y H:i:s"); 
        $util = new Util;
        $this->_signaled = false;
        $this->_moderate = false;
        
}
public function getPseudo(){
    return $this->_pseudo ;
}
public function setPseudo($titre){
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

}