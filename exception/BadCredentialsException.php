<?php
class BadCredentialsException extends Exception {

  public function errorMessage() {
    $errorMsg = 'Mauvais identifiant ou mot de passe';
    return $errorMsg;
  }

}