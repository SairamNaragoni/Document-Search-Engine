<?php include('../includes/connection.php');
    $query = "SELECT * FROM `files`";
	$result = mysqli_query($conn,$query);

	while($row=mysqli_fetch_array($result))
	{
	echo '<tr>';
	echo '<td class="mdl-data-table__cell--non-numeric">'.$row['title'].'</td>';
	echo '<td>'.$row['description'].'</td>';
	echo '<td>'.$row['file'].'</td>';
	echo '<td>'.$row['type'].'</td>';
	echo '<td>'.$row['dwnd'].'</td>';
	echo '<td>'.$row['viewed'].'</td>';
	echo '<td>';
	echo '<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent delete"  id="'.$row['id'].'" >Delete</button>
			<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent view" href="data/'.$row['file'].'"  target="_blank" >View</a>
			<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent view updateF" id="'.$row['id'].'"  href="index.php?id='.$row['id'].'">Update</a>';
	echo '</td>';
	echo '</tr>';	
	}	    			    			    			    
?>