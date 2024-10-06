<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
	<title>Password reset</title>
</head>
<body class="bg-secondary">
	<h1 class="text-center text-light bg-primary">Enter OTP</h1>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="index.php">GBD PVT. LTD.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
	<div style="display:flex;align-items: center;justify-content: center;">
		<form method="POST" action="">
			<?php echo $_SESSION['otps']; ?>
			<input type="text" name="otp" placeholder="Enter OTP" required><input type="submit" name="submit" value="Reset Password" class="bg-success">
		</form><br><br>
	</div>
	<?php 
	if (isset($_POST['submit'])) {
		$otp = $_POST['otp'];
		$email = $_SESSION['mail'];
		$otps = $_SESSION['otps'];
		if ($otp==$otps) {
		$con = mysqli_connect("localhost","root","","gbDevelopments");
			$sql="UPDATE `regData` SET `password`=$otp WHERE `email`='$email'";
			$query = mysqli_query($con,$sql);
			if ($query) {
				echo "Password reset successfully<br><a href='profile.php' style='color:white;font-weight:bold;margin-left:50px;'> Login</a>";
			}else{
				echo "Check internet connection";
			}
		}else{
			echo "<span style='color:white;margin-top:20px;'>Enter valid OTP.</span>";
		}
	}
 ?>
</body>
</html>
