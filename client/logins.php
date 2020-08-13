<?php
include("header.php");

if(@isset($_SESSION['user'])){
    echo("<script>window.location='index.php' </script>");
}

if(isset($_POST['btn'])){

$user = $_POST['user'];
$password = $_POST['password'];


$sql = mysqli_query($conn,"SELECT * FROM `user` WHERE `email`='$user' AND `password`='$password' ");
$row = mysqli_fetch_array($sql);
$user = $row['user_name'];
$_SESSION['user'] = $user;
$_SESSION['id'] = $row["id"];

if(mysqli_num_rows($sql) > 0){
  echo("<script>window.location='index.php' </script>");
}else{
  echo("<script>alert('Email and Password not match'); window.location='logins.php' </script>");

}
}

?>
<div class="container">
<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form class="form-signin" method="POST">
  <input type="email" id="user" name="user" class="form-control" placeholder="Email" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Password</label>
  <br>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
  <br>
  <input class="btn btn-lg btn-primary btn-block" type="submit" name="btn" value="Sign in">
  
</form>
</div>
<div class="col-md-3"></div>
</div>
</div>
<?php
include("footer.php");

?>