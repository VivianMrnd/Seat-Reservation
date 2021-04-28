<?php
require_once 'php/init.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="css/main.css">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="img/STARFILMS.png">
</head>
<body class="login">

    <!--NAVBAR-->
	<header id ="login">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <img src="img/STARFILMS.png" class="img-fluid logo">
            </div>
          </div>
        </nav>
    </header>


    <div class="loginpage">
    <div class="bg-dark loginform">
    	<h1 class="login-title">SIGN IN</h1>
    	<div class="divider2"></div>
		<form id="log-in-form" action="" method="POST">
		  <div class="container">
		    <input type="text" placeholder="Enter Username" name="username" required>
		    <input type="password" placeholder="Enter Password" name="password" required>
        <br>
		    <button class="loginbtn" type="submit">Login</button>
            <?php
          checkcred();
          ?>
		  </div>
		</form>
	</div>
	</div>



	<!--FOOTER-->
    <footer>
      <div class="footer-container">
            <p class="ft2">Copyright for Educational Purposes.
            </p>
      </div>
     </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>