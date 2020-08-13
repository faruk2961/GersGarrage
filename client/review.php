<?php
include("header.php");
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
  }


?>
<br>
<div class="container">
<h1 style="color: #5a5a5a">Reviews</h1>
<table class="table"  style="text-align: center;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Rating</th>
      <th scope="col">Reviews</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>

   
	<?php
	$review = "SELECT * FROM review";
	$review_query = mysqli_query($conn, $review);
	while (@$rows = mysqli_fetch_array($review_query)) {
	?>
	<tr>
	<td style="width: 300px"><?php echo $rows['name']; ?></td>
	<td style="width: 300px"><i class="fa fa-star"></i> <?php echo $rows['star'];?>/5</td>
	<td style="width: 300px"><?php echo $rows['content']; ?></td>
	<td style="width: 300px"><?php echo $rows['date']; ?></td>
	</tr>
	<?php

	}
	?>

  </tbody>
</table>
</div>

<?php
include("footer.php");

?>