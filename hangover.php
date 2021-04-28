
<?php
require_once 'php/init.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bookingzx.css" />
  <link rel="icon" href="img/icon/icon.png" />

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&family=Montserrat:ital@1&display=swap" rel="stylesheet">
  <title>SEAT RESERVATION</title>
  <style>

  </style>
</head>
</head>

<body>
  <section class="heder" id="title">
    <div class="container-fluid navcon">
      <div class="container">
        <nav class="navbar navbar-expand-md  pt-md-2 mb-5">
          <img src="img/logo.png" class="img-fluid logo" />
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active navitem" href="booking.php">Home <span class="sr-only"></span></a>

            </div>
          </div>
        </nav>
      </div>
    </div>

    <div class="container gallery-container">
    <h1>Hangover 2</h1>
      <div class="text-center">
      <a class="btn btn-info mt-md-5 text-center btnbok" href=history.php>
        <h4>View History</h4>
      </a>
      </div>
      <div class="row">
        <div class="col-md-3 mt-md-5">
          <?php
        insertR_H(); 
        showForm_H(); 
          ?>
        </div>
        <div class='col-md-9 mt-md-5'>
          <div class='row'>
            <div class='col-md-4'>
              <h2>BOX A</h2>
              <div class='grid-container'>
                <div class='grid-item'>
                <?php viewBoxA_H(); ?>
                </div>
              </div>
            </div>
            <div class='col-md-4'>
              <h2>BOX B</h2>
              <div class='grid-container'>
                <div class='grid-item'>
                <?php viewBoxB_H(); ?>
                </div>
              </div>
            </div>
            <div class='col-md-4'>
              <h2>BOX C</h2>
              <div class='grid-container'>
                <div class='grid-item'>
                <?php viewBoxC_H(); ?>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>