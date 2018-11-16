<?php

$titulo ="Red Social - Iniciar Sesion";
require('arrays/usuarios.php');
require('header.php');


$errorMail = $errorPassword = $errorSesion = '';

// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

if($_GET){

         $_GET['mail']=trim( $_GET['mail'] );
              $_GET['password']=trim( $_GET['password'] );

    if( empty($_GET['mail']) ){
      $errorMail = 'Debe ingresar el Correo';
    }else if (filter_var( $_GET['mail'] , FILTER_VALIDATE_EMAIL )===false) {
      $errorMail = 'El Correo es inválido';
    }

    if( empty($_GET['password']) ){
      $errorPassword = 'Debe ingresar el password';
    }

    foreach ($usuarios as $usuario) {
      if( $usuario['mail'] == $_GET['mail'] && $usuario['password'] == $_GET['password'] ){
        header("Location:perfil.php");
      }else{
        $errorSesion = 'El Correo Electronico o la contraseña es incorrecta';
      }
    }


}





?>

  <main class="my-3">

    <section>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <article class="login w-50 m-auto ">
              <div>
                 <form action="login.php" method="GET" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="correoElectronico">Correo Electronico</label>
                    <input type="email" class="form-control" id="correoElectronico" aria-describedby="emailHelp"  name="mail" placeholder="Enter email">
                    <span class="text-danger">
                      <?php echo $errorMail; ?>
                    </span>
                  </div>
                  <div class="form-group">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" class="form-control" id="contrasena" name="password" placeholder="Password">
                    <span class="text-danger">
                      <?php echo $errorPassword; ?>
                    </span>
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="recordarme" name="recordarme">
                    <label class="form-check-label" for="contrasena">Recordarme</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-light">Iniciar Sesion</button>
                  </div>
                  <span class="text-danger">
                    <?php echo $errorSesion; ?>
                  </span>
                </form>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php

    require('footer.php');

  ?>
