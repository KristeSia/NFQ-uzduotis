<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Kristes projektas </title>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

        <link rel="stylesheet" href="css/master.css">
    </head>



    <body>

      <?php
      include_once('functions.php');
       ?>

      <!-- start 1 container -->
      <div class="container-fluid">
        <!-- start 1 row -->
        <div class="row header aukstis-100">

          <!-- start 1 column -->
          <div class="col-md-12 d-flex align-items-center justify-content-center meniu">
            <!-- start Navigation -->
            <ul class="nav">
                <li class="dropdown">
                  <a href="index.php" class="dropbtn">Shop All</a>
                  <div class="dropdown-content">
                    <a class="font-weight-light" href="rings.php">Rings</a>
                    <a class="font-weight-light" href="earings.php">Earings</a>
                    <a class="font-weight-light" href="bracelets.php">Bracelets</a>
                    <a class="font-weight-light" href="keychains.php">Keychains</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="purchase-list.php">Purchase List</a>
                </li>
            </ul>
            <!-- end Navigation -->
          </div>
          <!-- end 1 column -->

        </div>
        <!-- end 1 row -->
      </div>
      <!-- end 1 container -->
