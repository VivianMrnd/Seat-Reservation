<?php
class delete extends config{
  public $id;

  public function __construct($id){
    $this->id = $id;
  }
  public function Cancel_Booked(){
    $con = $this->con();
    $sql = "delete from reservation where id = $this->id";
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }
  }
}
 ?>
