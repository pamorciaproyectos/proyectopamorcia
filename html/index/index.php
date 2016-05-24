<?php include(HTML_DIR. 'overall/header.php'); ?>
  <body>
    <?php include(HTML_DIR. 'overall/topnav.php'); ?>
<div class="social">
  <ul>
    <li><a href="#" class="icon-facebook"></a></li>
    <li><a href="#" class="icon-twitter"></a></li>
    <li><a href="#" class="icon-google"></a></li>
    <li><a href="#" class="icon-pinterest"></a></li>
    <li><a href="#" class="icon-mail"></a></li>
  </ul>
</div>
<section id="banner">
  <img src="views/estilos/imagen/bienvenida.jpg" alt="" />
  <div class="contenedor">
    <h2>¡Hola, esto es Pamorciaproyecto!</h2>
    <p>Sitio web sobre diseño y desarrollo web en castellano.</p>
  </div>
</section>
<main class="contenedor">
  <section class="contenido_principal">
    <article class="articulo_left">
      <a href="#"><img src="views/estilos/imagen/html5.png" alt=""></a>
      <a href="#"><h3 class="titulo_articulo">Curso Completo de HTML5</h3></a>
      <p class="contenido_articulo">Aprende a crear tu propio sitio web sin conocimiento...</p>
      <p><a href="#" class="autor">PamorciaPYC Paco Moreno</a> <time class="fecha">20 mayo 2016</time></p>
      <a href="#" class="categoria">Categoria</a>
    </article>
    <article class="articulo_right">
      <a href="#"><img src="views/estilos/imagen/javascript.png" alt=""></a>
      <a href="#"><h3 class="titulo_articulo">Curso complete PHP y MTSQL</h3></a>
      <p class="contenido_articulo">Aprende a programar en Javascrip con este increíble curso desde 0. No importa si nunca antes has programado.</p>
      <p><a href="#" class="autor">PamorciaPYC Paco Moreno</a> <time class="fecha">20 mayo 2016</time></p>
      <a href="#" class="categoria">Categoria</a>
    </article>
  </section>
  <aside class="widgets">
    <blockquote class="widget">
      <form class="formulario_buscar"method="post">
        <input type="search" id="buscador"  name="name" value="" placeholder="buscar....">
        <button type="submit" id="btn-buscar" name="button">buscar</button>
      </form>
    </blockquote>
  </aside>
</main>
<script src="//code.jquery.com/jquery-2.2.3.min.js"></script>
<script src="views/estilos/js/jquery.js"></script>
<script src="views/estilos/js/estilos.js"></script>
<script src="views/estilos/js/jquery.slides.js"></script>
<script>

	$(function(){
  $(".slides").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 3000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});

	</script>

  </body>
</html>
