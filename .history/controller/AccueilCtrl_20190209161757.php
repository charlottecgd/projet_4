<?php
namespace projet4\controller;
require_once("util/Util.php");
use projet4\util\Util;
require_once("model/Billet.php");
use projet4\model\Billet;

class AccueilCtrl extends BaseViewCtrl
{
    public function __construct($queryParams, $postParams){
        parent::__construct($queryParams, $postParams);
    }
    /**
     * Initialisation des élements dont la view a besoin
     */
    protected function initViewElements(){
        $this->_viewElements = [];
        //dernier billet
        $this->_viewElements['lastBillet'] = Billet::getLastBilletFromBdd();
    }

}
