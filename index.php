<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Global Business Development</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <style type="text/css">
    	*{margin: 0;padding: 0; box-sizing: border-box;}
        .card-img-top{
            width: 100%;height:250px;object-fit: contain;
        }
    </style>
</head>
<body>
<h1 style="color: red;text-align: center;background: black;">Global Business Development</h1>
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
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notyfication.php"><span class="fas fa-bell" style="font-size: 20px;color: white;"></span><span style="font-weight:bold;color:red;border-radius: 50%;margin-left: -13px;"><?php echo 5; ?></span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container_fluid bg-dark text-center text-light p-4">
        <h2 class="text-white">Find service provider's</h2>
    <form>
        <?php $pincode='743383'; ?>
        <label for="fruits">Choose service provider :</label>
        <select id="fruits" name="fruits">
            <option value="acRepair">AC Repair</option>
            <option value="pestcontrol">Pestcontrol</option>
        </select>
     <input type="number" name="pincode" placeholder="Enter area pincode">
        <input type="submit" value="Submit">
    </form>
    </div>
    <div id="home">
        <h1 class="text-center">All listed business in india</h1>
    </div>
    <?php 
error_reporting(E_ALL);
     // Connect to the database
    $db = mysqli_connect("localhost", "root", "", "gbDevelopments");
    $sql = "SELECT * FROM `product` ORDER BY `id` DESC";
    $query = $db->query($sql);
     ?>
     <div class="row">
     <?php   
            while ($row = mysqli_fetch_assoc($query)) {
   ?>
  <div class="card col-sm-12 col-md-6 col-lg-4 col-xl-4" style="margin:auto;">
  <img class="card-img-top" src="image/<?php echo $row['image']; ?>" alt="<?php echo $row['image']; ?>" />
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['pname'];?></h5>
    <p class="card-text"><?php echo $row['pdescription'];?>.</p>
    <a href="tel:<?php echo $data['mobile'];  ?>" class="btn btn-primary">Call Now!</a>
     <a href="#" class="btn btn-primary"><?php echo "RS:".$row['price']." /- only"; ?></a>
  </div>
</div>
<?php
}
?>
</div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>