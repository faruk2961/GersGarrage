<?php      //drop down
include("header.php");
//$servername = "127.0.0.1";
//$username = "root";
//$password = "";
//$databasename = "garage";
//$usrtable = "vehicles";
//$columnname = "make";

$link=mysqli_connect("localhost","root", "");
//if (!$conn) {
//  die("Connection failed: " . mysqli_connect_error());
//}

mysqli_select_db($link,"garage");
//$query = "SELECT * FROM vehicles ";
//$result= mysql_query($conn,$query);
$vehicles_make = $_GET["vehicles_make"];
if($vehicles_make!="")
{
$result = mysqli_query($link,"SELECT * FROM vehicles_model where model_id=$vehicles_make");
echo "<select>";
while($row=mysqli_fetch_array($result))
{
echo "<option>"; echo $row["vehicles_make"]; echo "</option>";

}
echo "</select>";
}


?>