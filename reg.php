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
        .legend-wrapper {
            border: 1px solid red;
            padding: 10px;
            position: relative;
        }

        .legend-wrapper .legend {
            position: absolute;
            top: -10px;
            left: 10px;
            background-color: #fff;
            padding: 0 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1 style="color: red;text-align: center;background: black;border: 1px solid gray;">Global Business Development</h1>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">GBD PVT. LTD.</a><span class="text-white"> <sub>Your city, Your leads.</sub> </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <!-- Registration Form -->
   <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 p-3 legend-wrapper" style="border: 1px solid black;margin: auto;">
   	 <!-- Login form -->
     <h3 class="legend">Sign Up</h3>
     <br>
    <form method="POST" action="">
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" name="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- mobile -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" name="mobile" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Mobile</label>
  </div>
  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" name="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>
  </div>

  <!-- Submit button -->
  <button  type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Register Now !</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Allready Registerd ? <a href="profile.php">Log in</a></p>
    <p>or sign up with:</p>
    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>
<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
      // Connect to the database
    $db = mysqli_connect("localhost", "root", "", "gbDevelopments");
    // Sanitize user inputs
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
    $pass = mysqli_real_escape_string($db, $_POST['password']);
    

    
    // Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Prepare the SQL statement
    $sql = "INSERT INTO `regData`(`email`, `mobile`, `password`) VALUES ('$email', '$mobile', '$pass')";
    
    // Execute the query
    $query = mysqli_query($db, $sql);
    
    if ($query) {
        echo "Registered successfully! <a href='profile.php'>Login</a>";
    } else {
        echo "Error: " . mysqli_error($db);
    }
    
    // Close the database connection
    mysqli_close($db);
} else {
    echo "Enter email and password";
}
?>

   </div>



       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

