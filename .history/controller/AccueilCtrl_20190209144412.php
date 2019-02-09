<?php
namespace projet4\Controller;
require_once("controller/BaseCtrl.php");
require_once("model/Util.php");
use projet4\Model\Util;
require_once("model/Billet.php");
use projet4\Model\Billet;

class AccueilCtrl extends BaseCtrl
{
    public function __construct(){
        parent::__construct();
    }
    /**
     * Initialisation des élements dont la view a besoin
     */
    protected function initViewElements(){
        $this->_viewElements = [];
        //dernier billet
        $this->_viewElements['lastBillet'] = Billet::getLastBilletFromBdd();
    }

    private function getViewElements(){
        return parent::_viewElements;
    }

}
