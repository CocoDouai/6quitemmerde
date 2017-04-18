<?php

  class View extends MyObject {

    protected $args=array();
    protected $templateNames;

  public function __construct($controller, $templateName) {
      $this->templateNames = array();
      $this->templateNames['head'] = 'headNonInscrit';
      // $this->templateNames['top'] = 'top';
      $this->templateNames['content'] = $templateName;
      // $this->templateNames['foot'] = 'foot';
      // $this->args['controller'] = $controller;
      // $this->args['view'] = $this;
    }

    public function setArg($key, $val) {
      $this->args[$key] = $val;
    }

    public function render() {
      foreach($this->templateNames as $elmt) {
        foreach($this->args as $key => $val){
            $$key = $val;
        }
        include(__ROOT_DIR . '/templates/' . $elmt . '.php');
      }
    }

  }

 ?>
