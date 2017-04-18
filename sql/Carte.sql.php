<?php

function createCarte() {
  $pdo = DatabasePDO::getCurrentPDO();
  $resultat = $pdo->prepare("INSERT INTO joueur (PSEUDO, ADRESSE_MEL, PARTIES_GAGNEES, PARTIES_PERDUES, MDP, SCORE_GENERAL, ID_JOUEUR) VALUES (:login, :mail, NULL, NULL, :password, NULL, NULL)");

}

?>
