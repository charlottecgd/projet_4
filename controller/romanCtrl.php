<?php 
 require_once("controller/BaseViewCtrl.php");
 require_once("service/bdd/BddService.php");
 require_once("model/Billet.php");

class RomanCtrl extends BaseViewCtrl{

    private $_billets;

    public function __construct($queryParams, $postParams){
        parent::__construct($queryParams, $postParams);
    }


    protected function control(){
       $this->_billets = Billet::getBilletsFromBdd();
    }

    protected function initViewElements(){
        $this->_viewElements = [];
        //Afficher  les billets
        $this->_viewElements['billets'] = $this->_billets;
    }
}
 

