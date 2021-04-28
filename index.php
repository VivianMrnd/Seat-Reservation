<?php
require_once 'php/init.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- for icon -->
     <link href="vendor/css/all.css" rel="stylesheet">
     <!-- for icon -->
    <link rel="stylesheet" type="text/css"  href="css/main.css">
    <title>SEAT RESERVATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon/icon.png">
</head>
<body class="">

    <!--NAVBAR-->
    <header id ="home">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/STARFILMS.png" class="img-fluid logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#movies">MOVIES</a>
                <a class="nav-link" href="#SCHEDULE">SCHEDULE</a>
              </div>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
            
          </div>
        </nav>

        <div class="banners">
          <div class="banner1">
            <img class="slideshow__img col-12" src="img/slideshow/slideshow1.jpg">
            <div class="text-box text-box1">
                <h3>NOW SHOWING</h3>
                <h1>IRON MAN 3</h1>
                <div class="divider"></div>
                <h2>APRIL 30, 2021</h2>
                <p class="description"> 3:00 PM - 6:00 PM</p>
                <br>
                <a class="btn booknow" href="login.php" type="button">Book Now</a>
            </div>
        </div>
        <div class="banner2 ">
            <img class="slideshow__img col-12" src="img/slideshow/slideshow2.jpg">
            <div class="text-box text-box2">
                <h3>NOW SHOWING</h3>
                <h1 class="text-start">THE GREATEST SHOWMAN</h1>
                <div class="divider"></div>
                <h2>APRIL 30, 2021</h2>
                <p class="description"> 11:00 AM - 1:00 PM</p>
                <br>
                <a class="btn booknow" href="login.php" type="button">Book Now</a>
            </div>
        </div>
        <div class="banner3">
            <img class="slideshow__img col-12" src="img/slideshow/slideshow3.jpg">
            <div class="text-box text-box3">
                <h3>NOW SHOWING</h3>
                <h1>THE HANGOVER 3</h1>
                <div class="divider"></div>
                <h2>APRIL 30, 2021</h2>
                <p class="description"> 6:00 PM - 8:00 PM</p>
                <br>
                <a class="btn booknow" href="login.php" type="button">Book Now</a>
            </div>
        </div>
        <div class="banner4">
            <img class="slideshow__img col-12" src="img/slideshow/slideshow4.jpg">
            <div class="text-box text-box4">
                <h3>NOW SHOWING</h3>
                <h1>THE SPONGEBOB MOVIE</h1>
                <div class="divider"></div>
                <h2>APRIL 30, 2021</h2>
                <p class="description"> 1:00 PM - 2:30 PM</p>
                <br>
                <a class="btn booknow" href="login.php" type="button">Book Now</a>
            </div>
          </div>
        </div>
    </header>


<!--HEADER-->
    <!-- <section class="hero" id="hero">
    
</section> -->

    
    <!--MOVIES: NOW SHOWING-->
    <div class="bg-dark movies" id="movies">
    <h1 class= "headtext_N"><strong>Now Showing</strong></h1>
    <div class="divider"></div>
        <div class="container">
          <div class="row">
            <div class="image col-sm-3">
              <img src="img/movie/movie1.jpg" class="image__img">
                <div class = "image__overlay">
                    <div class = "image__title">Book your seats now.</div>
                    <a class="btn booknow" href="login.php" type="button">Book Now</a>
                </div>
            </div>
            <div class="image col-sm-3 ">
              <img src="img/movie/movie2.jpg" class="image__img">
                <div class = "image__overlay">
                    <div class = "image__title">Book your seats now.</div>
                    <a class="btn booknow" href="login.php" type="button">Book Now</a>
                </div>
            </div>
            <div class="image col-sm-3">
              <img src="img/movie/movie3.jpg" class="image__img">
                <div class = "image__overlay">
                    <div class = "image__title">Book your seats now.</div>
                    <a class="btn booknow" href="login.php" type="button">Book Now</a>
                </div>
            </div>
            <div class="image col-sm-3">
              <img src="img/movie/movie4.jpg" class="image__img">
                <div class = "image__overlay">
                    <div class = "image__title">Book your seats now.</div>
                    <a class="btn booknow" href="login.php" type="button">Book Now</a>
                </div>
            </div>
            </div>
          </div>
        </div>
    </div>


   <!--MOVIES: COMING SOON-->
    <div class="bg-dark movies" id="movies">
    <h1 class= "headtext1"><strong>Coming Soon</strong></h1>
    <div class="divider"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-3 pb-sm-2">
              <img src="img/movie/movie5.jpg" class="moviephoto" href="movie.html">
            </div>
            <div class="col-sm-3 pb-sm-2 ">
              <img src="img/movie/movie6.jpg" class="moviephoto">
            </div>
            <div class="col-sm-3 pb-sm-2">
              <img src="img/movie/movie7.jpg" class="moviephoto" href="#">
            </div>
            <div class="col-sm-3 pb-sm-2">
              <img src="img/movie/movie8.jpg" class="moviephoto" href="#">
            </div>
            </div>
          </div>
        </div>
    </div>





   <!--MOVIES: SCHEDULE-->

<div class="bg-dark movies" id="SCHEDULE">
    <h1 class= "headtext"><strong>Now Showing</strong></h1>
    <div class="divider"></div>
        <div class="container">
          <div class="row">
            <div class="sched col-sm-5 pb-sm-2">
                <div class = "sched-div">
                    <h1 class="movie-title">THE GREATEST SHOWMAN</h1>
                    <div class="divider2"></div>
                    <h2 class ="movie-title">APRIL 30, 2021</h2>
                    <p class ="datetime"> 11:00 AM - 1:00 PM</p>
                    <br>
                    <div class="btn-div">
                    <a class="btn booknow" href="login.php" type="button">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="sched col-sm-5 pb-sm-2">
                <div class = "sched-div">
                    <h1 class="movie-title">THE HANGOVER III</h1>
                    <div class="divider2"></div>
                    <h2 class ="movie-title">APRIL 30, 2021</h2>
                    <p class ="datetime"> 6:00 PM - 8:00 PM</p>
                    <br>
                    <div class="btn-div">
                    <a class="btn booknow" href="login.php" type="button">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="sched col-sm-5 pb-sm-2">
                <div class = "sched-div">
                    <h1 class="movie-title">IRON MAN 3</h1>
                    <div class="divider2"></div>
                    <h2 class ="movie-title">APRIL 30, 2021</h2>
                    <p class ="datetime"> 3:00 PM - 6:00 PM</p>
                    <br>
                    <div class="btn-div">
                    <a class="btn   booknow" href="login.php" type="button">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="sched col-sm-5 pb-sm-2">
                <div class = "sched-div">
                    <h1 class="movie-title">THE SPONGEBOB MOVIE</h1>
                    <div class="divider2"></div>
                    <h2 class ="movie-title">APRIL 30, 2021</h2>
                    <p class ="datetime"> 1:00 PM - 2:30 PM</p>
                    <br>
                    <div class="btn-div">
                    <a class="btn  booknow" href="login.php" type="button">Book Now</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>



<!--FOOTER-->
    <footer>
      <div class="footer-container">
            <p class="ft2">Copyright for Educational Purposes.
            </p>
      </div>
     </footer>

     <div class="rtbutton">
      <a href="#home"><i class="fas fa-arrow-up"></i></a>
    </div>
    

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
</body>
</html>