<?php

$db = new Conexion();
$datas = $db->real_escape_string($_POST['user']);
$db->close();

 ?>
