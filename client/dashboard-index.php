<?php 
  include('dashboard-header.php'); 

  if($_GET['del_id']){
     $id = $_GET['del_id'];
     mysqli_query($conn,"DELETE FROM `booking` WHERE id='$id' ");
       echo("<script>alert('Delete Data'); window.location='dashboard-index.php' </script>");
  }

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 
  <h1 class="h1">Dashboard</h1>
  
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>Customer</th>
          <th>Vehicle Plate</th>
          <th>Service</th>
          <th>Status</th>
          <th>Action</th>
          <th>Transfer Booking</th>
        </tr>
      </thead>
      <?php

$query_vehicle = "SELECT * FROM `booking` ";
$result_vehicles = mysqli_query($conn, $query_vehicle);
while($row = mysqli_fetch_array($result_vehicles)){
?>
      <tbody>
       <td><?php echo $row['user'] ?></td>
       <td><?php echo $row['vehicle'] ?></td>
       <td><?php echo $row['service'] ?></td>
       <td><?php echo $row['status'] ?></td>
       <td>
     
     <a href="dashboard-index.php?del_id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
       <!-- <option><a href="#">Edit</a></option> -->
      
       </td>
       <td>
       <?php

$query_vehicle = "SELECT * FROM `mechanics` ";
$result_vehicle = mysqli_query($conn, $query_vehicle);
while($rows = mysqli_fetch_array($result_vehicle)){
?>
       <a href="bookingwork.php?send_id=<?php echo $row['id'] ?>&name=<?php echo $rows['name'] ?>" class="btn btn-success btn-sm"><?php echo $rows['name'] ?></a>
<?php } ?>
       </td>
      </tbody>
<?php } ?>
    </table>
  </div>
</main>
<?php include ('dashboard-footer.php') ?>