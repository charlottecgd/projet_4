<?php
namespace projet4\Controller;

abstract class BaseCtrl 
{
    private $_viewElements;

    public function __construct(){
        $this->initViewElements();
    }

    public function getViewElements(){
        return $this->_viewElements;
    }

    abstract protected function initViewElements(){
        $this->_viewElements = [];
        //dernier billet
        $this->_viewElements['lastBillet'] = Billet::getLastBilletFromBdd();
    }
}
