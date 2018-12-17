<?php
	session_start();
	session_unset();
	session_destroy();
	header("location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Out</title>
</head>
<body>
</body>
</html>