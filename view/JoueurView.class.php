<?php

  class JoueurView extends View {

    public function __construct($controller, $templateName) {
        $this->templateNames = array();
        $this->templateNames['head'] = 'head';
        // $this->templateNames['top'] = 'top';
        $this->templateNames['content'] = $templateName;
        // $this->templateNames['foot'] = 'foot';
        // $this->args['controller'] = $controller;
        // $this->args['view'] = $this;
      }

  }

 ?>
