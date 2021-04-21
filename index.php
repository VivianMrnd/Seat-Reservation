<?php
  require_once 'php/init.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
    <style>
        .grid-container {
        display: grid;
        grid-template-columns: auto auto auto;
        background-color: #2196F3;
        padding: 5px;
        }
        .grid-item {
        background-color: rgba(255, 255, 255, 0.8);
        border: 1px solid rgba(0, 0, 0, 0.8);
        padding: 5px;
        font-size: 30px;
        text-align: center;
        }
    </style>
</head>
  </head>
  <body class="container">
        
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-info">
                <div class="card-body">
                  <h5 class="card-title">Book</h5>
                  <?php insertR(); ?>
                 
                  <form method='GET'>
                    <div class='mb-3'>
                        <label class='form-label'>Fullname</label>
                        <input type='text' class='form-control' name='fullname'>
                    </div>
                    <div class='mb-3'>
                        <label class='form-label'>Contact #</label>
                        <input type='text' class='form-control' name='contact'>
                    </div>
                    <div class='mb-3'>
                        <label class='form-label'>number of reserved seat/s</label>
                        <input type='number' class='form-control' name='seats'>
                        
                    </div>
                    <div class='mb-3'>
                        <label class='form-label'>Seat number</label>
                        <input type='text' class='form-control' name='seat_number'>
                    </div>
                    <div class='mb-3'>
                        <label class='form-label'>Date</label>
                        <input type='date' class='form-control' name='date'>
                    </div>
                    <div class='mb-3'>
                        <!-- <label class='form-label'>Time</label>
                        <input type='time' class='form-control' name='time'> -->
                        <select class='form-select' aria-label='Default select example' name='time'>
                            <option selected>Time</option>
                            <option value='13:00'>1:00 pm</option>
                            <option value='15:00'>3:00 pm</option>
                            <option value='16:00'>4:00 pm</option>
                            <option value='18:00'>6:00 pm</option>
                        </select>
                    </div>
                    <div class='mb-3'>
                        <select class='form-select' aria-label='Default select example' name='movie'>
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
        </div>
        <div class="col-md-9 mt-5">
            <div class="row">
                <div class="col-md-4">
                    <h2>BOX A</h2>
                    <div class="grid-container">
                    <?php viewBoxA(); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2>BOX B</h2>
                    <div class="grid-container">
                    <?php viewBoxB(); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2>BOX C</h2>
                    <div class="grid-container">
                    <?php viewBoxC(); ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        
  </body>
</html>