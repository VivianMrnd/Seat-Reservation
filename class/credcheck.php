<?php
class credcheck extends config{
  public $username;
  public $password;

  public function __construct($username,$password){
    $this->username = $username;
    $this->password = $password;

  }
  
  public function checker(){
   
    $con = $this->con();
    $sql = "SELECT * FROM users WHERE username = '$this->username' AND password = '$this->password'";
    $data = $con->prepare($sql);
    $data->execute();
    $row =  $data->fetch(PDO::FETCH_ASSOC);

    if($data -> rowCOunt() > 0){
      return true;
     
    }else{
      return false; 
    }
  }
}
