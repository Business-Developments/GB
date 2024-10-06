<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>gb developments in india</title>
</head>
<body bgcolor="gray">
<h1 style="color:green; text-align: center;">Welcome Mr. <?php echo $_SESSION['name'];?></h1>
<div style="display:flex;margin:auto;align-items: center;justify-content: center;">
	<form method="POST" action="">
		<label id="otp">Please Enter OTP</label> <input type="number" name="otp" for="otp" placeholder="Enter OTP">
		<input type="submit" name="submit" value="Go">
	</form>
</div>
Otp valid for 2 min. <div id='clock'></div>
</body>
</html>
 
<?php
header("Refresh: 120; url=adminlogout.php");
if(isset($_POST['submit'])){
	if ($_SESSION['otps']==$_POST['otp']) {
		header( "Location:adminDash.php");
	}else{echo "otp is expired";}
}

?>