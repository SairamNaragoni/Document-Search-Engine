<?php include('../includes/connection.php');
	if($_FILES['file']['name'] != ''){
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
        	$query = "INSERT INTO `files` (`title`,`description`,`tags`,`type`,`size`,`file`,`dwnd`,`viewed`)
                      VALUES('".$_POST['title']."','".$_POST['description']."','".$_POST['tags']."','".$file_type."','".$new_size."','$final_file',0,0)";
            $result = mysqli_query($conn,$query);
            if($result)
            {
                echo "File Upload Successful";
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