<?php 
  include('dashboard-header.php');
  
   $ids = $_GET['id'];
    $query_vehicle1 = "SELECT * FROM `booking` WHERE id='$id'";
    $result_vehicles1 = mysqli_query($conn, $query_vehicle1);
    $row = mysqli_fetch_array($result_vehicles1);
    $name =  $row['user'];
    $vehicle = $row['vehicletype'];
    $phone = $row['phone'];
    $licence = $row['licence'];
    $date = date('d-m-y');
    
    mysqli_query($conn,"INSERT INTO `invoice`(`name`, `mobile`, `vehicle`, `licence`, `annual_service`, `mini_valet`, `car_mat`, `total`, `date`, `user_id`) 
                                    VALUES ('$name','$phone','$vehicle','$licence','0','0','0','0','$date','$ids')");
   

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 
  <h1 class="h1">Dashboard</h1>
  

  <form action="" method="post"> 
  <div class="form-group">
    <label for="exampleInputEmail1">Annual Service</label>
    <input type="number" name="annual_service" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mini Valet</label>
    <input type="number" name="mini_valet" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Car mat</label>
    <input type="number" name="car_mat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
    <div class="form-group">
    <select class="form-control">
              <?php

$query_vehicle = "SELECT * FROM `parts` ";
$result_vehicles = mysqli_query($conn, $query_vehicle);
while($row = mysqli_fetch_array($result_vehicles)){
    $partname = $row['name'];
    $partprice = $row['price'];
?>
        <option><?php echo 'Part Name :- '.$row['name'].' - Price :- '.$row['price'] ?></option>
        <?php } ?>
    </select>
  </div>

  <button name="price" type="submit" class="btn btn-primary">Submit</button>
  <br>
</form>
<?php
  if(isset($_POST['price'])){
    $id = $_GET['id'];
    $query_vehicle = "SELECT * FROM `booking` WHERE id='$id'";
    $result_vehicles = mysqli_query($conn, $query_vehicle);
    $row = mysqli_fetch_array($result_vehicles);
    $name =  $row['user'];
    $vehicle = $row['vehicletype'];
    $phone = $row['phone'];
    $licence = $row['licence'];
    
  $annual_service = $_POST['annual_service'];
  $mini_valet = $_POST['mini_valet'];
  $car_mat = $_POST['car_mat'];
  $total = $annual_service + $mini_valet + $car_mat + $partprice;
  mysqli_query($conn, "UPDATE invoice SET name='$name', mobile='$phone', licence='$licence', vehicle='$vehicle',annual_service='$annual_service', mini_valet='$mini_valet', car_mat='$car_mat', total='$total', parts='$partname',part_price='$partprice' ");
}
?>
<br>
<a class="btn btn-success" href="invoice.php"> Generate Invoice PDF</a>
<a class="btn btn-success" href="invoiceExcel.php"> Generate Invoice Excel</a>
</main>
<?php include ('dashboard-footer.php') ?>