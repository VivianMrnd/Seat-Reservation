<?php
  require_once 'php/init.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <title>SEAT RESERVATION - Spongebob</title>
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
      <h1>Spongebob: the missing spatula movie</h1>
    <a class="btn btn-info mt-md-5 text-center" href= history_S.php target=_blank><h4>View History</h4></a>
    <div class="row">
        <div class="col-md-3 mt-md-5">
                <?php 
                    insertR_S(); 
                    showForm_S(); 
                ?>
        </div>
        <div class='col-md-9 mt-md-5'>
            <div class='row'>
                <div class='col-md-4'>
                    <h2>BOX A</h2>
                    <div class='grid-container'>
                        <div class='grid-item'>
                            <?php viewBoxA_S(); ?>
                        </div>
                    </div>
                </div>
                <div class='col-md-4'>
                    <h2>BOX B</h2>
                    <div class='grid-container'>
                        <div class='grid-item'>
                            <?php viewBoxB_S(); ?>
                        </div>                   
                    </div>
                </div>
                <div class='col-md-4'>
                    <h2>BOX C</h2>
                    <div class='grid-container'>
                        <div class='grid-item'>
                            <?php 
                                viewBoxC_S();  
                            ?>
                        </div> 
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
    </body>
</html>