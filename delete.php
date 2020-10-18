<<?php 

	$con = mysqli_connect('localhost','root','','ubisoft_test');
	if(! $con ) {
      die('Could not connect: ' . mysql_error());
   }
 	 $sql = 'TRUNCATE TABLE images';
   	$delete = mysqli_query($con,$sql );
   
   	if(! $delete ) {
      die('Could not delete table employee: ' . mysqli_error());
   		}
   
   	echo "Table deleted successfully\n";
   	mysqli_close($con);
 ?>