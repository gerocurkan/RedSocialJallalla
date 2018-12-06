
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title><?php echo $titulo ?></title>

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- HOJA DE ESTILOS CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</head>
<body>

  <!-- HEADER -->
  <header>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg nav-bg">
      <a class="navbar-brand" href="#">
        <div class="d-inline-block">
          <img width="50px" src="img/logo.jpg" alt="">
        </div>
         <h1 class="d-inline-block ">Jallalla!</h1>
       </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="nav-buscador">
        <input type="text" name="" value="" placeholder="Buscar en Jallalla!">
      </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item ">
            <a class="nav-link" href="timeline.php">
            <div class="">
              <i class="fas fa-globe"></i>
            </div>
            <div class="nav-text">
              Inicio
            </div>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="explorar.php">
            <div class="">
              <i class="far fa-compass"></i>
            </div>
            <div class="nav-text">
              Explorar
            </div>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="recuerdos.php">
              <div class="">
                <i class="fas fa-camera-retro"></i>
              </div>
              <div class="nav-text">
                Recuerdos
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notificaciones.php">
              <div class="">
                <i class="far fa-bell"></i>
              </div>
              <div class="nav-text">
                Notificaciones
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perfil.php">
            <div class="">
              <i class="far fa-user"></i>
            </div>
            <div class="nav-text">
              Perfil
            </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="preguntas.php">
            <div class="">
              <i class="far fa-question-circle"></i>
            </div>
            <div class="nav-text">
              Preguntas
            </div>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- FIN NAVBAR-->

  </header>
  <!-- FIN HEADER-->
