<?php

class ConnexionView extends View {


  public function __construct($controller, $templateName) {
      $this->templateNames = array();
      $this->templateNames['head'] = 'headNonInscrit';
      // $this->templateNames['top'] = 'top';
      $this->templateNames['content'] = $templateName;
      // $this->templateNames['foot'] = 'foot';
      // $this->args['controller'] = $controller;
      // $this->args['view'] = $this;
    }
}

 ?>
