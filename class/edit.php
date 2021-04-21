<?php
class edit extends config{
  public $id;

  public function __construct($id){
    $this->id = $id;
  }
  public function editTask(){
      $con = $this->con();
      $sql = "update seats set status = 'BOOKED' where id = $this->id";
      $data = $con->prepare($sql);
      if($data->execute()){
        return true;
      }else{
        return false;
      }
  
    }
  
}
 ?>
