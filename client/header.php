<?php
include("conn.php");

session_start();
// if (!isset($_SESSION['user_email'])) {
// 	header('Location: index');
// 	exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/custom.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
        <header>
                <div class="collapse bg-dark" id="navbarHeader">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">At Ger’s Garage, we are dedicated to maximizing your automobile enthusiast experience. Each GG location is a purpose built, climate-controlled, vehicle storage facility and Club committed to amplifying the enjoyment of the car collecting hobby. GG provides the full spectrum of experiences for which vintage and collectible car owners have been searching for.</p>
                      </div>
                      <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                          <li><a href="index.php" class="text-white">Home</a></li>
                          <?php
                            if (!isset($_SESSION['user'])){
                          ?>
                          <li><a href="register.php" class="text-white">Register</a></li>
                          <li><a href="logins.php" class="text-white">LogIn</a></li>
                          <?php
                             }
                             else {

                            
                          ?>
                          <li><a href="booking.php" class="text-white">Booking</a></li>
                          <li><a href="history.php" class="text-white">History</a></li>
                          <li><a href="review.php" class="text-white">Review</a></li>
                          <li><a href="write_review.php" class="text-white">Write Review</a></li>
                          <li><a href="vehicle_register.php" class="text-white">Vehicle Register</a></li>
                          <?php
                            if($_SESSION['id'] == 1){
                          ?>
                          <li><a href="dashboard-index.php" class="text-white">Admin</a></li>
                            <?php } ?>
                          <li><a href="logout.php" class="text-white">Logout</a></li>
                          <?php 
                             }
                              ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="navbar navbar-dark bg-dark shadow-sm">
                  <div class="container d-flex justify-content-between">
                    <a href="index.php" class="navbar-brand d-flex align-items-center">
                      <svg height="30" width="200">
                        <text x="160" y="23" fill="white">GG</text>
                        
                      </svg>
                      <strong>Ger's Garage</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  </div>
                </div>
              </header>

                      