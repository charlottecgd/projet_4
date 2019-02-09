<?php
namespace projet4\Controller;

abstract class BaseCtrl 
{
    protected $_viewElements;

    public function __construct(){
        $this->initViewElements();
    }

    protected function getViewElements(){
        return $this->_viewElements;
    }

    abstract protected function initViewElements();
}
