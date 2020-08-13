<?php


include ("conn.php");

if(isset($_POST['btn'])){

$user = $_POST["user"];
$password = $_POST["password"]; //md5 to encyrpte the password

$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `user_name`='$user' AND `password`='$password' ");
//echo $query;
if(mysqli_num_rows($query) == 1){
$row = mysqli_fetch_assoc($query);
// to give us how many row over there
    
    $_SESSION["user"] = $row["user"]; //we get user name from user table
    $_SESSION["id"] = $row["id"];
    
    header("Location: index.php"); // it is gonna show location of index to session
}
else 
{
    
    session_destroy();
    header("Location: index.php");
}
mysqli_close($conn); //to close the connection other wise everything is gonna be mess

}
?>