<?php

Abstract class Model extends MyObject {
	
  public $donnees;

  public function __construct($donnees = array()) {
    $this->donnees = $donnees;
    $this->table_name = '';
  }

  // accesseurs
    public function __get($prop) {
      return $this->donnees[$prop];
    }

    public function table_name() {
      return '';
    }

    public function __set($prop, $val) {
      $this->donnees[$prop] = $val;
    }

    protected static function db(){
      return DatabasePDO::getCurrentPDO();
    }

    protected static function query($sql){
      $st = static::db()->query($sql) or die("sql query error ! request : " . $sql);
      $st->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_donnees_LATE, get_called_class());
      return $st;
    }


}

 ?>
