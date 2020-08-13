<?php

include "conn.php";
$user_id= $_POST["user_id"];
$dateIn = $_POST["date-in"];
$service = $_POST["service"];
$vehicle = $_POST["vehicle"];
$query= "INSERT INTO booking (user_id, service_id, vehicle_type_id, date_in) 
VALUES ('$user_id', '$service', '$vehicle', '$dateIn')"; //Got from data base, took Id IS AuTO INCREMENT
if(mysqli_query($conn, $query)) {
    header("Location: thankyou.php");
}else{
    header("Location: error.php");
}
?>