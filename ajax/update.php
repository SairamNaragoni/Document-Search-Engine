<?php include("../includes/connection.php");
	$id = $_POST['id'];
	$key = $_POST['key'];
	if(is_null($key) || empty($key) || $key == 'undefined')
	{
		echo '<div class="demo-card-wide mdl-card mdl-shadow--2dp">';
		echo '<div class="mdl-card__title">';
		echo '<h2 class="mdl-card__title-text">Nothing to Search...</h2>';
		echo '</div>';
		echo '<div class="mdl-card__supporting-text">';
		echo 'Enter text in the search Field';
		echo '</div>';
		echo '</div>';
	}
	else
	{
		switch ($id) {
	    case "all":
	       	$query = "SELECT * FROM `files` WHERE `tags` LIKE '%$key%' OR `description` LIKE '%$key%' OR `title` LIKE '%$key%' OR `file` LIKE '%$key%'";
	        break;
	    case "images":
	        $query = "SELECT * FROM `files` WHERE (`tags` LIKE '%$key%' OR `description` LIKE '%$key%' OR `title` LIKE '%$key%' OR `file` LIKE '%$key%') AND `type` LIKE '%image%'";
	        break;
	    case "pdfs":
	        $query = "SELECT * FROM `files` WHERE (`tags` LIKE '%$key%' OR `description` LIKE '%$key%' OR `title` LIKE '%$key%' OR `file` LIKE '%$key%') AND  `type` LIKE '%pdf%'";
	        break;
	    case "text":
	        $query = "SELECT * FROM `files` WHERE (`tags` LIKE '%$key%' OR `description` LIKE '%$key%' OR `title` LIKE '%$key%' OR `file` LIKE '%$key%') AND `type` LIKE '%text%'";
	        break;
	    case "ppts":
	        $query = "SELECT * FROM `files` WHERE (`tags` LIKE '%$key%' OR `description` LIKE '%$key%' OR `title` LIKE '%$key%' OR `file` LIKE '%$key%') AND `type` LIKE '%presentation%'";
	        break;
	    default:
	        echo "No Functionality added yet";
		}
		$result = mysqli_query($conn,$query);
		$row_count = mysqli_num_rows($result);
		if($row_count==0)
		{
			echo '<div class="demo-card-wide mdl-card mdl-shadow--2dp">';
			echo '<div class="mdl-card__title">';
			echo '<h2 class="mdl-card__title-text">0 Results</h2>';
			echo '</div>';
			echo '<div class="mdl-card__supporting-text">';
			echo 'No Files Of this type Found';
			echo '</div>';
			echo '</div>';
		}
		else
		{
			while($row=mysqli_fetch_array($result))
			{
				echo '<div class="demo-card-wide mdl-card mdl-shadow--2dp">';
				echo '<div class="mdl-card__title">';
				echo '<h2 class="mdl-card__title-text">'.$row['title'].'</h2>';
				echo '</div>';
				echo '<div class="mdl-card__supporting-text">';

				echo $row['description'].'<br>downloaded - '.$row['dwnd'].' times,viewed - '.$row['viewed'].' times.';
				echo '</div>';
				echo '<div class="mdl-card__actions mdl-card--border">
					    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect download" id="'.$row['id'].'"  href="'.$row['file'].'" download >Download</a>
					    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect view" id="'.$row['id'].'" href="admin/data/'.$row['file'].'" target="_blank">View</a>
					  </div>
					</div>';
			}
		}
		
	}
?>