<?php
class view extends config{

    public function boxA(){
        $con = $this->con();
        $sql = "select id,seat_group from seats where seat_group = 'Box-A'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);

    
              
                foreach($result as $data){

                    echo "
                            <div class='grid-item'>
                                <a class='btn' href = '?sql_ID=$data[id]&seatgroup=$data[seat_group]'>$data[id]</a>
                
                            </div>
                           
                        ";
    
                }
                if(!empty($_GET['seatgroup'])&&!empty($_GET['seatgroup'])){
                    echo  $_GET['seatgroup']. '-'.$_GET['sql_ID'];
                }
                    

                // echo "
                //     <!-- Modal -->
                //     <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                //     <div class='modal-dialog'>
                //         <div class='modal-content'>
                        
                //         <div class='modal-body'>
                           
                //         </div>
                //         <div class='modal-footer'>
                //             <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                //         </div>
                //         </div>
                //     </div>
                //     </div>
                // ";

       
    }

    public function boxb(){
        $con = $this->con();
        $sql = "select id, seat_group from seats where seat_group = 'Box-B'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC); 

        foreach($result as $data){

            echo "
                    <div class='grid-item'>
                        <a  class='btn' href = '?sql_ID=$data[id]&seatgroup=$data[seat_group]'>$data[id]</a>
                    </div>
                    
                ";
            
        }
       
    }

    public function boxc(){
        $con = $this->con();
        $sql = "select id, seat_group from seats where seat_group = 'Box-C'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC); 

        foreach($result as $data){

            echo "
            <div class='grid-item'>
                <a  class='btn' href = '?sql_ID=$data[id]&seatgroup=$data[seat_group]'>$data[id]</a>
            </div>


                
                ";
            
        }
       
    }


}
?>
