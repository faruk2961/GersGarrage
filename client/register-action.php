<?php
include("conn.php");
$user= $_POST["user"];
$password = md5($_POST["password"]);
$email = $_POST["email"];
$phonecode=$_POST["phonecode"];
$phone=$_POST["phone"];
$vehicletype=$_POST["vehicletype"];
$selectmake=$_POST["selectmake"];
$selectmodel=$_POST["selectmodel"];
$licence=$_POST["licence"];
$enginetype=$_POST["enginetype"];

if (!empty($user) || !empty($password) || !empty($email) || !empty($phonecode) || !empty($phone) || !empty($vehicletype) ||
 !empty($selectmake) || !empty($selectmodel) || !empty($licence) || !empty($enginetype))
{
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $databasename = "garage";

    //create a connection
    $conn = new mysqli($servername, $username, $password,$databasename);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }else{
        $SELECT = "SELECT email FROM user where email = ? limit 1"; //we choice email because email is unique
        $INSERT = "INSERT Into user(user,password,email,phonecode,phone,vehicletype,selectmake,selectmodel,licence,enginetype)
        values(?,?,?,?,?,?,?,?,?,?)";

        //Prepare statement
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows; //how many number of row is selected
        if($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssssssss", $user, $password,$email,$phonecode,$phone,$vehicletype,$selectmake,$selectmodel,$licence,$enginetype);
            $stmt->execute();
            echo "New record inserted succesfully";
        }else{
            echo "Someone already registered using this email";
        }
        $stmt->close();
        $conn->close();
    } 

}else{
    echo "All field are required";
    die();
}




?>

$query = "INSERT INTO user (user_name,password) VALUES ('$user','$password')"; //put username and password into the database
if(mysqli_query($conn, $query)) {
    $_SESSION["user"] = $user;
    
    header("Location: index.php");
}else{
    
    session_destroy();
    header("Location: index.php");
}