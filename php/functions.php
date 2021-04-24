<?php
    // function viewSeats(){
    //     viewBoxA();
    //     viewBoxB();
    //     viewBoxC();
    // }

    function insertR(){

        if(!empty($_GET['fullname']) && !empty($_GET['contact'])&& !empty($_GET['seats'])&& !empty($_GET['seat_number'])
        && !empty($_GET['date'])&& !empty($_GET['time'])&& !empty($_GET['movie']))
        {
            $insert = new insert($_GET['fullname'],$_GET['contact'],$_GET['seats'],$_GET['seat_number'],$_GET['date'],$_GET['time'],
            $_GET['movie']);

            if($insert ->insertReservation()){
              echo '<div class="alert alert-info alert-dismissible fade show fixed-bottom" role="alert">
              <strong>Walang error!</strong>Inserted successful!!!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';

            if(!empty($_GET['seats'])){
                if($_GET['seats']>1){
                  echo "
                  <div class='card bg-info mb-5'>
                      <div class='card-body'>
                          <h5 class='card-title'>RESERVATION</h5>
                          <form method='GET'>
                              <div class='mb-3'>
                                  <label class='form-label'>Fullname: </label>
                                  <input type='text' class='form-control' name='fullname' value='".$_GET['fullname']."'>
                                  <label class='form-label'>Contact #: </label>
                                  <input type='text' class='form-control' name='contact' value='".$_GET['contact']."'>
                              </div>
                             
                              <div class='mb-3'>
                                  <label class='form-label'>number of reserved seat/s: </label>
                                  <input type='number' class='form-control'name='seats' value='".$_GET['seats']."'>
                                  <label class='form-label'>Seat number: </label>
                                  <input name = 'seat_number' class='form-control' value='".$_GET['seat_number']."'>
                              </div>
                          
                              <div class='mb-3'>
                                  <label class='form-label'>Date: </label>
                                  <input type='date' name='date' value='".$_GET['date']."'>
                                  <label class='form-label'>Time: </label>
                                  <input name='time' value='".$_GET['time']."'/>
                                  <label class='form-label'>Movie id: </label>
                                  <input name='movie' value='".$_GET['movie']."'/>
                              </div>
                             
                              
                              <button type='submit' class='btn btn-dark'>Book Seat</button>
                          </form>  
                      </div>
                  </div>
      
                  ";
                
                    }
                }

                editStatus();

            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Errorrr</strong> Failed to insert.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        }
    }

    function viewBoxA(){

        $view = new view();
        $view->boxA();
        
    }

    
    function viewBoxB(){

        $view = new view();
        $view->boxb();
    }

    function viewBoxC(){

        $view = new view();
        $view->boxc();
       
    }

    function History(){
        $view = new view();
        
        $view->viewData();
       
    }

    function showForm(){
        $view = new view();
        $view->form();
    }
   
    
    function editStatus(){
        if(!empty($_GET['seat_number'])){
            $edit = new edit($_GET['seat_number']);
            if($edit->booked()){

                echo '<div class="alert alert-info alert-dismissible fade show fixed-bottom" role="alert">
                Changed status successfully !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
  
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Error!</strong>Failed to changed status!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              $edit ->booked();
              $edit = new edit($_GET['seat_number']);
              echo($_GET['seat_number']);
             
              
            }
        }
    }

    function Cancel(){
        if(!empty($_GET['delete'])){
            $delete = new delete($_GET['delete']);
            if($delete ->Cancel_Booked()){
                echo '<div class="alert alert-success alert-dismissible fade show fixed-bottom container" 
                role="alert"><strong>Booked Cancelled! 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
  
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom container" 
                role="alert">ERROR Cancelling Reservation! 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        }
    }

    function editStatus_A(){
        if(!empty($_GET['Seatnum'])){
            $edit = new edit($_GET['Seatnum']);
            if($edit->available()){

                echo '<div class="alert alert-info alert-dismissible fade show fixed-bottom" role="alert">
                Changed status to available successfully !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
  
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Error!</strong>Failed to changed status to available!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              $edit ->booked();
              $edit = new edit($_GET['seat_number']);
              echo($_GET['seat_number']);
             
              
            }
        }
    }
?>

