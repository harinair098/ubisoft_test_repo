<<?php 

	  $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = '';
     $dbname = 'ubisoft_test';
     $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
     if(! $con ) {
      die('Could not connect: ' . mysqli_error());
     }
     echo "connected to database";
 	  
     //emptying all datas in the table
     $sql = 'TRUNCATE TABLE images';
   	$delete = mysqli_query($con,$sql );
   
   	if(! $delete ) {
      die('Could not delete table: ' . mysqli_error());
   		}
   
   	echo "Table deleted successfully\n";
   	mysqli_close($con);
 ?>