<?php

class Dispatcher extends MyObject {

  protected static $uniqueInstance = NULL;

  // public function __construct() {
  //   spl_autoload_register(array($this, 'load'));
  // }

  public static function getCurentDispatcher() {
    if(is_null(self::$uniqueInstance)) {
      static::$uniqueInstance = new static();
    }
    return static::$uniqueInstance;
  }

  public static function dispatch($request) {
    return static::dispatchToController($request->getControllerName(),$request);
  }

  public static function dispatchToController($controllerName, $request) {
    $controllerClassName = ucfirst($controllerName) . 'Controller';
    if(!class_exists($controllerClassName)) {
      throw new Exception("$controllerName does not exists");
    }
      return new $controllerClassName($request);
    }

      public static function theDispatch($request) {
        return static::dispatchToController($request->getControllerName(),$request);

    }

}

 ?>
