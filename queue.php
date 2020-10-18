<?php 
	 $con = mysqli_connect('localhost','root','','ubisoft_test');
 	 $sql="SELECT * FROM images";
	 $result= $con->query($sql);
	 if ($result->num_rows > 0) {
	 	 
		  while($row = $result->fetch_assoc()) {
		  	$arr[] = $row;
		   
		  }
		   echo json_encode(array('data' => $arr,'query' =>$sql));
		}
	 

?>