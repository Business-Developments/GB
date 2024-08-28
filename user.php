<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Global Business Development || Business listing website ||</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <style type="text/css">
    	*{margin: 0;padding: 0; box-sizing: border-box;}
    </style>
</head>
<body>
<?php session_start();

    	echo $_SESSION['email'];
?>
<div class="">
	<form method="POST" action="" enctype="multipert/formdata">
  <!-- Email input -->
  <h3>Sign in</h3>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" name="pname" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Product name</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" name="pdescription" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Description</label>
  </div>
    <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" name="price" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Price</label>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="file" name="price" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Upload product</label>
  </div>
  

  <!-- Submit button -->
  <button  type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>
</form>

</div>
</body>
</html>