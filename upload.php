<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Global Business Development || GBD || Business linsting website in india</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <style type="text/css">
    	*{margin: 0;padding: 0; box-sizing: border-box;}
    </style>
</head>
<body>
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">GBD PVT. LTD.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user.php">Back</a>
                </li>
            </ul>
        </div>
    </nav>
<?php
	$name = $_POST['pname'];
	$description = $_POST['pdescription'];
	$price = $_POST['price'];
	//image property
$pname = $_FILES['pimage']['name'];
$ptype = $_FILES['pimage']['type'];
$psize = $_FILES['pimage']['size'];
$ptmp_name = $_FILES['pimage']['tmp_name'];

// Display file information
echo "File name is ".$pname;
// Valid file types
$allowed_types = ['image/png', 'image/jpg', 'image/jpeg', 'image/webp'];

// Check file size and type
if ($psize <= 300000 && in_array($ptype, $allowed_types)) {
    // Ensure the directory exists
    $upload_dir = 'image/';
    // Move the uploaded file
    if (move_uploaded_file($ptmp_name, $upload_dir . $pname)) {
    	$db=mysqli_connect("localhost","root","","gbDevelopments");
    	$sql = "INSERT INTO `product`(`pname`, `pdescription`, `price`, `image`) VALUES ('$name','$description','$price','$pname')";
    	$query = mysqli_query($db,$sql);
        echo " File uploaded successfully!";
    } else {
        echo "Failed to move the uploaded file.";
    }
} else {
    echo "Please choosea a smaller file of 2mb or a valid extension with file.";
}
?>



</body></html>