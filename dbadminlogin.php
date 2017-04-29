<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$adid = $_POST['id'];
		$adpass = $_POST['pass'];

		if($adid!="" && $adpass!= "")
		{
			if($adid == "admin" && $adpass == "admin")
			{
				$_SESSION['login_admin']=$adid;
				header('location:updateindex.php');
			}
		}
		else
		{
			echo "Please Fill up all information";
		}

	}

	
 ?>