<?php
class insert extends config{
  public $fullname;
  public $contact;
  public $no_of_seats;
  public $seat_number;
  public $time;
  public $movie_id;

  public function __construct($fullname, $contact,$no_of_seats,$seat_number,$time,$movie_id){
    $this->fullname = $fullname;
    $this->contact = $contact;
    $this->no_of_seats = $no_of_seats;
    $this->seat_number = $seat_number;
    $this->time = $time;
    $this->movie_id = $movie_id;
  }
  public function insertReservation(){
    $con = $this->con();
    $sql = "insert into reservation (fullname, contact, no_of_seats,seat_number,time, movie_id)values
            ('$this->fullname', '$this->contact', '$this->no_of_seats', '$this->seat_number', 
            '$this->time','$this->movie_id')";
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }
  }
}
 ?>
