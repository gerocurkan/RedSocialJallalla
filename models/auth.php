<?php

class Auth {

  public function loguear($email){
    $_SESSION['logueado'] =$email ;
  }

  public function estaLoguedo(){
    return isset($_SESSION['logueado']);
  }

  public function recordarme($email) {
    setcookie('logueado',$email , time()+3600*24); //mantiene la sesion aberta 24hs
  }

  public function logOut(){
    setcookie('logueado', NULL , time()-1);
    session_destroy();
  }

  public function usuarioLogueado($base){
    if( $this -> estaLoguedo()) {
      $logueado =  $base->traerPorEmail($_SESSION['logueado']);
      return $logueado ;
    } else {
      return NULL;
    }
  }

  }
