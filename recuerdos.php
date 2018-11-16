<?php

$titulo ="Red Social - Recuerdos";

require('header.php');

// echo '<pre>';
// var_dump($usuarios);
// echo '</pre>';

// foreach ($usuarios as $usuario) {
//    echo var_dump($usuario);
// }

?>

  <!-- PRINCIPAL-->
  <main class="explorar">
    <!-- TITULO -->
    <section class="explorar-titulo">
      <h2 class=""> <i class="fas fa-camera-retro"></i> Recuerdos</h2>
    </section>
    <!-- FIN TITULO -->

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
                <div class="e-tl-buttons">
                  <div class="">
                  <i class="fas fa-map-pin"></i> Cochabamba
                  </div>
                </div>
              </div>
              <!-- FIN POST-->
              <!-- POST-->
              <div class="tl-post">
                <div class="tl-img">
                  <img  src="img/post/Copacabana.jpg" alt="">
                </div>
                <div class="e-tl-buttons">
                  <div class="">
                  <i class="fas fa-map-pin"></i> Copacabana
                  </div>
                </div>
              </div>
              <!-- FIN POST-->
              <!-- POST-->
              <div class="tl-post">
                <div class="tl-img">
                  <img  src="img/post/Lapaz.jpg" alt="">
                </div>
                <div class="e-tl-buttons">
                  <div class="">
                  <i class="fas fa-map-pin"></i> La paz
                  </div>
                </div>
              </div>
              <!-- FIN POST-->
              <!-- POST-->
              <div class="tl-post">
                <div class="tl-img">
                  <img  src="img/post/Sucre.jpg" alt="">
                </div>
                <div class="e-tl-buttons">
                  <div class="">
                  <i class="fas fa-map-pin"></i> Sucre
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
