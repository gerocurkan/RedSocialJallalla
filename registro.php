<?php
$titulo ="Red Social - Registrarse";
require('header.php');
require('autoload.php');
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

$errorNombre = $errorApellido = $errorUsuario = $errorFecha = $errorMail = $errorPassword =$errorimagen = '';

if( $_POST){

    $_POST['nombre']=trim( $_POST['nombre'] );
      $_POST['apellido']=trim( $_POST['apellido'] );
           $_POST['email']=trim( $_POST['email'] );
                $_POST['password']=trim( $_POST['password'] );

    if( empty($_POST['nombre']) ){
      $errorNombre = 'Debe ingresar el nombre';
    }else if( strlen( $_POST['nombre'] )<2 ){
      $errorNombre = 'El Nombre debe tener al menos 2 letras';
    }

    if( empty($_POST['apellido']) ){
      $errorApellido = 'Debe ingresar el apellido';
    }else if( strlen( $_POST['apellido'] )<2 ){
      $errorApellido = 'El Nombre debe tener al menos 2 letras';
    }

    if( empty($_POST['nombreUsuario']) ){
      $errorUsuario = 'Debe ingresar el nombre de usuario';
    }else if( strlen( $_POST['nombreUsuario'] )<2 ){
      $errorUsuario = 'El Nombre debe tener al menos 2 letras';
    }

    if( empty($_POST['fechaNacimiento']) ){
      $errorFecha = 'Debe ingresar la fecha';
    }


    $fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
    $fecha_entrada = strtotime($_POST['fechaNacimiento']."+ 18 years");

    if($fecha_actual < $fecha_entrada){
	  $errorFecha = 'La fecha no es válida, edad mínima para registrarse es 18';
    }




    if( empty($_POST['email']) ){
      $errorMail = 'Debe ingresar el Correo';
    }else if (filter_var( $_POST['email'] , FILTER_VALIDATE_EMAIL )===false) {
      $errorMail = 'El Correo es inválido';
    }

    if( empty($_POST['password']) ){
      $errorPassword = 'Debe ingresar el password';
    }else if( strlen( $_POST['password'] )<2 ){
      $errorPassword = 'El Nombre debe tener al menos 2 letras';
    }

    $db = new PDO("mysql:host=localhost;dbname=jallalla" , "root" , "" , [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

    $email= $_POST['email'];
    $query =$db ->prepare('SELECT * FROM usuarios WHERE email  LIKE :email');
    $query -> bindValue(":email",$email);
    $query -> execute();
    if( $query -> rowCount() != 0){
      $errorMail =  'El mail ya esta registrado, ingresa otro';
    }

    $alias= $_POST['nombreUsuario'];
    $query =$db ->prepare('SELECT *FROM usuarios WHERE alias  LIKE :alias');
    $query -> bindValue(":alias",$alias);
    $query -> execute();

    if($query -> rowCount()  != 0){
      $errorUsuario= 'El nombre de usuario ya existe, ingresa otro';
    }
/*------------------------------------------------

    $imgFile = $_FILES['user_image']['name'];
    $tmp_dir = $_FILES['user_image']['tmp_name'];
    $imgSize = $_FILES['user_image']['size'];

    if(empty($imgFile)){
   $errMSG = "Por favor seleccione una imagen";
  }
  else
  {
   $upload_dir = 'user_images/'; // upload directory

   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

   // rename uploading image
   $userpic = rand(1000,1000000).".".$imgExt;

   // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){
    // Check file size '5MB'
    if($imgSize < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    }
    else{
     $errMSG = "La imagen excede el tamaño permitido";
    }
   }
   else{
    $errMSG = "Solo archivos JPG, JPEG, PNG & GIF son válidos";
   }
  }
*/



    /* -----------------------------------------------*/


  if( empty($errorNombre) && empty($errorApellido) && empty($errorUsuario) && empty($errorFecha) && empty($errorMail) && empty($errorPassword) ){

    $db = new PDO("mysql:host=localhost;dbname=jallalla" , "root" , "" , [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
    $query = $db -> prepare('INSERT INTO usuarios(nombre, apellido, alias, email, fechaNacimiento, password) VALUES(:nombre, :apellido, :alias, :email, :fechaNacimiento,:password)' );
    $query -> bindValue(':nombre', $_POST['nombre']);
    $query -> bindValue(':apellido',$_POST['apellido']);
     $query -> bindValue(':alias', $_POST['nombreUsuario']);
     $query -> bindValue(':email', $_POST['email']);
    $query -> bindValue(':fechaNacimiento', $_POST['fechaNacimiento']);
     $query -> bindValue(':password', $_POST['password']);
    //$query -> bindValue(':Imagen', $_POST['imagen']);
    $query ->execute();

    $_SESSION['Nombre']=$_POST['nombre'] ;
    $_SESSION['Apellido']=$_POST['apellido'];
    $_SESSION['Usuario']=$_POST['nombreUsuario'];


    header("Location:perfil.php");
  }
}






?>

  <main class="my-3">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <article class="registrarse">
             <form action="registro.php" method="POST" enctype="multipart/form-data">
              <div class="form-group d-inline-block mr-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre..">
                <span class="text-danger">
                   <?php echo $errorNombre; ?>

                </span>
              </div>
              <div class="form-group d-inline-block ml-3">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su nombre..">
                <span class="text-danger">
                <?php echo $errorApellido; ?>
                </span>
              </div>
              <div class="form-group">
                <label for="nombreUsuario">Usuario</label>
                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Ingrese su nombre..">
                <span class="text-danger">
                 <?php echo $errorUsuario; ?>
                </span>
              </div>
              <div class="form-group">
                <label for="fechaDeNacimiento">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fechaDeNacimiento" name="fechaNacimiento">
                <span class="text-danger">
                  <?php echo $errorFecha; ?>

                </span>
              </div>
              <div class="form-group">
                <label for="correoElectronico">Correo Electronico</label>
                <input type="email" class="form-control" id="correoElectronico" aria-describedby="emailHelp" name="email" placeholder="Ingrese su Correo Electronico..">
                <span class="text-danger">
                <?php echo $errorMail; ?>
                </span>
              </div>
              <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="password" placeholder="Ingrese su Contraseña..">
                <span class="text-danger">
                <?php echo $errorPassword; ?>
                </span>

              </div>
              <div class="form-group">
                   <label for="avatar">Foto de perfil:</label>
                   <input id="avatar" class="form-control" type="file" name="avatar">
               </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="recordarme" id="recordarme">
                <label class="form-check-label" for="recordarme">Recordarme</label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-dark">Registrarse</button>
              </div>
            </form>
          </article>
        </div>
        <div class="col-12 col-md-6">
          <article class="descripcion bg-light p-5">
                <div class="d-titulo ">
                  <h2>Descripcion</h2>
                </div>
                <div class="d-descripcion">
                  <p>Bienvenido a Jallalla, una red social dedicada a conocer gente a traves de hermosos paisajes!</p>
                </div>
          </article>
        </div>
      </div>
    </div>
  </main>

  <?php

    require('footer.php');

  ?>
