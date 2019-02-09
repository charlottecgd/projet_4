<?php
namespace projet4\controller;
require_once("model/Billet.php");
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
