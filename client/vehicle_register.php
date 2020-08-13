<?php
include("header.php");

if(isset($_POST['signup'])){

  $make = $_POST["make"];
  $model = $_POST["model"];
  $plate = $_POST["plate"];
  $vehicle_type = $_POST["vehicle_type"];
  $user_id = $_SESSION['id'];

  $query = mysqli_query($conn,"INSERT INTO `vehicles`(`make`, `model`, `plate`, `vehicle`, `user_id`) 
                               VALUES ('$make','$model','$plate','$vehicle_type','$user_id')");
  if($query){
    echo("<script>alert('Add Data');window.location='vehicle_register.php' </script>");
  }
}

?>
<form class="form-signin" method="POST">
<div class="col-auto">
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="make">Make</label>
      <input type="text" class="form-control" id="make" name="make" placeholder="model">
<br>
      <label for="mode">Model</label>
      <input type="text" class="form-control" id="model" name="model" placeholder="model">
      <br>
      <label for="plate">Plate</label>
      <input type="text" class="form-control" id="plate" name="plate" placeholder="plate">
      
      <br>
      <label for="plate">Vehicle</label>
      <select id="vehicle_type" class="form-control" name="vehicle_type">
      <?php
      $query = "SELECT * FROM vehicle_type";
      $result = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_array($result)) {
          ?>

        <option value="<?php echo $row['type']; ?>"><?php echo $row['type']; ?></option>
        <?php
      }
        ?>
        </select>

        <br>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup">Sign in</button>

  </div>
  </div>
  </div>
</form>

<?php
include("footer.php");

?>