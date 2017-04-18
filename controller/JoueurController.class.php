<?php

class JoueurController extends Controller {

  public function defaultAction($args) {
    $view = new JoueurView($this, 'joueurTemplate');
    $view->render();
  }

  public function listeDesParties($args) {
    $view = new JoueurView($this, 'listePartie');
    $view->render();
  }

	public function retourAccueil($args) {
    $view = new JoueurView($this, 'joueurTemplate');
    $view->render();
  }

  public function deconnexion($args) {
    session_destroy();
    $view = new AnonymousView($this, 'default');
    $view->render();
  }

}

 ?>
