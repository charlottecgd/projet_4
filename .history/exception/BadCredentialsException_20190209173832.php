<?php
namespace projet4\exception;
use Exception
class BadCredentialsException extends Exception {

  public function errorMessage() {
    $errorMsg = 'Mauvais identifiant ou mot de passe';
    return $errorMsg;
  }

}