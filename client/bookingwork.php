<?php 
  include('dashboard-header.php'); 

  if($_GET['del_id']){
    $id = $_GET['del_id'];
    mysqli_query($conn,"DELETE FROM `mechanicbooking` WHERE id='$id' ");
    echo("<script>window.location='bookingwork.php' </script>");
 }

  if(isset($_GET['send_id'])){
    
    $id = $_GET['send_id'];
    $name = $_GET['name'];
    $query_vehicle = "SELECT * FROM `booking` WHERE `id`='$id' ";
    $result_vehicles = mysqli_query($conn, $query_vehicle);
    $row = mysqli_fetch_array($result_vehicles);
    $user =  $row['user'];
    $vehicle = $row['vehicle'];
    $service = $row['service'];
    $status = $row['status'];
    mysqli_query($conn,"INSERT INTO `mechanicbooking`(`customer`, `plate`, `service`, `status`, `mechanics`, `user_id`) 
                                                     VALUES ('$user','$vehicle','$service','$status','$name','$id')");
      echo("<script>window.location='bookingwork.php' </script>");

 }

  // if($_GET['del_id']){
  //    $id = $_GET['del_id'];
  //    mysqli_query($conn,"DELETE FROM `booking` WHERE id='$id' ");
  // }


  if(isset($_GET['in_service_id'])){
      $id = $_GET['in_service_id'];
      mysqli_query($conn,"UPDATE `mechanicbooking` SET status='In Service' WHERE id='$id' ");
      $row = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `mechanicbooking` WHERE id='$id' "));
      $ids = $row['user_id'];
      mysqli_query($conn,"UPDATE `booking` SET status='In Service' WHERE id='$ids' ");
      echo("<script>alert('Update in In Service'); window.location='bookingwork.php' </script>");
     }

     if(isset($_GET['Fixed_id'])){
      $id = $_GET['Fixed_id'];
      mysqli_query($conn,"UPDATE `mechanicbooking` SET status='Fixed' WHERE id='$id' ");
      $row = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `mechanicbooking` WHERE id='$id' "));
      $ids = $row['user_id'];
      mysqli_query($conn,"UPDATE `booking` SET status='Fixed' WHERE id='$ids' ");
      echo("<script>alert('Update in Fixed'); window.location='bookingwork.php' </script>");
     }

     if(isset($_GET['Collected_id'])){
      $id = $_GET['Collected_id'];
      mysqli_query($conn,"UPDATE `mechanicbooking` SET status='Collected' WHERE id='$id' ");
      $row = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `mechanicbooking` WHERE id='$id' "));
      $ids = $row['user_id'];
      mysqli_query($conn,"UPDATE `booking` SET status='Collected' WHERE id='$ids' ");
      echo("<script>alert('Update in Collected'); window.location='bookingwork.php' </script>");
     }

     if(isset($_GET['Unrepairable_id'])){
      $id = $_GET['Unrepairable_id'];
      mysqli_query($conn,"UPDATE `mechanicbooking` SET status='Unrepairable' WHERE id='$id' ");
      $row = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `mechanicbooking` WHERE id='$id' "));
      $ids = $row['user_id'];
      mysqli_query($conn,"UPDATE `booking` SET status='Unrepairable' WHERE id='$ids' ");
      echo("<script>alert('Update in In Service'); window.location='bookingwork.php' </script>");
     }

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 
  <h1 class="h1">Mechanics Booking</h1>
  
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>Customer</th>
          <th>Vehicle Plate</th>
          <th>Service</th>
          <th>Status</th>
          <th>Mechanics</th>
          <th>Delete</th>
          <th>Change Status</th>
        </tr>
      </thead>
      <?php

$query_vehicle1 = "SELECT * FROM `mechanicbooking` ";
$result_vehicles1 = mysqli_query($conn, $query_vehicle1);
while($row = mysqli_fetch_array($result_vehicles1)){
?>
      <tbody>
       <td><?php echo $row['customer'] ?></td>
       <td><?php echo $row['plate'] ?></td>
       <td><?php echo $row['service'] ?></td>
       <td><?php echo $row['status'] ?></td>
       <td><?php echo $row['mechanics'] ?></td>
    
     <td>
     <a href="bookingwork.php?del_id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
       <!-- <option><a href="#">Edit</a></option> -->
      
       </td>
     
          <td>
          <div class="dropdown">
  <a class="btn btn-danger btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Change Status
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="bookingwork.php?in_service_id=<?php echo $row['id'] ?>">In Service</a>
    <a class="dropdown-item" href="bookingwork.php?Fixed_id=<?php echo $row['id'] ?>">Fixed</a>
    <a class="dropdown-item" href="bookingwork.php?Collected_id=<?php echo $row['id'] ?>"> Collected</a>
    <a class="dropdown-item" href="bookingwork.php?Unrepairable_id=<?php echo $row['id'] ?>"> Unrepairable</a>
  </div>
</div>
     </td>

      </tbody>
<?php } ?>

    </table>
  </div>
</main>
<?php include ('dashboard-footer.php') ?>