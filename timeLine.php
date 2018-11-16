<?php

$titulo ="Red Social - Inicio";

require_once('header.php');
require_once('autoload.php');

$posteos = Post::getPosts();

//echo '<pre>';
//var_dump($posteos);
//echo '</pre>';

// foreach ($usuarios as $usuario) {
//    echo var_dump($usuario);
// }

?>
  <!-- PRINCIPAL-->
  <main class="perfil pt-4">
    <section class="tl-form py-3">
      <div class="">
        <form class="" action="" method="POST">
          <div class="">
            <input type="text" name="" value="" placeholder="Ingrese su comentario..">
          </div>
          <div class="photo btn btn-outline-dark">
            <label for="tl-post">
              <i class="far fa-image"></i> Imagen
            </label>
            <input id="tl-post" class="d-none" type="FILE" name="tl-post" value="">
          </div>
          <div class="publicar">
            <button class="btn btn-dark" type="submit" name="" >Publicar</button>
          </div>
        </form>
      </div>
    </section>
    <!-- PERFIL TIMELINE-->
    <section class="tl-perfil py-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="w-50 m-auto">
              <?php
                foreach ($posteos as $post) {
              ?>
              <!--posteo-->
              <div class="post bg-light mb-2 p-2">
                <!--posteo imagen-->
                <div class="post-img">
                  <div class="">
                    <img class="w-100 m-auto" src="<?php echo $post['image']; ?>" alt="">
                  </div>
                </div>
                <!--posteo imagen-->
                <!--posteo descripcion-->
                <div class="post-desc p-2">
                  <ul class="mb-0">
                    <li>
                      <h3><i class="fas fa-map-pin"></i> <?php echo $post['title']; ?></h3>
                    </li>
                    <li>
                      <p><?php echo $post['description']; ?></p>
                    </li>
                    <li>
                      <div style="border-top:1px solid #a5a5a5;border-bottom:1px solid #a5a5a5;" class="tl-buttons bg-light">
                        <div class="">
                          <i class="far fa-heart"></i>
                        </div>
                        <div class="">
                          <i class="far fa-comment"></i>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <!--fin posteo descripcion-->
              </div>
              <!--fin posteo-->
              <?php
              }
               ?>
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
