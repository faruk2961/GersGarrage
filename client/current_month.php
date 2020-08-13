<?php 
  include('dashboard-header.php'); 

  if($_GET['del_id']){
     $id = $_GET['del_id'];
     mysqli_query($conn,"DELETE FROM `booking` WHERE id='$id' ");
  }

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 
  <h1 class="h1">Search the Bookings</h1>

<form method="get">

<div class="row">

 <div class="col">
  <div class="form-group">
    <label>From</label>
    <input type="date" name="start_date" class="form-control" required>
  </div>
  </div>
  <div class="col">
  <div class="form-group">
    <label>To </label>
    <input type="date" name="upto_date" class="form-control" required>
  </div>

  </div>
  </div>
  <input type="submit" name="done" class="btn btn-primary" value="Search">
</form>

  <main role="main" class="col-md-9 ml-sm-left col-lg-12 px-4">
 <?php if (isset($_GET['done'])) { 

  $start_date = $_GET['start_date'];
  $upto_date = $_GET['upto_date'];

$query_vehicle = "SELECT * FROM `booking` WHERE `date`= '$start_date' OR `date`='$upto_date'"; 
$result_vehicles = mysqli_query($conn, $query_vehicle);
$num = mysqli_num_rows($result_vehicles);
?>
  <h1 class="h1">Booking From <span style="color: green"><?php echo @$_GET['start_date'];?></span> TO <span style="color: green"><?php echo @$_GET['upto_date']; ?></span></h1>
<?php if($num > 0){ ?>  
  <div class="table-responsive">
    <table class="table table-striped table-sm">
     <thead>
        <tr>
          <th>Customer</th>
          <th>Vehicle Plate</th>
          <th>Service</th>
          <th>Status</th>
          <th>Mechanics</th>
          <th>Booking Date</th>
        </tr>
      </thead>
      <?php
while($row = mysqli_fetch_array($result_vehicles)){
?> 
          
      
      <tbody>
       <td><?php echo $row['user'] ?></td>
       <td><?php echo $row['vehicletype'] ?></td>
       <td><?php echo $row['service'] ?></td>
       <td><?php echo $row['vehicle'] ?></td>
       <td><?php echo $row['status'] ?></td>
       <td><?php echo $row['date'] ?></td>
    
      </tbody>
<?php } }else{ echo "<h1 style='color:red'>No Records Found</h1>"; } }?>
    </table>
  </div>
</main>
<?php include ('dashboard-footer.php') ?>