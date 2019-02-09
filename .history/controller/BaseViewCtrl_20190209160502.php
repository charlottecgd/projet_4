<?php
namespace projet4\Controller;

abstract class BaseViewCtrl 
{
    protected $_viewElements;

    public function __construct($queryParams, $payload){
        $this->initViewElements();
    }

    public function getViewElements(){
        return $this->_viewElements;
    }

    abstract protected function initViewElements();
}
