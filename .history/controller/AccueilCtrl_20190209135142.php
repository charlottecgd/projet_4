<?php
namespace projet4\Controller;

require_once("model/Util.php");
use projet4\Model\util;
require_once("model/Billet.php");
use projet4\Model\Billet;

class MainCtrl 
{
    private $_billet;

    public function __construct(){
        $this_billet = Billet::getLastBilletFromBdd();
    }

    public function getBillet(){
        return $this->_billet;
    }

}
