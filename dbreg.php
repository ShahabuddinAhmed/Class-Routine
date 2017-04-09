<?php

	$stid = $_POST['id'];
	$stpass = $_POST['pass'];
	$stname = $_POST['name'];
	$stemail = $_POST['email'];
	if($stid!="" && $stpass!= "" && $stname!="" && $stemail!= "")
	{
		include 'dbconnect.php';
		$sql = "INSERT INTO student VALUES('$stid','$stname','$stemail','$stpass')";
		if($conn->query($sql)===TRUE)
		{
			echo "You have Successfully Registered";
		}
		else
		{
			echo "Eoor.".$conn->error;
		}
	}
	else
	{
		echo "Please Fill up all information";
	}

	$conn->close();

 ?>