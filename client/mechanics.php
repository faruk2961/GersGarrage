<?php 
  include('dashboard-header.php'); 

  if(isset($_GET['del_id'])){
     $id = $_GET['del_id'];
     mysqli_query($conn,"DELETE FROM `mechanics` WHERE id='$id' ");
     echo("<script>alert('Delete Name'); window.location='mechanics.php' </script>");
  }

  if(isset($_POST['updateAdd'])){
    $id = $_GET['update_id'];
    $name = $_POST['name'];
    mysqli_query($conn,"UPDATE `mechanics` SET `name`='$name' WHERE `id`='$id' ");
    echo("<script>alert('Update Name'); window.location='mechanics.php' </script>");
 }


  if(isset($_POST['add'])){
    $user = $_POST['name']; 
    $sql = mysqli_query($conn,"INSERT INTO `mechanics`(`name`) VALUES ('$user')");

    if($sql){
      echo("<script>alert('Add Name'); window.location='mechanics.php' </script>");
    }
    }

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
 
  <h1 class="h1">Mechanics</h1>
  <br><br>
  <div class="col-md-5">
  <?php
  
  if(isset($_GET['edit_id'])){
$id = $_GET['edit_id'];
$query= "SELECT * FROM `mechanics` WHERE `id`='$id' ";
$result = mysqli_query($conn, $query);
$rows = mysqli_fetch_array($result);
  ?>

<form method="POST" action="mechanics.php?update_id=<?php echo $rows['id'] ?>">
<label>Name :- </label>
<input type="text" placeholder="Name" name="name" value="<?php echo $rows['name']  ?>" class="form-control"><br>
<input type="submit" value="Update Name" name="updateAdd" class="btn btn-primary btn-sm">
</form>

  <? } else{ ?>


<form method="POST">
<label>Name :- </label>
<input type="text" placeholder="Name" name="name" class="form-control"><br>
<input type="submit" value="Add Name" name="add" class="btn btn-primary btn-sm">
</form>
  <?php } ?>
</div>

  <br><br>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php

$query_vehicle = "SELECT * FROM `mechanics` ";
$result_vehicles = mysqli_query($conn, $query_vehicle);
while($row = mysqli_fetch_array($result_vehicles)){
?>
      <tbody>
       <td><?php echo $row['id'] ?></td>
       <td><?php echo $row['name'] ?></td>
       <td>
       <a href="mechanics.php?del_id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
       <a href="mechanics.php?edit_id=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
       </td>
      </tbody>
<?php } ?>
    </table>
  </div>
</main>
<?php include ('dashboard-footer.php') ?>