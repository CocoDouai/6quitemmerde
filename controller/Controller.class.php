<?php

class Controller extends MyObject {

  private $request;

  public function __construct($requete) {
    $this->request=$requete;
  }

  public function defaultAction($args) {
    $view = new AnonymousView($this, 'default');
    $view->render();
  }

  public function game($args) {
    $v = new JoueurView($this->joueur);
    $v->render();
  }

  public function execute() {
    $methodName = $this->request->getActionName();

    if(!method_exists($this, $methodName)) {
      throw new Exception('Action "' . $this->action . '" does not exists on controller ' . get_class($this) );
    }
    $this->$methodName($this->request);
  }

  public function listeDesParties($args) {
    $view = new AnonymousView($this, 'listePartie');
    $view->render();
  }

  public function jouerPartie($args) {
    $view = new AnonymousView($this, 'partieTemplate');
    $view->render();
  }

  public function monJoueur($args) {
    $view = new PersonnalisationView($this, 'monAvatar');
    $view->render();
  }

}

 ?>
