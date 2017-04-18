<?php

class Carte extends Model {

  private $id_carte;
  private $malus;

  // accesseurs
    public function getId_Carte() {
      return $this->id_carte;
    }

    public function setId_Carte($nouveauId_Carte) {
      $this->id_carte = $nouveauId_Carte;
    }

    public function getMalus() {
      return $this->malus;
    }

    public function setMalus($nouveauMalus) {
      $this->malus = $nouveauMalus;
    }

  // méthodes



}


 ?>
