<?php 
  include('dashboard-header.php'); 

  if($_GET['del_id']){
    $id = $_GET['del_id'];
    mysqli_query($conn,"DELETE FROM `booking.php` WHERE id='$id' ");
    echo("<script>window.location='previousBook.php' </script>");
 }


  // if($_GET['del_id']){
  //    $id = $_GET['del_id'];
  //    mysqli_query($conn,"DELETE FROM `booking` WHERE id='$id' ");
  // }


?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 
  <h1 class="h1">Previous Booking</h1>
  
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>Customer</th>
          <th>Vehicle Plate</th>
          <th>Service</th>
          <th>Status</th>
          <th>Date</th>
        </tr>
      </thead>
      <?php

$query_vehicle1 = "SELECT * FROM `booking` ";
$result_vehicles1 = mysqli_query($conn, $query_vehicle1);
while($row = mysqli_fetch_array($result_vehicles1)){
?>
      <tbody>
       <td><?php echo $row['user'] ?></td>
       <td><?php echo $row['vehicle'] ?></td>
       <td><?php echo $row['service'] ?></td>
       <td><?php echo $row['status'] ?></td>
       <td><?php echo $row['date'] ?></td>
    
     <td>
     <a href="previousBook.php?del_id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
       <!-- <option><a href="#">Edit</a></option> -->
      
       </td>
      </tbody>
<?php } ?>

    </table>
  </div>
</main>
<?php include ('dashboard-footer.php') ?>