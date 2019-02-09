<?php
namespace projet4\Controller;
require_once("controller/BaseViewCtrl.php");
require_once("util/Util.php");
use projet4\Util\Util;
require_once("model/Billet.php");
use projet4\Model\Billet;

class AccueilCtrl extends BaseViewCtrl
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

}
