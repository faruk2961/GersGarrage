<?php
include("header.php");

if (!isset($_SESSION['user'])) {
  header("Location: index.php");
}
$id = $_SESSION['id'];
$result = mysqli_query($conn,"SELECT * FROM `user` WHERE `id`='$id' ");
$row = mysqli_fetch_array($result);

$user_name = $row['user_name'];
$phone_no = $row['phonecode'];

if(isset($_POST['signup'])){
  $user = $_POST["user"];
  $phone = $_POST["phone"];
  $vehicletype = $_POST["vehicletype"];
  $selectmake = $_POST["selectmake"];
  $selectmodel = $_POST["selectmodel"];
  $licence = $_POST["licence"];
  $enginetype = $_POST["enginetype"];
  $service = $_POST["service"];
  $date = $_POST["date"];
  $vehicle = $_POST["vehicle"];
  $comment = $_POST["comment"];

  $query = mysqli_query($conn,"INSERT INTO `booking`(`user`, `phone`, `vehicletype`, `selectmake`, `selectmodel`, `licence`, `enginetype`, `service`, `date`, `vehicle`, `comment`, `status`) 
                                             VALUES ('$user_name','$phone_no','$vehicletype','$selectmake','$selectmodel','$licence','$enginetype','$service','$date','$vehicle','$comment','booked')");
  if($query){
    echo("<script>alert('Booking Successfull');window.location='booking.php' </script>");
  }
}

?>


<div class="col-md-6">
<form method="POST">
      <label>Name :</label>
      <input type="text" placeholder="Name" name="user" class="form-control" value="<?php echo $row['user_name'] ?>" disabled>
<br>
      <label> Phone no :</label>
      <input type="Phone" class="form-control" placeholder="2984..." name="phone" value="<?php echo $row['phonecode'] .'-'. $row['phone'] ?>" disabled>
           <br>
           <label> Vehicle Type :</label>
              <select name="vehicletype" class="form-control" required>
                <option value="Car">Car</option>
                <option value="Bus">Bus</option>
                <option value="Van">Van</option>
                <option value="Motorcycle">Motorcycle</option>
            </select>
            <br>
            <label> Select Make :</label>
        <select name="selectmake" id="makedd" class="form-control" required>
        <option>Select</option>
      <?php
      $result = mysqli_query($conn,"SELECT * FROM `vehicles` ");
      while($row=mysqli_fetch_array($result))
      {
        ?>
    <option value ="<?php echo $row["make"];?>"><?php echo $row["make"]; ?></option>
        <?php
      }
      ?>
      </select>
      <br>
     <label>Select Model :</label>
       <select name="selectmodel" class="form-control" required>
       <option>Select</option>
       <?php
      $result = mysqli_query($conn,"SELECT * FROM `vehicles` ");
      while($row=mysqli_fetch_array($result))
      {
        ?>
    <option value ="<?php echo $row["model"];?>"><?php echo $row["model"]; ?></option>
        <?php
      }

      ?>
       </select>
       <br>
       <label>  Licence :</label>
        <input type="Licence" placeholder="Licence" class="form-control" name="licence" required>
        <br>
        <label> Engine Type :</label>
       
      <select name="enginetype" class="form-control" required>
        <option value="Dizel">Dizel</option>
        <option value="Benzin">Benzin</option>
        <option value="Gas">Gas</option>
        <option value="Hibrit">Hibrit</option>
    </select>
    <br>
  
        <label>Service :</label>
        <select name="service" id="service" class="form-control">
        <option>Select Service</option>
        <?php
        
        $query_services = "SELECT * FROM service ";
        $result_services = mysqli_query($conn, $query_services);
         while($row = mysqli_fetch_array($result_services)){
        ?>
        <option value="<?php echo $row['service_name']; ?>"><?php echo $row['service_name']; ?></option>
         <?php } ?>
         </select>

         <br>
       <label> Date :</label>
        <input type="date" class="form-control" name="date" required>
        <br>
        
        <label>Vehicle :</label>
        <select name="vehicle" id="service" class="form-control">
        <option>Select Service</option>
        <?php
        
        $query_vehicle = "SELECT * FROM vehicles WHERE user_id = " .$_SESSION['id'];
        $result_vehicles = mysqli_query($conn, $query_vehicle);
        while($row = mysqli_fetch_array($result_vehicles)){

        ?>
        <option value="<?php echo $row['plate']; ?>"><?php echo $row['plate']; ?></option>
         <?php } ?>
         </select>

         <br>

       <label>  Comment :</label>
        <input type="Licence" placeholder="Comment" class="form-control" name="comment" required>

        <br>
        <input type="Submit" class="btn btn-primary" value="Booking" name="signup">

</form>
</div>

<?php
include("footer.php");

?>