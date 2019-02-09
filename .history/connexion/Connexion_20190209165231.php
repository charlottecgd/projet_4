<?php
namespace projet4\connexion;

class Connexion 
{
    protected $_queryParams;
    protected $_postParams;
    protected $_viewElements;

    public function __construct($queryParams, $postParams){
        $this->_queryParams = $queryParams;
        $this->_postParams = $postParams;
        $this->control();
        $this->initViewElements();
    }

    public function getViewElements(){
        return $this->_viewElements;
    }

    
    /**
     * Actions du controleur
     */
    abstract protected function control();
    
    /**
     * Initialisation des élements dont la view a besoin
     */
    abstract protected function initViewElements();
}
