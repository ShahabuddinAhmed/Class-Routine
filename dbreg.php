<?php

	$stid = $_POST['id'];
	$stpass = $_POST['pass'];
	$stname = $_POST['name'];
	$stemail = $_POST['email'];
	if($stid!="" && $stpass!= "" && $stname!="" && $stemail!= "")
	{
		if(ctype_alpha($stname) && ctype_digit($stid))
		{
			include 'dbconnect.php';
			$sql = "INSERT INTO student VALUES('$stid','$stname','$stemail','$stpass')";
			if($conn->query($sql)===TRUE)
			{
				//echo "You have Successfully Registered";
				header('location:home.php');
			}
			else
			{
				echo "Eoor.".$conn->error;
			}
			$conn->close();

		}
		else
		{
			if(ctype_digit($stname))
			{
				echo "Student Name could not be Digit <br> <br>";
			}

			if (ctype_alpha($stid))
			{
				echo "Student ID could not be Alphabet";
			}
			
		}


	}
	else
	{
		echo "Please Fill up all information";
	}


	

 ?>