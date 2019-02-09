<?php

class BadCredentialsException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = 'Mauvais identifiant ou mot de passe";
    return $errorMsg;
  }
}