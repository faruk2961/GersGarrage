// we create this page to see what we get from user
<?php 

  include('conn.php');

  $query = "SELECT booking.id AS id, user_name AS user, plate AS vehicle, status AS service_status, service_name AS service
  FROM 	booking
	INNER JOIN user ON user.id = booking.user_id
	INNER JOIN user_vehicle ON user_vehicle.id = booking.vehicles_id
	INNER JOIN status ON status.id = booking.status_id
	INNER JOIN service ON service.id = booking.service_id
  WHERE date_in = '". date("Y-m-d"). "'";//2020-01-25 FOR TODAYYY!;
  $dashboardTable = "";
  $result = mysqli_query($conn, $query);
  while($row = mysqli_fetch_array($result)){
      $dashboardTable .= "<tr>
        <td>".$row['id']."</td>
        <td>".$row['user']."</td>
        <td>".$row['vehicle']."</td>
        <td>".$row['service_status']."</td>
        <td>".$row['service']."</td>
        <td><button type='button' onclick='editStatus(".$row['id'].")'>Edit Status</button></td>
      </tr>";
  }

  $statusOption = "";
  $queryStatus = "SELECT * FROM status";
  $result = mysqli_query($conn, $queryStatus);
  while($row = mysqli_fetch_array($result)){
    $statusOption .= "<option value='".$row['id']."'>".$row['status']."</options>";
  }

?>