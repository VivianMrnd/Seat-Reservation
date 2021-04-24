<?php
    function TGSM_History(){
        Cancel(); History(); editStatus_A();
    }
    function SSP_History(){
        Cancel(); History_S(); editStatus_A_S();
    }
    function IRNMN_History(){
        Cancel(); History_I(); editStatus_A_I();
    }
    function TTE_History(){
        Cancel(); History_T(); editStatus_A_T();
    }
    function HNGVR_History(){
        Cancel(); History_H(); editStatus_A_H();
    }
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
                                  <input class='form-control' name='seat_number' value='".$_GET['seat_number']."' />
                              </div>
                          
                              <div class='mb-3'>
                                  <label class='form-label'>Date: </label>
                                  <select class='form-select' name='date'>
                                    <option selected value='".$_GET['date']."'>".$_GET['date']."</option>
                                  </select> 
                                  <label class='form-label'>Time: </label>
                                  <select class='form-select' name='time'>
                                    <option selected value='".$_GET['time']."'>".$_GET['time']."</option>
                                  </select>
                                  <label class='form-label'>Movie id: </label>
                                  <select class='form-select' name='movie'>
                                    <option selected value='".$_GET['movie']."'>".$_GET['movie']."</option>
                                  </select> 
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

    function insertR_S(){

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
                                  <input class='form-control' name='seat_number' value='".$_GET['seat_number']."' />
                              </div>
                          
                              <div class='mb-3'>
                                  <label class='form-label'>Date: </label>
                                  <select class='form-select' name='date'>
                                    <option selected value='".$_GET['date']."'>".$_GET['date']."</option>
                                  </select> 
                                  <label class='form-label'>Time: </label>
                                  <select class='form-select' name='time'>
                                    <option selected value='".$_GET['time']."'>".$_GET['time']."</option>
                                  </select>
                                  <label class='form-label'>Movie id: </label>
                                  <select class='form-select' name='movie'>
                                    <option selected value='".$_GET['movie']."'>".$_GET['movie']."</option>
                                  </select> 
                              </div>                            

                              <button type='submit' class='btn btn-dark'>Book Seat</button>
                          </form>  
                      </div>
                  </div>
      
                  ";
                
                    }
                }

                editStatus_S();

            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Errorrr</strong> Failed to insert.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        }
    }
    function insertR_I(){

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
                                  <input class='form-control' name='seat_number' value='".$_GET['seat_number']."' />
                              </div>
                          
                              <div class='mb-3'>
                                  <label class='form-label'>Date: </label>
                                  <select class='form-select' name='date'>
                                    <option selected value='".$_GET['date']."'>".$_GET['date']."</option>
                                  </select> 
                                  <label class='form-label'>Time: </label>
                                  <select class='form-select' name='time'>
                                    <option selected value='".$_GET['time']."'>".$_GET['time']."</option>
                                  </select>
                                  <label class='form-label'>Movie id: </label>
                                  <select class='form-select' name='movie'>
                                    <option selected value='".$_GET['movie']."'>".$_GET['movie']."</option>
                                  </select> 
                              </div>                            

                              <button type='submit' class='btn btn-dark'>Book Seat</button>
                          </form>  
                      </div>
                  </div>
      
                  ";
                
                    }
                }

                editStatus_I();

            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Errorrr</strong> Failed to insert.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        }
    }
    function insertR_T(){

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
                                  <input class='form-control' name='seat_number' value='".$_GET['seat_number']."' />
                              </div>
                          
                              <div class='mb-3'>
                                  <label class='form-label'>Date: </label>
                                  <select class='form-select' name='date'>
                                    <option selected value='".$_GET['date']."'>".$_GET['date']."</option>
                                  </select> 
                                  <label class='form-label'>Time: </label>
                                  <select class='form-select' name='time'>
                                    <option selected value='".$_GET['time']."'>".$_GET['time']."</option>
                                  </select>
                                  <label class='form-label'>Movie id: </label>
                                  <select class='form-select' name='movie'>
                                    <option selected value='".$_GET['movie']."'>".$_GET['movie']."</option>
                                  </select> 
                              </div>                            

                              <button type='submit' class='btn btn-dark'>Book Seat</button>
                          </form>  
                      </div>
                  </div>
      
                  ";
                
                    }
                }

                editStatus_T();

            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Errorrr</strong> Failed to insert.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        }
    }
    function insertR_H(){

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
                                  <input class='form-control' name='seat_number' value='".$_GET['seat_number']."' />
                              </div>
                          
                              <div class='mb-3'>
                                  <label class='form-label'>Date: </label>
                                  <select class='form-select' name='date'>
                                    <option selected value='".$_GET['date']."'>".$_GET['date']."</option>
                                  </select> 
                                  <label class='form-label'>Time: </label>
                                  <select class='form-select' name='time'>
                                    <option selected value='".$_GET['time']."'>".$_GET['time']."</option>
                                  </select>
                                  <label class='form-label'>Movie id: </label>
                                  <select class='form-select' name='movie'>
                                    <option selected value='".$_GET['movie']."'>".$_GET['movie']."</option>
                                  </select> 
                              </div>                            

                              <button type='submit' class='btn btn-dark'>Book Seat</button>
                          </form>  
                      </div>
                  </div>
      
                  ";
                
                    }
                }

                editStatus_H();

            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Errorrr</strong> Failed to insert.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        }
    }
    #---------------------------------Spongebob--------------------------------------
    function viewBoxA_S(){

        $view = new view();
        $view->boxA_S();
        
    }

    
    function viewBoxB_S(){

        $view = new view();
        $view->boxb_S();
    }

    function viewBoxC_S(){

        $view = new view();
        $view->boxc_S();
       
    }

    function showForm_S(){
        $view = new view();
        $view->form_S();
    }
    function History_S(){
        $view = new view();
        
        $view->viewData_S();
       
    }

    #-----------------------the greatest showman-------------------------------------------
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

    function showForm(){
        $view = new view();
        $view->form();
    }
    function History(){
        $view = new view();
        
        $view->viewData();
       
    }

    #---------------------------------------------iron man---------------------------------------------
    function viewBoxA_I(){

        $view = new view();
        $view->boxA_I();
        
    }

    
    function viewBoxB_I(){

        $view = new view();
        $view->boxb_I();
    }

    function viewBoxC_I(){

        $view = new view();
        $view->boxc_I();
       
    }

    function showForm_I(){
        $view = new view();
        $view->form_I();
    }
    function History_I(){
        $view = new view();
        
        $view->viewData_I();
       
    }

     #--------------------------------this is the end-------------------------------------------------------
    function viewBoxA_T(){

        $view = new view();
        $view->boxA_T();
        
    }

    
    function viewBoxB_T(){

        $view = new view();
        $view->boxb_T();
    }

    function viewBoxC_T(){

        $view = new view();
        $view->boxc_T();
       
    }

    function showForm_T(){
        $view = new view();
        $view->form_T();
    }
    function History_T(){
        $view = new view();
        
        $view->viewData_T();
       
    }

     #------------------------------------------------------hangover--------------------------------------------
     function viewBoxA_H(){

        $view = new view();
        $view->boxA_H();
        
    }

    
    function viewBoxB_H(){

        $view = new view();
        $view->boxb_H();
    }

    function viewBoxC_H(){

        $view = new view();
        $view->boxc_H();
       
    }

    function showForm_H(){
        $view = new view();
        $view->form_H();
    }
    function History_H(){
        $view = new view();
        
        $view->viewData_H();
       
    }
   
    #---------------------------------------Greatest showman ------------------------------------
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
              
            //   $edit ->booked();
            //   $edit = new edit($_GET['seat_number']);
            //   echo($_GET['seat_number']);
             
              
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
             
              
            }
        }
    }

     #-----------------------------------spongebob-------------------------------------------
     function editStatus_S(){
        if(!empty($_GET['seat_number'])){
            $edit = new edit($_GET['seat_number']);
            if($edit->booked_S()){

                echo '<div class="alert alert-info alert-dismissible fade show fixed-bottom" role="alert">
                Changed status successfully !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
  
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Error!</strong>Failed to changed status!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
             
              
            }
        }
    }

    function editStatus_A_S(){
        if(!empty($_GET['Seatnum'])){
            $edit = new edit($_GET['Seatnum']);
            if($edit->available_S()){

                echo '<div class="alert alert-info alert-dismissible fade show fixed-bottom" role="alert">
                Changed status to available successfully !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
  
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Error!</strong>Failed to changed status to available!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
             
              
            }
        }
    }

     #-----------------------------------iron man-------------------------------------------
     function editStatus_I(){
        if(!empty($_GET['seat_number'])){
            $edit = new edit($_GET['seat_number']);
            if($edit->booked_I()){

                echo '<div class="alert alert-info alert-dismissible fade show fixed-bottom" role="alert">
                Changed status successfully !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
  
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Error!</strong>Failed to changed status!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
             
              
            }
        }
    }

    function editStatus_A_I(){
        if(!empty($_GET['Seatnum'])){
            $edit = new edit($_GET['Seatnum']);
            if($edit->available_I()){

                echo '<div class="alert alert-info alert-dismissible fade show fixed-bottom" role="alert">
                Changed status to available successfully !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
  
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Error!</strong>Failed to changed status to available!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
             
              
            }
        }
    }

     #-----------------------------------this is the end-------------------------------------------
     function editStatus_T(){
        if(!empty($_GET['seat_number'])){
            $edit = new edit($_GET['seat_number']);
            if($edit->booked_T()){

                echo '<div class="alert alert-info alert-dismissible fade show fixed-bottom" role="alert">
                Changed status successfully !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
  
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Error!</strong>Failed to changed status!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
             
              
            }
        }
    }

    function editStatus_A_T(){
        if(!empty($_GET['Seatnum'])){
            $edit = new edit($_GET['Seatnum']);
            if($edit->available_T()){

                echo '<div class="alert alert-info alert-dismissible fade show fixed-bottom" role="alert">
                Changed status to available successfully !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
  
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Error!</strong>Failed to changed status to available!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
             
              
            }
        }
    }

      #-----------------------------------hangover-------------------------------------------
      function editStatus_H(){
        if(!empty($_GET['seat_number'])){
            $edit = new edit($_GET['seat_number']);
            if($edit->booked_H()){

                echo '<div class="alert alert-info alert-dismissible fade show fixed-bottom" role="alert">
                Changed status successfully !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
  
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Error!</strong>Failed to changed status!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
             
              
            }
        }
    }

    function editStatus_A_H(){
        if(!empty($_GET['Seatnum'])){
            $edit = new edit($_GET['Seatnum']);
            if($edit->available_H()){

                echo '<div class="alert alert-info alert-dismissible fade show fixed-bottom" role="alert">
                Changed status to available successfully !
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
  
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Error!</strong>Failed to changed status to available!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
             
              
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
?>

