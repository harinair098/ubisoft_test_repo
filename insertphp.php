<?php 
	
	$con = mysqli_connect('localhost','root','','ubisoft_test');
	extract($_POST);

	 if(isset($_POST['image'])&&($_POST['title'])){
	 	$q= "INSERT INTO `images`(`title`, `description`, `image`) VALUES ('$title','$description','$image')";
	 	mysqli_query($con,$q);
	 	header('location:test.php');
	 }
	
 ?>