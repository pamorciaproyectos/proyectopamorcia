<header>
  <div class="contenedor">
    <div class="logo">
      <img src="views/estilos/imagen/logotipo.jpg" alt="">
    </div>
  </div>
    <div class="menu_bar">
      <a href="#" class="bt-menu"><span class="icon-menu"></span>Menú</a>
    </div>
      <nav class="menu">
        <div class="contenedor">
        <ul>
          <li><a href="#"><span class="icon-home"></span>Inicio</a></li>
          <li><a href="#"><span class="icon-laptop"></span>Blog</a></li>
          <li><a href="#"><span class="icon-rocket"></span>Proyectos</a></li>
          <li><a href="#"><span class="icon-suitcase"></span>Trabajos</a></li>
          <li><a href="#"><span class="icon-mail"></span>Contacto</a></li>
          <li class="right"><a href="javascript:Login('visible');"><span class="icon-user"></span>Iniciar Sesión</a></li>
          <li class="right"><a href="javascript:Registrar('visible');"><span class="icon-add-user"></span>Registrate</a></li>
        </ul>
      </nav>
    </div>
</header>


<?php
include(HTML_DIR. 'public/login.html');
include(HTML_DIR. 'public/reg.html')
 ?>
