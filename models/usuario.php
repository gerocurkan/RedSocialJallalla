<?php

class Usuario {

private  $id;
private  $nombre;
private  $apellido;
private  $alias;
private  $email;
private  $fechaNacimiento;
private  $password;
private  $imagen;

public function __construct($email, $password, $edad, $username, $pais, $id = null) {
		if ($id == null) {
      $this ->password = password_hash($password , PASSWORD_DEFAULT);
       } else {
       $this ->password = $password;
       }
       $this->id = $id;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->alias = $alias;
       $this->email =$email;
       $this->fechaNacimiento =$fechaNacimiento;
       $this->imagen = $imagen;


       }
     public function getId(){
       return $this->id ;
       }
     public function getNombre(){
       return $this->nombre;
     }
     public function setNombre($nombre){
       $this->nombre = $nombre;
     }

     public function getApellido(){
         return $this->apellido;
     }
     public function setApellido($apellido){
       $this->apellido = $apellido;
     }
     public function getAlias(){
         return $this->alias;
     }
     public function setAlias($alias){
       $this->alias = $alias;
     }
     public function getEmail(){
       return $this->email;
     }
     public function setEmail(){
         return $this->email = $email;
     }
     public function getFechaNacimiento(){
       return $this->fechaNacimiento;
     }
     public function setFechaNacimiento(){
         return $this->fechaNacimiento = $fechaNacimiento;
     }
     public function getPassword(){
       return $this->password;
     }
     public function setPassword(){
         return $this->password = $password;
     }
     public function getImagen(){
       return $this->imagen;
     }
     public function setImagen(){
         return $this->imagen = $imagen;
     }
     }
      ?>
