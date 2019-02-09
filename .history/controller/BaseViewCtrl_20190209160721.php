<?php
namespace projet4\Controller;

abstract class BaseViewCtrl 
{
    protected $_queryParams;
    protected $_postParams;
    protected $_viewElements;

    public function __construct($queryParams, $postParams){
        $this->initViewElements();
    }

    public function getViewElements(){
        return $this->_viewElements;
    }

    abstract protected function initViewElements();
}
