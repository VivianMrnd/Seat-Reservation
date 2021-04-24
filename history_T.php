<?php
  require_once 'php/init.php';
?>

<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>SEAT RESERVATION HISTORY</title>
</head>
<style>
    .history{
        height: 500px;
        overflow-x: hidden;
    }
</style>
<body class='container'>
    <div class="history mt-md-5">
        <h1 class='text-center'>History</h1>
        <h4 class='text-center'>Movie: This is the end 2</h4>
        <?php  TTE_History(); ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>