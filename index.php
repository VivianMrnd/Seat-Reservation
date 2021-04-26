<?php
require_once 'php/init.php';
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/movpick.css" />
  <link rel="icon" href="img/favicon.ico" />

  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&family=Montserrat:ital@1&display=swap" rel="stylesheet">
  
  <title>SEAT RESERVATION</title>
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
              <a class="nav-item nav-link active navitem" href="index.php">Home <span class="sr-only">(current)</span></a>

            </div>
          </div>
        </nav>
      </div>
    </div>


    <section class="gallery" id="gallery">
      <div class="container gallery-container">

        <h1>Now Showing</h1>

        <p class="page-description text-center">STARFILMS</p>

        <div class="tz-gallery">

          <div class="row">
            <div class="col-sm-6 col-md-4">
              <a class="lightbox">
                <img src="img/tgs.jpeg" alt="Park">
              </a>
              <h2 class="mtitle">The Greatest Showman</h2>
              <div class="text-center">
                <a class="btn btn-primary btn-sm btnbok" href="TheGreatestShowman.php" type="button" class="btn btn-primary btn-sm btnbok" target=_blank>Book Now</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <a class="lightbox">
                <img src="img/spbob.jpg" alt="Park">
              </a>
              <h2>The Spongebob Movie</h2>
              <div class="text-center">
                <a href="spongebob.php" type="button" class="btn btn-primary btn-sm btnbok" target=_blank>Book Now</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <a class="lightbox">
                <img src="img/Iron_Man.jpg" alt="Park">
              </a>
              <h2>Iron Man</h2>
              <div class="text-center">
                <a href="iron_man.php" type="button" class="btn btn-primary btn-sm btnbok" target=_blank>Book Now</a>
              </div>

            </div>
            <div class="col-sm-6 col-md-4">
              <a class="lightbox">
                <img src="img/the_end.jpg" alt="Park">
              </a>
              <h2>This is the End 2</h2>
              <div class="text-center">
                <a href="theend.php" type="button" class="btn btn-primary btn-sm btnbok" target=_blank>Book Now</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <a class="lightbox">
                <img src="img/hang.jpg" alt="Park">
              </a>
              <h2>Hangover</h2>
              <div class="text-center">
                <a href="hangover.php" type="button" class="btn btn-primary btn-sm btnbok text-center" target=_blank>Book Now</a>
              </div>


            </div>

          </div>

        </div>

      </div>

    </section>
  </section>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>