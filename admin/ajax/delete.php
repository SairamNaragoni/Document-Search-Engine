<?php include('../includes/connection.php');
    $id = $_POST['id'];
    $query = "SELECT * FROM `files` WHERE id = '$id'";
    $result = mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);
    $filename = $row['file'];
    echo $filename;
    chmod("../data/",0755);
    unlink('../data/'.$filename);
    $query = "DELETE FROM `files` WHERE id = '$id' LIMIT 1";
    $result = mysqli_query($conn,$query);
    if($result)
        echo "delete Successfull";
    else
        echo "delete failed";
?>