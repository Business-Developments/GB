<?php session_start(); if ($_SESSION['otps']) {
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>gb development india</title>
</head>
<body>
<h1 style="text-align: center;color: red;">Wellcome to admin dashboard</h1><a href="adminlogout.php">Logout</a>
</body>
</html>
<?php 
} else{echo "please <a href='admin.php'>login</a> ";} ?>