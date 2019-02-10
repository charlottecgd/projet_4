<?php
require_once("controller/BaseViewCtrl.php");
require_once("model/Billet.php");

class AccueilCtrl extends BaseViewCtrl
{
    private $_lastBillets;

    public function __construct($queryParams, $postParams){
        parent::__construct($queryParams, $postParams);
    }
    protected function control(){
        $this->_lastBillets = Billet::getLastBilletFromBdd();
    }
    protected function initViewElements(){
        $this->_viewElements = [];
        //dernier billet
        $this->_viewElements['lastBillet'] = $this->_lastBillets;
    }

}
