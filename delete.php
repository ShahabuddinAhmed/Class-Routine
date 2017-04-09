<?php
	
	$Uroom = $_POST["slctrm"];
	$Uday = $_POST["slctd"];
	$Uclass = $_POST["slctc"];
	include 'dbconnect.php';
	
	$Routine = "No Class";
	if($Uclass == "cls1")
	{
		$sql="UPDATE class set Class1= '".$Routine."' WHERE Room='".$Uroom."' && Day= '".$Uday."'";
		if($conn->query($sql)===TRUE)
		{
			header('location:admin.php');
			echo "Successfully Update";
		}
		else
		{
			echo $conn->error;
		}
	}
	else if($Uclass == "cls2")
	{
		$sql="UPDATE class set Class2= '".$Routine."' WHERE Room='".$Uroom."' && Day= '".$Uday."'";
		if($conn->query($sql)===TRUE)
		{
			//header('location:Administration.php');
			echo "Successfully Update";
		}
		else
		{
			echo $conn->error;
		}
	}
	else if($Uclass == "cls3")
	{
		$sql="UPDATE class set Class3= '".$Routine."' WHERE Room='".$Uroom."' && Day= '".$Uday."'";
		if($conn->query($sql)===TRUE)
		{
			//header('location:Administration.php');
			echo "Successfully Update";
		}
		else
		{
			echo $conn->error;
		}
	}
	else if($Uclass == "cls4")
	{
		$sql="UPDATE class set Class4= '".$Routine."' WHERE Room='".$Uroom."' && Day= '".$Uday."'";
		if($conn->query($sql)===TRUE)
		{
			//header('location:Administration.php');
			echo "Successfully Update";
		}
		else
		{
			echo $conn->error;
		}
	}
	else if($Uclass == "cls5")
	{
		$sql="UPDATE class set Class5= '".$Routine."' WHERE Room='".$Uroom."' && Day= '".$Uday."'";
		if($conn->query($sql)===TRUE)
		{
			//header('location:Administration.php');
			echo "Successfully Update";
		}
		else
		{
			echo $conn->error;
		}
	}
	else if($Uclass == "cls6")
	{
		$sql="UPDATE class set Class6= '".$Routine."' WHERE Room='".$Uroom."' && Day= '".$Uday."'";
		if($conn->query($sql)===TRUE)
		{
			//header('location:Administration.php');
			echo "Successfully Update";
		}
		else
		{
			echo $conn->error;
		}
	}

?>