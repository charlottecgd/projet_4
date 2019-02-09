<?php
namespace projet4\controller;
use projet4\util\Util;
use projet4\model\Billet;

class AccueilCtrl extends BaseViewCtrl
{
    public function __construct($queryParams, $postParams){
        parent::__construct($queryParams, $postParams);
    }
    protected function control(){
    }
    protected function initViewElements(){
        $this->_viewElements = [];
        //dernier billet
        $this->_viewElements['lastBillet'] = Billet::getLastBilletFromBdd();
    }

}
