<?php
require_once(__ROOT_DIR . '/sql/Joueur.sql.php');
class Joueur extends Model {


    //private $adresse_mel;
    //private $id_joueur;
    //private $pseudo;
    //private $mdp;
    //private $nb_partie_jouee;
    //private $partie_gagnees;
    //private $score_general;
	
    public function table_name() {
      return 'Joueur';
    }
	
    public static function isLoginUsed($login) {
      $pdo = DatabasePDO::getCurrentPDO();
      $resultat = $pdo->prepare("SELECT * FROM joueur WHERE pseudo = '$login' ");
      try {
        $result = $resultat->execute();
      } catch(Exception $e) {
        echo 'erreur : '.$e;
      }
      $result = $resultat->fetch(PDO::FETCH_ASSOC);

      if($result["PSEUDO"] != NULL) {
        return true;
      }
      return false;
    }

    public static function isPasswordCorrect($login, $password) {
      $pdo = DatabasePDO::getCurrentPDO();
      $resultat = $pdo->prepare("SELECT pseudo FROM joueur WHERE pseudo = '$login' AND mdp = '$password' ");
      try {
        $result = $resultat->execute();
      } catch(Exception $e) {
        echo 'erreur : '.$e;
      }
      $result = $resultat->fetch(PDO::FETCH_ASSOC);
      if($result["pseudo"] != NULL) {
        return false;
      }
      return true;
    }

    public static function create($pseudo, $password, $adresse_mel) {
      $data= array (
        "adresse_mel"  => $adresse_mel,
        "id_joueur" => "",
        "pseudo"   => $pseudo,
        "mdp"  => $password,
        "nb_partie_jouee" => 0,
        "partie_gagnees"   => 0,
        "score_general"   => 0
      );
      return new Joueur($data);
    }
	
	public static function find($pseudo) {
	$dataDB = find_Joueur_DB($pseudo);
	$data= array (
        "adresse_mel"  => $dataDB['adresse_mel'],
        "id_joueur" => $dataDB['id_joueur'],
        "pseudo"   => $dataDB['pseudo'],
        "mdp"  => $dataDB['mdp'],
        "nb_partie_jouee" => $dataDB['nb_parties_jouee'],
        "partie_gagnees"   => $dataDB['parties_gagnees'],
        "score_general"   => $dataDB['score_general']
      );
      return new Joueur($data);
    }
	
    // Accesseurs
    public function getId_joueur() {
		if($this->__get('id_joueur')==""){
			$id = getId($this->__get('pseudo'));
			$this->__set( 'id_joueur' , $id);
		}
		return $this->__get('id_joueur');
	}
	
    public function setId_joueur($newId_Joueur) {
      $this->id_joueur = $newId_Joueur;
    }
}

?>
