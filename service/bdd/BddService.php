<?php

class BddService{

    public static function getBdd(){
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=jeanForteroche;charset=utf8', 'root', '');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $bdd;
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        
    }
}