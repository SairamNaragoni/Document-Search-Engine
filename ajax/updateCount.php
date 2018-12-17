<?php include('../includes/connection.php');
	$id = $_POST['id'];
    $query = "SELECT * FROM `files` WHERE `id`=$id";
	$result = mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result);
	$type = $_POST['type'];
	if($type == "dwnd")
	{
		$Dcount = $row['dwnd'];
		$Dcount+=1;  
		$query = "UPDATE `files` SET `dwnd`=$Dcount WHERE `id` = $id";
		mysqli_query($conn,$query);
	}
	else
	{
		$Vcount = $row['viewed'];
		$Vcount+=1;  
		$query = "UPDATE `files` SET `viewed`=$Vcount WHERE `id` = $id";
		mysqli_query($conn,$query);
	}
		    			    
?>