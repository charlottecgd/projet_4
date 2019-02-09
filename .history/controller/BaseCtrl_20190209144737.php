<?php
namespace projet4\Controller;

abstract class BaseCtrl 
{
    protected $_viewElements;

    public function __construct(){
        $this->initViewElements();
    }

    abstract protected function initViewElements();
}
