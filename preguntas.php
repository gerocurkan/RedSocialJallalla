<?php

$titulo ="Red Social - Preguntas";

require('header.php');

?>
  <!-- LOGO
  <section class="logo p-5">
    <div class="text-center">
      <img src="img/logoBanner.png" alt="">
    </div>
  </section>
   FIN LOGO-->
   <!-- TITULO -->
   <section class="perfil-titulo">
     <h2 class="w-50 m-auto"> <i class="far fa-question-circle"></i> Preguntas</h2>
   </section>
   <!-- FIN TITULO -->
  <main class="preguntas my-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div>
            <div class="p-titulo jumbotron jumbotron-fluid mb-5">
              <div class="container">
                <h1 class="display-4 text-center">Preguntas y Respuestas Frecuentes</h1>
                <p class="lead">Si tenés alguna pregunta que no esté acá, envíanos un e-mail a contacto@jallalla.com</p>
              </div>
            </div>

            <div class="accordion" id="accordionExample">
              <div class="card mb-3">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0 titulo-color" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                    ¿Que puedo hacer en esta Red Social?
                  </h5>
                </div>

                <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Jallalla es un servicio que permite que los grupos de amigos, familiares se comuniquen y estén en contacto a través de imagenes de distintas ubicaciones
                    donde se pueden ver paisajes diversos. Las personas pueden publicar fotos, videos y texto. Estos mensajes se publican en tu perfil, se envían
                    a tus amigos y también se pueden encontrar a través del buscador.
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0 titulo-color"  data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">

                      ¿Necesito algo en especial para usar el servicio?

                  </h5>
                </div>

                <div id="collapseOne2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Todo lo que necesitas para usar Jallalla es una conexión a internet o un teléfono móvil. ¡Únete a nosotros! Una vez que te hayas registrado, podrás comenzar a buscar y a conectarte con cuentas cuyos perfiles te interesen. Y nosotros también te recomendaremos cuentas estupendas que te pueden gustar.
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </main>

    <?php

      require('footer.php');

    ?>
