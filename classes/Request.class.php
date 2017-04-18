<?php

  class Request extends MyObject {

    protected static $currentRequest = NULL;

    public static function getCurrentRequest() {
      if(is_null(static::$currentRequest)) {
        static::$currentRequest = new static();
      }
      return static::$currentRequest;
    }

    public function __construct() {
      $this->controllerName = 'Anonymous';
    }

    public function getControllerName() {
      if(isset($_GET['controller'])) {
        return $_GET['controller'];
      }
	  if(isset($_SESSION['joueur'])) {
		  return 'Joueur';
	  }
      return 'Anonymous';
    }

    public function getActionName() {
      if(isset($_GET['action'])) {
        return $_GET['action'];
      }
      return 'defaultAction';
    }

    public function read($arg) {
      if(isset($_POST[$arg])) {
        return $_POST[$arg];
      }
      else {
        throw new Exception("$arg does not exist !");
      }
    }

    public function write($argToChange, $newArg) {
      $_GET[$argToChange] = $newArg;
    }
  }

?>
