<?php
include("header.php");
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
  }


if(isset($_POST['done'])){
	$name = $_POST['name'];
	$star = $_POST['star'];
	$content = $_POST['content'];
	$insert_review = "INSERT INTO review (name, star, content) VALUES ('$name', '$star', '$content')";
	$insert_review_query = mysqli_query($conn, $insert_review);
	echo"<script>alert('Thankyou for review');window.location='review.php' </script>";

}
?>

<form action="write_review.php" method="post" class="col-lg-6 container">
  <div class="form-group">
    <input type="hidden" name="name" value="<?php echo $_SESSION['user']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Star</label>
    <input type="number" name="star" class="form-control" id="exampleInputPassword1" max="5" required>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Comment</label>
    <textarea name="content" style="width: 100%;height: 300px;">
    	
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="done">Submit</button>
</form>

<?php
include("footer.php");

?>