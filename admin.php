<?php session_start(); ?>
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
<body style="background: gray;">
<h1 style="color: red;text-align: center;" title="please dont try to make any annonimus bihaviour">Admin area</h1>
    <br>
   <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 p-3" style="border: 1px solid black;margin: auto;background:black;">
   	 <!-- Login form -->
    <form method="POST" action="">
  <!-- Email input -->
  <h3>Sign in</h3>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" name="email" id="form2Example1" class="form-control" style="color: white;background: black;" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" name="password" id="form2Example2" class="form-control" style="color: white;background: black;" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>
  <!-- Submit button -->
  <button  type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-block mb-4">Sign in</button>
  </div>
 </form>
 </div>
<?php
// Ensure no output is sent before this line
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    // Connect to the database
    $db = mysqli_connect("localhost", "root", "", "gbDevelopments");
    $sql = "SELECT * FROM `admin`";
    $query = mysqli_query($db,$sql);
    	$row = mysqli_fetch_assoc($query);
        	if ($row['email']===$email and $row['password']===$pass) {
        		$_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $email;
        		header("Location:adminverify.php");
        	}else{echo "wrong data";}
        }
?>
</body>
</html>