<?php      //drop down
include("header.php");

if(isset($_POST['signup'])){
  $user = $_POST["user"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $phoneCode = $_POST["phoneCode"];
  $phone = $_POST["phone"];
  $vehicletype = $_POST["vehicletype"];
  $selectmake = $_POST["selectmake"];
  $selectmodel = $_POST["selectmodel"];
  $licence = $_POST["licence"];
  $enginetype = $_POST["enginetype"];

  $query = mysqli_query($conn,"INSERT INTO `user`(`user_name`, `password`, `email`, `phonecode`, `phone`, `vehicletype`, `selectmake`, `selectmodel`, `licence`, `enginetype`) 
                        VALUES ('$user','$password','$email','$phoneCode','$phone','$vehicletype','$selectmake','$selectmodel','$licence','$enginetype')");
  if($query){
    echo("<script>window.location='logins.php' </script>");
  }
}

?>

<form method="POST">
      <label>Name :</label>
      <input type="text" placeholder="Name" name="user" class="form-control" required>
<br>
      <label>Password :</label>
      <input type="Password" placeholder="Password" name="password" class="form-control" required>
      <br>
      <label>Email :</label>
      <input type="Email" placeholder="Email" name="email" class="form-control" required>
      <br>
      <label> Phone no :</label>
            <select name="phoneCode" class="form-control" required>
              <option value="083">083</option>
              <option value="083">086</option>
              <option value="083">085</option>
              <option value="083">087</option>
              <option value="083">089</option>
          </select>
           <input type="Phone" class="form-control" placeholder="2984..." name="phone" required>
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
        <input type="Licence" placeholder="Licence" class="form-control" name="licence"required>
        <br>
        <label> Engine Type :</label>
       
      <select name="enginetype" class="form-control" required>
        <option value="Dizel">Dizel</option>
        <option value="Benzin">Benzin</option>
        <option value="Gas">Gas</option>
        <option value="Hibrit">Hibrit</option>
    </select>
    <br>
        <input type="Submit" class="btn btn-primary" value="Submit" name="signup">

</form>

    
    
<script type ="text/javascript" >
// function change_vehicles_make()
// {
// var xmlhttp = new XMLHttpRequest();
// xmlhttp.open("GET","ajax.php?vehicles_make="+document.getElementById("makedd").value,false);
// xmlhttp.send(null);
// document.getElementId("vehicles_model").innerHTML=xmlhttp.responseText;

// }

</script>

<?php
include("footer.php");

?>
