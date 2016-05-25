<?php
require('core/core.php');
if ($_POST) {
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'login':
      require(CORE_DIR. 'bin/ajax/goLogin.php');
      break;

    default:
      header('location: index.php');
      break;
  }
}else {
  header('location: index.php');
}

 ?>
