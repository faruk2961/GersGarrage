<?php 
  include('dashboard-header.php'); 

  if($_GET['del_id']){
     $id = $_GET['del_id'];
     mysqli_query($conn,"DELETE FROM `booking` WHERE id='$id' ");
     echo("<script>alert('Delete Data'); window.location='booking-for-invoice.php' </script>");
  }

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 
  <h1 class="h1">Customer List</h1>
  
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr style="text-align: center">
          <th>Customer</th>
          <th>Mobile Number</th>
          <th>Vehicle</th>
          <th>License</th>
          <th>Status</th>
          <th>Delete</th>
          <th>Generate Invoice</th>
        </tr>
      </thead>
      <?php

$query_vehicle = "SELECT * FROM `booking` ";
$result_vehicles = mysqli_query($conn, $query_vehicle);
while($row = mysqli_fetch_array($result_vehicles)){
?>
      <tbody style="text-align: center;">
       <td><?php echo $row['user'] ?></td>
       <td><?php echo $row['phone'] ?></td>
       <td><?php echo $row['vehicletype'] ?></td>
       <td><?php echo $row['licence'] ?></td>
       <td><?php echo $row['status'] ?></td>
       
       <td>
     
     <a href="booking-for-invoice.php?del_id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
       <!-- <option><a href="#">Edit</a></option> -->
      
       </td>
       <td>
  
       <a href="generate-invoice.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Generate Invoice</a>
<?php } ?>
       </td>
     </tr>
      </tbody>
    </table>
  </div>
</main>
<?php include ('dashboard-footer.php') ?>