<?php
// Database Connection file
include('conn.php');
?>
<table border="1">
<thead>
<tr>
<th>Sr.</th>
<th>Date</th>
<th>Name</th>
<th>Phone Number</th>
<th>Vehicle</th>
<th>Licence</th>
<th>Annual Service</th>
<th>Mini Valet</th>
<th>Car Mat</th>
<th>Part Name</th>
<th>Part Price</th>
<th>Total</th>
</tr>
</thead>
<?php
// File name
$filename="Data";
// Fetching data from data base
$query=mysqli_query($conn,"select * from invoice");
$cnt=1;
$row=mysqli_fetch_array($query);
?>
            <tr>
                <td><?php echo $cnt;  ?></td>
                <td><?php echo $row['date'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['vehicle'];?></td>
                <td><?php echo $row['licence'];?></td>
                <td><?php echo $row['annual_service'];?></td>
                <td><?php echo $row['mini_valet'];?></td>
                <td><?php echo $row['car_mat'];?></td>
                 <td><?php echo $row['parts'];?></td>
                  <td><?php echo $row['part_price'];?></td>
                <td><?php echo $row['total'];?></td>
            </tr>
<?php
$cnt++;
// Genrating Execel  filess
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-Report.xls");
header("Pragma: no-cache");
header("Expires: 0");
 ?>
</table>