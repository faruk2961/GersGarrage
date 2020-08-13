<?php
include("header.php");

if(isset($_SESSION['user']) && $_SESSION['user'] != 'admin'){
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 
  <h1 class="h1">Previous Bookings</h1>
  
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
      
$user = $_SESSION['user'];

$query_vehicle = "SELECT * FROM `booking` WHERE `user`='$user' ";
$result_vehicles = mysqli_query($conn, $query_vehicle);

while($row = mysqli_fetch_array($result_vehicles)){
    
	if(@$_SESSION['user'] == $row['user']){
?>
      <tbody>
       <td><?php echo $row['user'] ?></td>
       <td><?php echo $row['vehicle'] ?></td>
       <td><?php echo $row['service'] ?></td>
       <td><?php echo $row['status'] ?></td>
       <td><?php echo $row['date'] ?></td>
      </tbody>
<?php } } ?>
    </table>
  </div>
</main>
<?php } ?>
<img src="assets/image/frontcar2.jpg" class="img-100-size" title="Gas Spring, boot" alt="Alternator">

<?php

include("footer.php");

?>
