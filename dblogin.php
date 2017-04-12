<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$stid = $_POST['id'];
		$stpass = $_POST['pass'];

		if($stid!="" && $stpass!= "")
		{
			if($stid == "admin" && $stpass == "admin")
			{
				$_SESSION['login_admin']=$stid;
				header('location:admin.php');
			}
			else
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
					echo "Wrong Student ID or Password";
					//header('location:login.php');
					
				}
			}
		}
		else
		{
			echo "Please Fill up all information";
		}

		$conn->close();
	}
	
 ?>