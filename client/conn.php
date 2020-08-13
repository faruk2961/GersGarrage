<?php
// if (session_status() == PHP_SESSION_ACTIVE) {
    
//   }else{
//       session_start();
      
//   }
//session_start();

$servername = "mysql3001.mochahost.com";
$username = "localkfm_client";
$password = "8&RM-V2sE&YG";
$databasename = "localkfm_client";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$databasename);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>