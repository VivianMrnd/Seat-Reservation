<?php
class config{
  private $user = 'root';
  private $password = '';
  public $pdo = null;

  public function con(){
    try {
      $this->pdo=new PDO('mysql:host=localhost;port=3307;dbname=seat_reservation',$this->user,$this->password);
    } catch (Exception $e) {
      die($e->getMessage());
    }
    return $this->pdo;
  }
}
 ?>
