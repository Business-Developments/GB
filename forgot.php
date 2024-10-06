<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Global Business Development || GBD || Business linsting website in india</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
</head>
<body>
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
    <center>
Enter Email: <form method="POST" action=""><input type="Email" name="Email" placeholder="Email"><input type="submit" name="submit" value="submit"></form>

</center>
</body></html>
<?php

$email = $_POST['Email'];
    $con = mysqli_connect("localhost","root","","gbDevelopments");
    $sql = "SELECT * FROM `regData` WHERE `email`='$email'";
    $query=mysqli_query($con,$sql);
    $data = mysqli_fetch_assoc($query);
    if ($data['email']==$email) {
        $_SESSION['mail']=$email;
        header("Location:otp.php");
    }else{echo "Email i'd not Exist <a href='help.php'>HELP</a>";}

?>