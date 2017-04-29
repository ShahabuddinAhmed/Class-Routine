<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$stid = $_POST['id'];
		$stpass = $_POST['pass'];

		if($stid!="" && $stpass!= "")
		{
			
			
			include 'dbconnect.php';
			$sql = "SELECT * FROM student WHERE ID = '".$stid."' && Pass = '".$stpass."'";
			$result = $conn->query($sql);
			
			if($result->num_rows > 0)
			{
				$_SESSION['login_user']=$stid;
				header('location:index.php');
			}
			else
			{
				echo " <h2> Wrong Student ID or Password </h2>";
				//header('location:login.php');
				
			}
		}
		else
		{
			echo "Please Fill up all information";
		}

		$conn->close();
	}
	
 ?>