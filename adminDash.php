<?php session_start(); if ($_SESSION['otps']) {
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>gb development india</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
</head>
<body class="bg-dark">
<h1 style="text-align: center;color: red;">Wellcome to admin dashboard</h1><a href="adminlogout.php">Logout</a>
<div class="container">
	<?php 

	$con = mysqli_connect("localhost","root","","gbDevelopments");
	$sql = "SELECT * FROM `regData`";
	$query = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($query);
	 ?>
	<div class="row" style="border:1px solid aqua;">
		<div class="col-md-2 col-xl-2 col-sm-1 text-light" style="border:1px solid aqua;">E-mail</div>
		<div class="col-md-2 col-xl-2 col-sm-1 text-light" style="border:1px solid aqua;">Mobile</div>
		<div class="col-md-2 col-xl-2 col-sm-1 text-light" style="border:1px solid aqua;">Password</div>
	</div>
	<?php while ($result=mysqli_fetch_assoc($query)) {
		?>
	<div class="row" style="border:1px solid aqua;">
		<div class="col-md-2 col-xl-2 col-sm-1 text-light" style="border:1px solid aqua;"><?php echo $result['email']; ?></div>
		<div class="col-md-2 col-xl-2 col-sm-1 text-light" style="border:1px solid aqua;"><?php echo $result['mobile']; ?></div>
		<div class="col-md-2 col-xl-2 col-sm-1 text-light" style="border:1px solid aqua;"><?php echo $result['password']; ?></div>
		<div class="col-md-2 col-xl-2 col-sm-1 text-light" style="border:1px solid aqua;"><a href="">Delete</a></div>
		<div class="col-md-2 col-xl-2 col-sm-1 text-light" style="border:1px solid aqua;"><a href="">Update</a></div>
	</div>

		<?php
	} ?>
</div>

</body>
</html>
<?php 
} else{echo "please <a href='admin.php'>login</a> ";} ?>