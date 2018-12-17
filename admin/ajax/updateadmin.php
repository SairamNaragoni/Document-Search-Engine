<?php include('../includes/connection.php');
    $query = "SELECT * FROM `users`";
	$result = mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($result))
	{
	echo '<tr>';
	echo '<td class="mdl-data-table__cell--non-numeric">'.$row['uname'].'</td>';
	echo '<td>'.$row['email'].'</td>';
	//echo '<td>';
	//echo '<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent delete"  id="'.$row['id'].'" >Delete</button>';
	//echo '</td>';
	echo '</tr>';	
	}	    			    			    			    
?>