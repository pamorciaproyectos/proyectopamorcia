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


<div id="Login">
<div id="login_mensaje">
<a class="cerrar" href="javascript:Login('hidden');">&times;</a>
<div role="form" class="formulario">
  <h2>Iniciar Sesión</h2>
  <input type="text" id="user_login" placeholder="&#128272; Usuario o Correo:">
  <input type="password" id="pass_login" placeholder="&#128272; Contraseña:">
  <input type="checkbox" name="name" id="sesion_login" value="1"><label for="sesion">Recordar la contraseña</label>
  <input type="submit" name="name" value="Ingresar">
  <a class="cancelar" href="javascript:Login('hidden');">Cancelar</a>
  <p>Si no  estas registrado registrarte <a href="javascript:Registrar('visible');"> Aquí</a></p>
</div>
</div>
</div>

<div id="Registrar">
<div id="registrar_mensaje">
<a class="cerrar" href="javascript:Registrar('hidden');">&times;</a>
<div role="form" class="formulario">
  <h2>Registrate</h2>
  <input type="text" id="user_reg" placeholder="&#128272; Usuario:">
  <input type="email" id="email_reg" placeholder="&#128231; Correo:">
  <input type="password" id="pass_reg" placeholder="&#128272; Contraseña:">
  <input type="password" id="pass_reg_dos" placeholder="&#128272; Repite Contraseña:">
  <input type="checkbox" name="name" id="tyc_reg" value="1"><label for="sesion">Acepta Termino y Condiciones </label>
  <input type="submit" name="name" value="Registrar">
  <a class="cancelar" href="javascript:Registrar('hidden');">Cancelar</a>
</div>
</div>
</div>
