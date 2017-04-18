<?php

function DB_createJoueur($joueur){
    $pseudo = $joueur->__get('pseudo');
    $mdp = $joueur->__get('mdp');
    $mail = $joueur->__get('adresse_mel');
    $table_name = $joueur->table_name();
    $request = "INSERT INTO `$table_name` (`PSEUDO`, `ADRESSE_MEL`, `MDP`) VALUES ('$pseudo', '$mail','$mdp')";
  $pdo = DatabasePDO::getCurrentPDO();
  $resultat = $pdo->prepare($request);
  try {
    $resultat->execute();
  } catch(Exception $e) {
    echo 'erreur : '.$e;
  }
}

function Delete_Joueur_DB() {
    $pdo = DatabasePDO::getCurrentPDO();
    $resultat = $pdo->prepare("DELETE FROM joueur");
    try {
      $resultat->excute();
    } catch(Exception $e) {
      echo 'erreur : '.$e;
    }
}

function find_Joueur_DB($pseudo){
	$pdo = DatabasePDO::getCurrentPDO();
	$request = "SELECT `pseudo`, `adresse_mel`, `parties_gagnees`, `nb_parties_jouee`, `mdp`, `score_general`, `id_joueur` FROM `joueur` WHERE `pseudo`= '$pseudo'";
    $resultat = $pdo->prepare($request);
    try {
		$result = $resultat->execute();
    } catch(Exception $e) {
        echo 'erreur : '.$e;
    }
	$result = $resultat->fetch(PDO::FETCH_ASSOC);
	return $result;
}

function getId($pseudo) {
      $pdo = DatabasePDO::getCurrentPDO();
      $resultat = $pdo->prepare("SELECT id_joueur FROM joueur WHERE PSEUDO = '$pseudo'");
      try {
        $result = $resultat->execute();
      } catch(Exception $e) {
        echo 'erreur : '.$e;
      }    
	  
	  $result = $resultat->fetch(PDO::FETCH_ASSOC);
      if($result["id_joueur"] != NULL) {
        return $result["id_joueur"];
      }
      return 0;
}
