<?php

class AnonymousController extends Controller {

  public function defaultAction($args) {
    $view = new AnonymousView($this, 'default');
    $view->render();
  }

  public function Entrer($args) {
    $view = new AnonymousView($this, 'inscriptionTemplate');
    $view->render();
  }

  public function Bienvenue($args) {
        $newRequest = new Request();
        $newRequest->write('controller','joueur');
    $view = new ConnexionView($this, 'inscriptionTemplate');
    $view->render();
  }

  public function validateConnexion($args) {
    $login = $args->read('conLogin');
    $password = $args->read('conPassword');
    if(Joueur::isPasswordCorrect($login, $password)) {
      $view = new AnonymousView($this, 'inscriptionTemplate');
      $view->setArg('conErrorText', 'You make a mistake tapping your password');
      $view->render();
    }
    else {
	  $joueur = Joueur::find($login);
	  session_destroy();
	  session_start();
      $_SESSION['joueur']=$joueur;
      $newRequest = new Request();
      $newRequest->write('controller','joueur');
      $newRequest->write('joueur',$joueur->getId_joueur());
      $newRequest->write('action', 'defaultAction');
      $controller=Dispatcher::getCurentDispatcher()->dispatch($newRequest);
      $controller->execute();
    }
  }

  public function validateInscription($args) {
    $login = $args->read('inscLogin');

    if(Joueur::isLoginUsed($login)) {
      $view = new AnonymousView($this,'inscriptionTemplate');
      $view->setArg('inscErrorText','This login is already used');
      $view->render();
    } else {
      $password = $args->read('inscPassword');
      $nom = $args->read('nom');
      $prenom = $args->read('prenom');
      $mail = $args->read('mail');
      $joueur = Joueur::create($login, $password,$mail);
      if(!isset($joueur)) {
        $view = new AnonymousView($this,'inscriptionTemplate');
        $view->setArg('inscErrorText', 'Cannot complete inscription');
        $view->render();
      } else {
        require_once('sql/Joueur.sql.php');
        DB_createjoueur($joueur);
		$joueur->getId_joueur();

        $_SESSION['joueur']=$joueur;
        $newRequest = new Request();
        $newRequest->write('controller','joueur');
        $newRequest->write('joueur',$joueur->getId_joueur());
        $newRequest->write('action', 'defaultAction');
        $controller=Dispatcher::getCurentDispatcher()->dispatch($newRequest);
        $controller->execute();
      }
}


}
}

 ?>
