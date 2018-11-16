<?php

$titulo ="Red Social - Explorar";

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
      <h2 class=""> <i class="far fa-compass"></i> Explorar</h2>
    </section>
    <!-- FIN TITULO -->
    <!-- PERFIL DATOS-->
    <section class="e-perfiles py-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3 class="text-center titulo-color">Perfiles</h3>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <!-- EXPLORAR PERFIL -->
            <div class="e-perfil text-center">
              <div class="">
                <div class="e-img">
                  <img width="200" src="img/perfil/caro.jpg" alt="">
                </div>
                <div class="e-desc">
                  <h3>Caro Torrico</h3>
                  <p><i class="fas fa-map-marker-alt"></i> Cochabamba</p>
                </div>
              </div>
            </div>
            <!-- FIN EXPLORAR PERFIL -->
            <!-- EXPLORAR PERFIL -->
            <div class="e-perfil text-center">
              <div class="">
                <div class="e-img">
                  <img width="200" src="img/perfil/fede.jpg" alt="">
                </div>
                <div class="e-desc">
                  <h3>Fede Lopez</h3>
                  <p><i class="fas fa-map-marker-alt"></i> La Paz</p>
                </div>
              </div>
            </div>
            <!-- FIN EXPLORAR PERFIL -->
            <!-- EXPLORAR PERFIL -->
            <div class="e-perfil text-center">
              <div class="">
                <div class="e-img">
                  <img width="200" src="img/perfil/flor.jpg" alt="">
                </div>
                <div class="e-desc">
                  <h3>Flor Aguirre</h3>
                  <p><i class="fas fa-map-marker-alt"></i> Tarija</p>
                </div>
              </div>
            </div>
            <!-- FIN EXPLORAR PERFIL -->
            <!-- EXPLORAR PERFIL -->
            <div class="e-perfil text-center">
              <div class="">
                <div class="e-img">
                  <img height="200" src="img/perfil/gri.jpg" alt="">
                </div>
                <div class="e-desc">
                  <h3>Gri Vega</h3>
                  <p><i class="fas fa-map-marker-alt"></i> Sucre</p>
                </div>
              </div>
            </div>
            <!-- FIN EXPLORAR PERFIL -->
          </div>
        </div>
      </div>
    </section>
    <!-- FIN PERFIL DATOS-->
    <!-- PERFIL TIMELINE-->
    <section class="tl-perfil py-3">
      <div class="container">
        <div class="row mb-3">
          <div class="col">
            <h3 class="text-center titulo-color">Lugares</h3>
          </div>
        </div>
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
