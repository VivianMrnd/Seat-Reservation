<?php
class view extends config{

    public function boxA(){
        $con = $this->con();
        $sql = "select id,seat_group, status from seats where seat_group = 'Box-A'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $data){

            echo "
                    <a href ='?sql_ID=$data[id]&seatgroup=$data[seat_group]&status=$data[status]'".
                    (($data['status']=='BOOKED') ? "class='btn btn-danger' style='pointer-events: none'" : "class = 'btn'").">".
                        $data['id'].   
                    "</a>";  
        }
                
    }

    public function boxb(){
        $con = $this->con();
        $sql = "select id, seat_group, status from seats where seat_group = 'Box-B'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC); 

        foreach($result as $data){

            echo "

                    <a href ='?sql_ID=$data[id]&seatgroup=$data[seat_group]&status=$data[status]'".
                    (($data['status']=='BOOKED') ? "class='btn btn-danger' style='pointer-events: none'" : "class = 'btn'").">".
                        $data['id'].   
                    "</a>";  
        }
       
    }

    public function boxc(){
        $con = $this->con();
        $sql = "select id, seat_group, status from seats where seat_group = 'Box-C'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC); 


        foreach($result as $data){

            echo "
                    <a href ='?sql_ID=$data[id]&seatgroup=$data[seat_group]&status=$data[status]'".
                    (($data['status']=='BOOKED') ? "class='btn btn-danger' style='pointer-events: none'" : "class = 'btn'").">".
                        $data['id'].   
                    "</a>";  
        }
       
        
    }

    public function form(){

        if(!empty($_GET['sql_ID']) && !empty($_GET['seatgroup'])){
            echo "
            <div class='card bg-info mb-5'>
                <div class='card-body'>
                    <h5 class='card-title'>RESERVATION</h5>
                    <form method='GET'>
                        <div class='mb-3'>
                            <label class='form-label'>Fullname: </label>
                            <input type='text' class='form-control' name='fullname'>
                            <label class='form-label'>Contact #: </label>
                            <input type='text' class='form-control' name='contact'>
                        </div>
                       
                        <div class='mb-3'>
                            <label class='form-label'>number of reserved seat/s: </label>
                            <input type='number' class='form-control' name='seats'>
                            <label class='form-label'>Seat number: </label>
                            <input name = 'seat_number' class='form-control' value='".$_GET['sql_ID']."'>
                        </div>
                    
                        <div class='mb-3'>
                            <label class='form-label'>Date: </label>
                            <input type='date' class='form-control' name='date'>
                            
                        </div>
                        <div class='mb-3'>
                            <select class='form-select' name='time'>
                                <option selected>Time: </option>
                                <option value='13:00'>1:00 pm</option>
                                <option value='15:00'>3:00 pm</option>
                                <option value='16:00'>4:00 pm</option>
                                <option value='18:00'>6:00 pm</option>
                            </select>
                        </div>
                        <div class='mb-3'>
                            <select class='form-select' name='movie'>
                                <option selected>Movie</option>
                                <option value='1'>The Greatest Showman</option>
                                <option value='2'>Spongebob: The losing spatula movie</option>
                                <option value='3'>Iron man 5</option>
                                <option value='4'>This is the end 2</option>
                                <option value='5'>Hangover 4</option>
                            </select>
                        </div>
                       
                        
                        <button type='submit' class='btn btn-dark'>Book Seat</button>
                    </form>  
                </div>
            </div>

            ";
        
        }

    }

    public function viewData(){
        $con = $this->con();
        $sql = "select A.id,  A.fullname,A.contact, A.no_of_seats, A.seat_number, A.date,
        A.time, B.title from reservation A inner join movies B on A.movie_id = B.id";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC); 

        echo "
            <table class = 'table table-dark table-striped table-sm'>
                <thead>
                    <tr>
                        <th>Fullname</th> 
                        <th>Contact number</th>
                        <th># of seats</th>
                        <th>Seat #</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>";
            foreach($result as $data){
                echo "<tr>
                        <td>$data[fullname]</td>
                        <td>$data[contact]</td>
                        <td>$data[no_of_seats]</td>
                        <td>$data[seat_number]</td>
                        <td>$data[date]</td>
                        <td>$data[time]</td>
                        <td>$data[title]</td>
                        <td>
                            <a class = 'btn btn-danger btn-sm' href='?delete=$data[id]&Seatnum=$data[seat_number]'>
                            Cancel Reservation</a>
                        </td>
                    </tr>";
            }

        echo "</tbody></table>";
       
    }


}
?>
                           
       