<?php
session_start();
if( empty($_SESSION['username']) ){
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<head>
    <title>Dasboard</title>
</head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>dasboard</title>
  </head>
  <style type="text/css">
    .btn btn-dark{
      border-radius: 500px;
    }
  </style>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h3> Hallo Selamat Datang <?php echo $_SESSION['username']; ?> </h3>
    <div class="but">
      <input class="btn btn-dark" type="button" value="">
<input class="btn btn-dark" type="submit" value="">
<input class="btn btn-primary" type="reset" value="">
    </div>

  </div>
</nav>
From: <input type="text" name="u"><br>
Subject :<input type="text" name="username"><br>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">SELAMAT DATANG</h4>
  <p>Your account is succesfully created</p>
  <p>Please enjoy</p>
  <p>Sweng-Academy Team</p>
    <a href="login.php">Keluar</a>
</body>
</html>