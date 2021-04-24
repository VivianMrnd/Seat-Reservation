<?php
class edit extends config{
  public $id;

  public function __construct($id){
    $this->id = $id;
  }

  #the greatest showman
  public function booked(){
   
      $con = $this->con();
      $sql = "update seats set status = 'BOOKED' where id = '$this->id'"; 
      $data = $con->prepare($sql);
      if($data->execute()){
        return true;
      }else{
        return false;
      }
  
    }

  public function available(){
  
    $con = $this->con();
    $sql = "update seats set status = 'AVAILABLE' where id = '$this->id'"; 
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }

  }
     #Spongebob
  public function booked_S(){
   
    $con = $this->con();
    $sql = "update seats_spongebob set status = 'BOOKED' where id = '$this->id'"; 
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }

  }

  public function available_S(){
 
    $con = $this->con();
    $sql = "update seats_spongebob set status = 'AVAILABLE' where id = '$this->id'"; 
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }

  }

    #Iron man
  public function booked_I(){
  
    $con = $this->con();
    $sql = "update seats_iron set status = 'BOOKED' where id = '$this->id'"; 
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }

  }

  public function available_I(){
  
    $con = $this->con();
    $sql = "update seats_iron set status = 'AVAILABLE' where id = '$this->id'"; 
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }

  }

   #this_is_the_end
   public function booked_T(){
  
    $con = $this->con();
    $sql = "update seats_this_is_the_end set status = 'BOOKED' where id = '$this->id'"; 
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }

  }

  public function available_T(){
  
    $con = $this->con();
    $sql = "update seats_this_is_the_end set status = 'AVAILABLE' where id = '$this->id'"; 
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }

  }

  #hangover
  public function booked_H(){
  
    $con = $this->con();
    $sql = "update seats_hangover set status = 'BOOKED' where id = '$this->id'"; 
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }

  }

  public function available_H(){
  
    $con = $this->con();
    $sql = "update seats_hangover set status = 'AVAILABLE' where id = '$this->id'"; 
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }

  }
}
 ?>
