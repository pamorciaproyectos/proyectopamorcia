<?php

if (!empty($_POST['user']) and !empty($_POST['pass'])) {
  $db = new Conexion();
  $datas = $db->real_escape_string($_POST['user']);
  $pass = Encrypt($_POST['pass']);
  $sql = $db->query("SELECT id FROM users WHERE (user='$datas' OR email='$datas') AND pass='$pass' LIMIT 1;");
  if ($db->rows($sql) > 0) {
    echo 1;
  }else {
    echo '<strong>Error:</strong> Algún dato es incorrecto.';
  }
  $db->close();
}else {
  echo '<strong>Error:</strong> Todos los datos deben estar llenos';
}


 ?>
