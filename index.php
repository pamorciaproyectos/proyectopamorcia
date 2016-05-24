<?php

  require('core/core.php');
if (isset($_GET['view'])) {
  if (file_exists(CORE_DIR. 'controllers' . strtolower($_GET['view']). 'Controller.php')) {
    include(CORE_DIR. 'controllers' . strtolower($_GET['view']). 'Controller.php');
  }else {
    include(CORE_DIR. 'controllers/errorController.php');
  }
}else {
  include(CORE_DIR. 'controllers/indexController.php');
}

 ?>
