<?php 
	 $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = '';
     $dbname = 'ubisoft_test';
	 $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	  if(! $con ) {
      die('Could not connect: ' . mysqli_error());
    }
     echo "connected to database";
	 extract($_POST);


	 if(isset($_POST['image'])&&isset(var)($_POST['title'])){
	 	$q= "INSERT INTO `images`(`title`, `description`, `image`) VALUES ('$title','$description','$image')";
	 	mysqli_query($con,$q);
	 	header('location:test.php');
	 }
	
 ?>