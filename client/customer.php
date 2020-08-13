<?php 
  include('dashboard-header.php'); 

  if($_GET['del_id']){
     $id = $_GET['del_id'];
     mysqli_query($conn,"DELETE FROM `user` WHERE id='$id' ");
  }

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 
  <h1 class="h1">Customer</h1>
  
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>Customer</th>
          <th>Email</th>
          <th>phone</th>
          <th>Vehicle</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php

$query_vehicle = "SELECT * FROM `user` WHERE `id` BETWEEN 2 AND 100  ";
$result_vehicles = mysqli_query($conn, $query_vehicle);
while($row = mysqli_fetch_array($result_vehicles)){
?>
      <tbody>
       <td><?php echo $row['user_name'] ?></td>
       <td><?php echo $row['email'] ?></td>
       <td><?php echo $row['phonecode'].' '.$row['phone'] ?></td>
       <td><?php echo $row['vehicletype'] ?></td>
       <td>
     
     <a href="customer.php?del_id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
       <!-- <option><a href="#">Edit</a></option> -->
      
       </td>
      </tbody>
<?php } ?>
    </table>
  </div>
</main>
<?php include ('dashboard-footer.php') ?>