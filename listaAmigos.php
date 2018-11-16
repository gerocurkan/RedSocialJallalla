<?php

$titulo ="Red Social - Lista de Amigos";

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
      <h2 class=""> <i class="fas fa-users"></i> Lista de Amigos</h2>
    </section>
    <!-- FIN TITULO -->
    <!-- PERFIL DATOS-->
    <section class="e-perfiles py-3">
      <div class="container">
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
  </main>
  <!-- FIN PRINCIPAL-->

  <?php

    require('footer.php');

  ?>
