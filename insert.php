<?php
include('config.php');
if (isset($_POST['insert']))
 {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = sha1($_POST['password']);
	$mobileno = $_POST['phone'];
	//$clientname = $_POST['name'];
	 echo $sql= "INSERT INTO glpi_users ( name,password,phone) VALUES ('$name','$password','$mobileno')";
	 $result = mysqli_query($conn,$sql);
	if ($result) {
		echo "Inserted successfully";
		
	}
	  echo $sql1= "INSERT INTO glpi_useremails ( email) VALUES ('$email')";
	  $result1 = mysqli_query($conn,$sql1);
	  if ($result1) {
		echo "Inserted successfully";
		
	}
	 /*  echo $sql2= "INSERT INTO glpi_entities (name) VALUES ('$clientname')";
	   $result2 = mysqli_query($conn,$sql2);
	 

	if ($result2) {
		echo "Inserted successfully";
		
	}*/
}
?>