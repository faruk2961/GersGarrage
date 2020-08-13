<?php 
  include('dashboard-header.php'); 

  if(isset($_GET['del_id'])){
     $id = $_GET['del_id'];
     mysqli_query($conn,"DELETE FROM `parts` WHERE id='$id' ");
     echo("<script>alert('Delete Part'); window.location='parts.php' </script>");
  }

  if(isset($_POST['updateAdd'])){
    $id = $_GET['update_id'];
    $part_name = $_POST['part_name'];
    $price = $_POST['price'];
    mysqli_query($conn,"UPDATE `parts` SET `name`='$part_name', `price`='$price' WHERE `id`='$id' ");
    echo("<script>alert('Update Part'); window.location='parts.php' </script>");
 }


  if(isset($_POST['add'])){
    $part_name = $_POST['part_name'];
    $price = $_POST['price'];
    $sql = mysqli_query($conn,"INSERT INTO `parts`(`name`, `price`) VALUES ('$part_name','$price')");

    if($sql){
      echo("<script>alert('Add Part'); window.location='parts.php' </script>");
    }
    }

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 
  <h1 class="h1">Parts</h1>
  <br><br>
  <div class="col-md-5">
  <?php
  
  if(isset($_GET['edit_id'])){
$id = $_GET['edit_id'];
$query= "SELECT * FROM `parts` WHERE `id`='$id' ";
$result = mysqli_query($conn, $query);
$rows = mysqli_fetch_array($result);
  ?>

<form method="POST" action="parts.php?update_id=<?php echo $rows['id'] ?>">
<label>Part Name :- </label>
<input type="text" placeholder="Part Name" name="part_name" value="<?php echo $rows['name']  ?>" class="form-control"><br>
<label>Price :- </label>
<input type="text" placeholder="Price" name="price" value="<?php echo $rows['price'] ?>" class="form-control"><br>
<input type="submit" value="Update Name" name="updateAdd" class="btn btn-primary btn-sm">
</form>

  <? } else{ ?>


<form method="POST">
<label>Part Name :- </label>
<input type="text" placeholder="Part Name" name="part_name" class="form-control"><br>
<label>Price :- </label>
<input type="text" placeholder="Price" name="price" class="form-control"><br>
<input type="submit" value="Add Part" name="add" class="btn btn-primary btn-sm">
</form>
  <?php } ?>
</div>

  <br><br>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>ID</th>
          <th>Part Name</th>
           <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php

$query_vehicle = "SELECT * FROM `parts` ";
$result_vehicles = mysqli_query($conn, $query_vehicle);
while($row = mysqli_fetch_array($result_vehicles)){
?>
      <tbody>
       <td><?php echo $row['id'] ?></td>
       <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['price'] ?></td>
       <td>
       <a href="parts.php?del_id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
       <a href="parts.php?edit_id=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
       </td>
      </tbody>
<?php } ?>
    </table>
  </div>
</main>
<?php include ('dashboard-footer.php') ?>