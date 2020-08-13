<?php
include("conn.php");

$plate = $_POST["plate"]; 
$model = $_POST["model"]; 
$make = $_POST["make"]; 
$vehicle_type = $_POST["vehicle_type"];
// $user_id = $_SESSION["user_id"];
$user_id = 2;
$query = "INSERT INTO vehicles (model,make,vehicle_type_id) VALUES ('$model','$make',$vehicle_type)";
if(mysqli_query($conn, $query)) {
  $query = "SELECT id FROM vehicles ORDER BY id DESC LIMIT 1";
  if($result = mysqli_query($conn, $query)){
    $row = mysqli_fetch_assoc($result);
    $rowcount=mysqli_num_rows($result); // to give us how many row over there
    if ($rowcount === 1) 
    { 
        
        $vehicle_type_id =$row["id"];
        $query = "INSERT INTO user_vehicle(vehicles_id,user_id,plate) VALUES  ($vehicle_type_id,$user_id,'$plate')"; 
    }
        if(mysqli_query($conn, $query)) {
            header("Location: index.php");

        }else{
            echo "Register of the user fail";
            echo  $query;
        }

       
  }   
        
        else 
        {
        echo "Select the last id failed";
        echo  $query;
        }
        
        
    
        }else{
        echo "Register of vehicle type failed";
        echo  $query;
        }
    




?>