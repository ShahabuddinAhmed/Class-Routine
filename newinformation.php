<?php
	
	
	$batch = $_POST['bat'];
	$sub = $_POST['subj'];
	$sirname = $_POST['snam'];

	include('dbconnect.php');

	if($batch!="")
	{
		$sql = "INSERT INTO selection3 (batch) VALUES('".$batch."')";
		$result = $conn->query($sql);
		if($result ==true)
		{
			echo "You have  successfully added Batch number <br> <br>";
		}
		else
		{
			echo "Fail to add <br> <br>";
		}
	}

	if($sub!="")
	{
		$sql = "INSERT INTO selection2 (sub) VALUES('".$sub."')";
		$result = $conn->query($sql);
		if($result ==true)
		{
			echo "You have  successfully added Subject Name <br> <br>";
		}
		else
		{
			echo "Fail to add <br> <br>";
		}
	}

	if($sirname!="")
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

?>