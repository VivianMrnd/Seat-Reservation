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
              <strong>Walang error!</strong> yohoooo puta!!!!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';

            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Kingina!!!!!!!!!!!!!!</strong> errorrrrr putangina!!!!!!!!!!
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
    
    function editStatus(){
        if(!empty($_GET['sql_ID'])){
            $edit = new edit($_GET['sql_ID']);
            if($edit ->editReview()){

                echo '<div class="alert alert-info alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Walang error!</strong> yohoooo puta!!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
  
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                <strong>Kingina!!!!!!!!!!!!!!</strong> errorrrrr putangina!!!!!!!!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        }
    }

    // function Reject(){
    //     if(!empty($_GET['delete'])){
    //         $delete = new delete($_GET['delete']);
    //         if($delete ->RejectReview()){
    //             echo '<div class="alert alert-success alert-dismissible fade show fixed-bottom container" 
    //             role="alert"><strong>REVIEW REJECTED! 
    //             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //             </div>';
  
    //         }else{
    //             echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom container" 
    //             role="alert">ERROR DELETING/REJECTING REVIEW. 
    //             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //             </div>';
    //         }
    //     }
    // }
?>

