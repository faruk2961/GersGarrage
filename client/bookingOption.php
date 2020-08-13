<?php
$service_options = " ";


$vehicle_options = " ";
$query_vehicle = "SELECT id,plate FROM user_vehicle WHERE user_id = " .$_SESSION['id'];
$result_vehicles = mysqli_query($conn, $query_vehicle);
while($row = mysqli_fetch_array($result_vehicles)){
    $vehicle_options .= "<option value='".$row['id']."'>".$row['plate']."</options>";
}

?>