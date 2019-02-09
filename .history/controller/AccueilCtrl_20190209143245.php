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

    public function getViewElements(){
        return $this->_viewElements;
    }
    /**
     * Initialisation des élements dont la view a besoin
     */
    private function initViewElements(){
        $this->_viewElements = [];
        //dernier billet
        $this->_viewElements['lastBillet'] = Billet::getLastBilletFromBdd();
    }

}
