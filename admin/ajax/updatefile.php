<?php include('../includes/connection.php');
	if($_FILES['file']['name'] != ''){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$description = $_POST['description'];
		$tags = $_POST['tags'];

	  	$file = rand(1000,100000)."-".$_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder="../data/";
        // new file size in KB
        $new_size = $file_size/1024; 
        // make file name in lower case
        $new_file_name = strtolower($file);
        $final_file=str_replace(' ','-',$new_file_name);
        //move_uploaded_file($file_loc,$folder.$final_file);
        if(move_uploaded_file($file_loc,$folder.$final_file))
        {    
        	$query = "UPDATE `files` 
        				SET `title` = '$title',
        					`description` = '$description',
        					`tags` = '$tags',
        					`type` = '$file_type',
        					`size` = '$new_size',
        					`file` = '$final_file'
        				WHERE `id` = $id";
            $result = mysqli_query($conn,$query);
            if($result)
            {
                echo "File Update Successful";
            }
            else
            {
                echo mysqli_error($conn);
            }

        }
        else
        {
            $error = "Error Uploading Files";
        } 
	}
	else
	{
		echo "error";
	}
?>