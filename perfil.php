<?php

$titulo ="Red Social - Perfil";

require('header.php');
require('models/usuario.php');
require('autoload.php');
// echo '<pre>';
// var_dump($usuarios);
// echo '</pre>';

// foreach ($usuarios as $usuario) {
//    echo var_dump($usuario);
// }

?>

  <!-- PRINCIPAL-->
  <main class="perfil">
    <!-- TITULO -->
    <section class="perfil-titulo">
      <h2 class=""><i class="far fa-user"></i> Mi Perfil</h2>
    </section>
    <!-- FIN TITULO -->
    <!-- PERFIL DATOS-->
    <section class="d-perfil py-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="row">
                <div class="col-12 col-md-4">
                  <div class="dp-imagen text-center">
                    <div>
                      <img width="200"src="img/perfil/perfilgero.jpg" alt="">

                      </style>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-8 ">
                  <div class="row">
                    <div class="col-12">
                      <div class="dp-informacion">
                        <div class="">
                          <ul class=" d-inline-block ">
                            <li>Usuario: <?=$_SESSION['Usuario']?> </li>
                            <li>Nombre: <?= $_SESSION['Nombre'] ?> </li>
                            <li>Apellido: <?= $_SESSION['Apellido']?> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="contactos">
                        <a href="listaAmigos.php"><i class="fas fa-users"></i> Lista de Amigos</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FIN PERFIL DATOS-->
    <!-- PERFIL TIMELINE-->
    <section class="tl-perfil py-3">
      <div class="container">
        <div class="row">
          <div class="col">
           <div class="tl-posts">
              <!-- POST-->
              <div class="tl-post">
                <div class="tl-img">
                  <img  src="img/post/Cochabamba.jpg" alt="">
                </div>
                <div class="tl-buttons">
                  <div class="">
                    <a href="#"> <i class="far fa-heart"></i></a>
                  </div>
                  <div class="">
                    <a href="#"> <i class="far fa-comment"></i></a>
                  </div>
                </div>
              </div>
              <!-- FIN POST-->
              <!-- POST-->
              <div class="tl-post">
                <div class="tl-img">
                  <img  src="img/post/Copacabana.jpg" alt="">
                </div>
                <div class="tl-buttons">
                  <div class="">
                    <a href="#"> <i class="far fa-heart"></i></a>
                  </div>
                  <div class="">
                    <a href="#"> <i class="far fa-comment"></i></a>
                  </div>
                </div>
              </div>
              <!-- FIN POST-->
              <!-- POST-->
              <div class="tl-post">
                <div class="tl-img">
                  <img  src="img/post/Lapaz.jpg" alt="">
                </div>
                <div class="tl-buttons">
                  <div class="">
                    <a href="#"> <i class="far fa-heart"></i></a>
                  </div>
                  <div class="">
                    <a href="#"> <i class="far fa-comment"></i></a>
                  </div>
                </div>
              </div>
              <!-- FIN POST-->
              <!-- POST-->
              <div class="tl-post">
                <div class="tl-img">
                  <img  src="img/post/Sucre.jpg" alt="">
                </div>
                <div class="tl-buttons">
                  <div class="">
                    <a href="#"> <i class="far fa-heart"></i></a>
                  </div>
                  <div class="">
                    <a href="#"> <i class="far fa-comment"></i></a>
                  </div>
                </div>
              </div>
              <!-- FIN POST-->

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- PERFIL TIMELINE-->
  </main>
  <!-- FIN PRINCIPAL-->

  <?php

    require('footer.php');

  ?>
