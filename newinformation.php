<?php
	
	
	$batch = $_POST['bat'];
	$sub = $_POST['subj'];
	$sirname = $_POST['snam'];

	include('dbconnect.php');

	if($batch!="")
	{
		if(ctype_digit($batch))
		{
			$sql = "INSERT INTO selection3 (batch) VALUES('".$batch."')";
			$result = $conn->query($sql);
			if($result ==true)
			{
				echo "You have  successfully added Batch number <br> <br>";
			}
			else
			{
				echo "These Batch Number is exist <br> <br>";
			}
		}
		else
		{
			echo "Batch Number couldn't Text <br> <br>";
		}
	}

	
	$nm = "0";

	if (ctype_digit($sub))
	{
		$nm = "1";
	}
	

	if($sub!="")
	{
		if($nm != "1")
		{
			$sql = "INSERT INTO selection2 (sub) VALUES('".$sub."')";
			$result = $conn->query($sql);
			if($result ==true)
			{
				echo "You have  successfully added Subject Name <br> <br>";
			}
			else
			{
				echo "Subjet Name is exist <br> <br>";
			}
		}
		else
		{
			echo "Subject Name couldn't number. Only text or text and number mixed<br> <br>";
		}

	}
	

	if($sirname!="")
	{
		if(ctype_alpha($sirname))
		{
			$sql = "INSERT INTO selection1 (name) VALUES('".$sirname."')";
			$result = $conn->query($sql);
			if($result ==true)
			{
				echo "You have  successfully added Sir Name <br> <br> ";
			}
			else
			{
				echo "Fail to add <br> <br>";
			}
		}
		else
		{
			echo "Sir name couldn't Number <br> <br>";
		}
	}

?>