<?php
class view extends config{

    //----------------------------------- The greatest showman------------------------------------------------------------
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
                            <input type='text' class='form-control' name='fullname' required>
                            <label class='form-label'>Contact #: </label>
                            <input type='text' class='form-control' name='contact' required>
                        </div>
                       
                        <div class='mb-3'>
                            <label class='form-label'>number of reserved seat/s: </label>
                            <input type='number' class='form-control' min='1' name='seats' required>
                            <label class='form-label'>Seat number:</label>                     
                            <select class='form-select' name='seat_number'>
                                <option selected value='".$_GET['sql_ID']."'>".$_GET['sql_ID']."</option>
                            </select> 
                        </div>
                    
                        <div class='mb-3'>

                            <label class='form-label'>Date:</label>  
                            <select name='date'>
                                <option selected>April 30, 2021</option>
                            </select> 
                            
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Time:</label>                     
                            <select name='time'>
                                <option selected value='11:00'>11:00 am </option>
                            </select>  
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Movie:</label>                     
                            <select class='form-select' name='movie'>
                                <option selected value= '1'>The Greatest Showman </option>
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
        A.time, B.date_showing from reservation A inner join movies B on A.movie_id = B.id where title = 'The greatest showman'";
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
                        <th>Date Reserved</th>
                        <th>Time</th>
                        <th>Date Showing</th>
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
                        <td>$data[date_showing]</td>
                        <td>
                            <a class = 'btn btn-danger btn-sm' href='?delete=$data[id]&Seatnum=$data[seat_number]'>
                            Cancel Reservation</a>
                        </td>
                    </tr>";
            }

        echo "</tbody></table>";
       
    }

    //-----------------------------spongebob----------------------------------------------------------------------------
    public function boxA_S(){
        $con = $this->con();
        $sql = "select id,seat_group, status from seats_spongebob where seat_group = 'Box-A'";
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

    public function boxb_S(){
        $con = $this->con();
        $sql = "select id, seat_group, status from seats_spongebob where seat_group = 'Box-B'";
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

    public function boxc_S(){
        $con = $this->con();
        $sql = "select id, seat_group, status from seats_spongebob where seat_group = 'Box-C'";
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

    public function form_S(){

        if(!empty($_GET['sql_ID']) && !empty($_GET['seatgroup'])){
            echo "
            <div class='card bg-info mb-5'>
                <div class='card-body'>
                    <h5 class='card-title'>RESERVATION</h5>
                    <form method='GET'>
                        <div class='mb-3'>
                            <label class='form-label'>Fullname: </label>
                            <input type='text' class='form-control' name='fullname' required>
                            <label class='form-label'>Contact #: </label>
                            <input type='text' class='form-control' name='contact' required>
                        </div>
                       
                        <div class='mb-3'>
                            <label class='form-label'>number of reserved seat/s: </label>
                            <input type='number' class='form-control' name='seats' min='1' required>
                            <label class='form-label'>Seat number:</label>                     
                            <select class='form-select' name='seat_number'>
                                <option selected value='".$_GET['sql_ID']."'>".$_GET['sql_ID']."</option>
                            </select> 
                        </div>
                    
                        <div class='mb-3'>

                            <label class='form-label'>Date:</label>  
                            <select name='date'>
                                <option selected>April 30, 2021</option>
                            </select>
                            
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Time:</label>                     
                            <select name='time' value='13:00'>
                                <option selected value='11:00'>1:00 pm </option>
                            </select>  
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Movie:</label>                     
                            <select class='form-select' name='movie'>
                                <option selected value= '2'>Spongebob the Movie</option>
                            </select> 
                        </div>
                       
                        
                        <button type='submit' class='btn btn-dark'>Book Seat</button>
                    </form>  
                </div>
            </div>

            ";
        
        }

    }
    public function viewData_S(){
        $con = $this->con();
        $sql = "select A.id,  A.fullname,A.contact, A.no_of_seats, A.seat_number, A.date,
        A.time, B.date_showing from reservation A inner join movies B on A.movie_id = B.id where title = 'Spongebob the movie'";
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
                        <th>Date Reserved</th>
                        <th>Time</th>
                        <th>Date Showing</th>
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
                        <td>$data[date_showing]</td>
                        <td>
                            <a class = 'btn btn-danger btn-sm' href='?delete=$data[id]&Seatnum=$data[seat_number]'>
                            Cancel Reservation</a>
                        </td>
                    </tr>";
            }

        echo "</tbody></table>";
       
    }

    
    //-----------------------------iron Man----------------------------------------------------------------------------
    public function boxA_I(){
        $con = $this->con();
        $sql = "select id,seat_group, status from seats_iron where seat_group = 'Box-A'";
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

    public function boxb_I(){
        $con = $this->con();
        $sql = "select id, seat_group, status from seats_iron where seat_group = 'Box-B'";
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

    public function boxc_I(){
        $con = $this->con();
        $sql = "select id, seat_group, status from seats_iron where seat_group = 'Box-C'";
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

    public function form_I(){

        
        if(!empty($_GET['sql_ID']) && !empty($_GET['seatgroup'])){
            echo "
            <div class='card bg-info mb-5'>
                <div class='card-body'>
                    <h5 class='card-title'>RESERVATION</h5>
                    <form method='GET'>
                        <div class='mb-3'>
                            <label class='form-label'>Fullname: </label>
                            <input type='text' class='form-control' name='fullname' required>
                            <label class='form-label'>Contact #: </label>
                            <input type='text' class='form-control' name='contact' required>
                        </div>
                       
                        <div class='mb-3'>
                            <label class='form-label'>number of reserved seat/s: </label>
                            <input type='number' class='form-control' name='seats' min='1' required>
                            <label class='form-label'>Seat number:</label>                     
                            <select class='form-select' name='seat_number'>
                                <option selected value='".$_GET['sql_ID']."'>".$_GET['sql_ID']."</option>
                            </select> 
                        </div>
                    
                        <div class='mb-3'>

                            <label class='form-label'>Date:</label>  
                            <select name='date'>
                                <option selected>April 30, 2021</option>
                            </select> 
                            
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Time:</label>                     
                            <select class='form-select' name='time'>
                                <option selected value='15:00'>3:00 pm </option>
                            </select>  
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Movie:</label>                     
                            <select class='form-select' name='movie'>
                                <option selected value= '3'>Iron man 3</option>
                            </select> 
                        </div>
                       
                        
                        <button type='submit' class='btn btn-dark'>Book Seat</button>
                    </form>  
                </div>
            </div>

            ";
        
        }

    }

    public function viewData_I(){
        $con = $this->con();
        $sql = "select A.id,  A.fullname,A.contact, A.no_of_seats, A.seat_number, A.date,
        A.time, B.date_showing from reservation A inner join movies B on A.movie_id = B.id where title = 'Iron man 3'";
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
                        <th>Date Reserved</th>
                        <th>Time</th>
                        <th>Date Showing</th>
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
                        <td>$data[date_showing]</td>
                        <td>
                            <a class = 'btn btn-danger btn-sm' href='?delete=$data[id]&Seatnum=$data[seat_number]'>
                            Cancel Reservation</a>
                        </td>
                    </tr>";
            }

        echo "</tbody></table>";
       
    }
    

     //-----------------------------This is the end 2----------------------------------------------------------------------------
     public function boxA_T(){
        $con = $this->con();
        $sql = "select id,seat_group, status from seats_this_is_the_end where seat_group = 'Box-A'";
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

    public function boxb_T(){
        $con = $this->con();
        $sql = "select id, seat_group, status from seats_this_is_the_end where seat_group = 'Box-B'";
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

    public function boxc_T(){
        $con = $this->con();
        $sql = "select id, seat_group, status from seats_this_is_the_end where seat_group = 'Box-C'";
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

    public function form_T(){

        
        if(!empty($_GET['sql_ID']) && !empty($_GET['seatgroup'])){
            echo "
            <div class='card bg-info mb-5'>
                <div class='card-body'>
                    <h5 class='card-title'>RESERVATION</h5>
                    <form method='GET'>
                        <div class='mb-3'>
                            <label class='form-label'>Fullname: </label>
                            <input type='text' class='form-control' name='fullname' required>
                            <label class='form-label'>Contact #: </label>
                            <input type='text' class='form-control' name='contact' required>
                        </div>
                       
                        <div class='mb-3'>
                            <label class='form-label'>number of reserved seat/s: </label>
                            <input type='number' class='form-control' name='seats' min='1' required>
                            <label class='form-label'>Seat number:</label>                     
                            <select class='form-select' name='seat_number'>
                                <option selected value='".$_GET['sql_ID']."'>".$_GET['sql_ID']."</option>
                            </select> 
                        </div>
                    
                        <div class='mb-3'>

                            <label class='form-label'>Date:</label>  
                            <select name='date'>
                                <option selected>April 30, 2021</option>
                            </select>
                            
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Time:</label>                     
                            <select class='form-select' name='time'>
                                <option selected value='18:00'>6:00 pm </option>
                            </select>  
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Movie:</label>                     
                            <select class='form-select' name='movie'>
                                <option selected value= '4'>This is the end 2</option>
                            </select> 
                        </div>
                       
                        
                        <button type='submit' class='btn btn-dark'>Book Seat</button>
                    </form>  
                </div>
            </div>

            ";
        
        }

    }

    public function viewData_T(){
        $con = $this->con();
        $sql = "select A.id,  A.fullname,A.contact, A.no_of_seats, A.seat_number, A.date,
        A.time, B.date_showing from reservation A inner join movies B on A.movie_id = B.id where title = 'This is the end 2'";
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
                        <th>Date Reserved</th>
                        <th>Time</th>
                        <th>Date Showing</th>
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
                        <td>$data[date_showing]</td>
                        <td>
                            <a class = 'btn btn-danger btn-sm' href='?delete=$data[id]&Seatnum=$data[seat_number]'>
                            Cancel Reservation</a>
                        </td>
                    </tr>";
            }

        echo "</tbody></table>";
       
    }

     //-----------------------------Hangover 4----------------------------------------------------------------------------
     public function boxA_H(){
        $con = $this->con();
        $sql = "select id,seat_group, status from seats_hangover where seat_group = 'Box-A'";
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

    public function boxb_H(){
        $con = $this->con();
        $sql = "select id, seat_group, status from seats_hangover where seat_group = 'Box-B'";
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

    public function boxc_H(){
        $con = $this->con();
        $sql = "select id, seat_group, status from seats_hangover where seat_group = 'Box-C'";
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

    public function form_H(){

        
        if(!empty($_GET['sql_ID']) && !empty($_GET['seatgroup'])){
            echo "
            <div class='card bg-info mb-5'>
                <div class='card-body'>
                    <h5 class='card-title'>RESERVATION</h5>
                    <form method='GET'>
                        <div class='mb-3'>
                            <label class='form-label'>Fullname: </label>
                            <input type='text' class='form-control' name='fullname' required>
                            <label class='form-label'>Contact #: </label>
                            <input type='text' class='form-control' name='contact' required>
                        </div>
                       
                        <div class='mb-3'>
                            <label class='form-label'>number of reserved seat/s: </label>
                            <input type='number' class='form-control' name='seats' min='1' required>
                            <label class='form-label'>Seat number:</label>                     
                            <select class='form-select' name='seat_number'>
                                <option selected value='".$_GET['sql_ID']."'>".$_GET['sql_ID']."</option>
                            </select> 
                        </div>
                    
                        <div class='mb-3'>

                            <label class='form-label'>Date:</label>  
                            <select name='date'>
                                <option selected>April 30, 2021</option>
                            </select> 
                            
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Time:</label>                     
                            <select class='form-select' name='time'>
                                <option selected value='20:00'>8:00 pm </option>
                            </select>  
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Movie:</label>                     
                            <select class='form-select' name='movie'>
                                <option selected value= '5'>Hangover 3</option>
                            </select> 
                        </div>
                       
                        
                        <button type='submit' class='btn btn-dark'>Book Seat</button>
                    </form>  
                </div>
            </div>

            ";
        
        }

    }

    public function viewData_H(){
        $con = $this->con();
        $sql = "select A.id,  A.fullname,A.contact, A.no_of_seats, A.seat_number, A.date,
        A.time, B.date_showing from reservation A inner join movies B on A.movie_id = B.id where title = 'Hangover 3'";
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
                        <th>Date Showing</th>
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
                        <td>$data[date_showing]</td>
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


                           