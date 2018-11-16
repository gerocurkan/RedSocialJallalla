<?php

// $dsn = 'mysql:host=localhost;dbname=jallalla';
// $user = 'root';
// $pass = '';
//
// try{
//
//     $conex = new PDO($dsn, $user, $pass);
//
//     var_dump($conex);
//
// }catch( PDOException $ex ){
//     // echo 'Error con la BD, contacta con el administrador del sistema';
//     echo 'El error es:'. $ex->getMessage();
// }
//
// echo '<br>Sigo por aqui';


class BD {
private $conex;
private $dsn = "mysql:host=localhost;dbname=jallalla";
private $user ="root" ;
private $password= "";
private $opt=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

function __construct(){
  try {
 		  $this->conn = new PDO($dsn, $user, $pass);
 		} catch (Exception $e) {
 		  echo "La conexion a la base de datos falló: " . $e->getMessage();
 		}
 	}

public function guardarUsuario(Usuario $usuario){
 $query = $this -> conex -> prepare('INSERT INTO Usuarios(nombre, apellido, alias, email, fechaNacimiento, password, imagen) VALUES(:nombre, :apellido, :alias, :email, :fechaNacimiento,: password, :imagen)' );
 $query -> bindValue(':nombre' , $nombre -> getNombre());
 $query -> bindValue(':apellido' , $apellido-> getapellido());
  $query -> bindValue(':alias' , $alias -> getalias());
  $query -> bindValue(':Email' , $email -> getEmail());
 $query -> bindValue(':fechaNacimiento' , $fechaNacimiento -> getfechaNacimiento());
  $query -> bindValue(':password' , $password -> getPassword());
 $query -> bindValue(':Imagen' , $Imagen -> getImagen());


 $query ->execute();
 $id = $this->$conex -> lastInsertId();
 $usuario -> setId($id);
 return $usuario;
}
// function traerPorEmail($email){

	function traerPorMail($email) {
		$query = $this->conn->prepare("Select * from usuarios where email = :email");
		$query->bindValue(":email", $email);
//
// 		$query->execute();
// $query =this -> conex ->prepare('SELECT *FROM WHERE email = LIKE :email')
// $query -> bindValue(":email",$email);
// $query -> execute();
$usuario = $query->fetch(PDO::FETCH_OBJ);
return $usuario;

}

function traerTodos() {
		$query = $this->conn->prepare("Select * from usuarios");
		$query->execute();
  }



// function traerTodos(){
// $query = $this ->conex -> query ("SELECT * FROM Usuario")
// $usuario = $query -> fetchALL(PDO::FETCH_OBJ);
// return $usuario
}











 ?>
