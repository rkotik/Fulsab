<?php

# Seguridad
defined('INDEX_DIR') OR exit('Ocrend software says .i.');

//------------------------------------------------

class perfilController extends Controllers {

  public function __construct() {
    parent::__construct();
    echo $this->template->render('perfil/perfil');
  }

}

?>
