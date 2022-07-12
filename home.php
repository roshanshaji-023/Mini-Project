<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body >
    <div id="hello" class="d-flex justify-content-center align-items-center ">
    	
    	<div class="shadow w-450 p-3 text-center">
            <h3 class="display-4 ">Hello, <?=$_SESSION['fname']?></h3>
            <a href="logout.php" class="btn btn-warning">
            	Logout
            </a>
		</div>
    </div>
	<section class="main">
		<h3>Choose from below:</h3>
	
        <div class="sample">
		<div class="meta">
              <img id="draw" src="Utilities/Images/undraw_workout_gcgu.svg" alt="">
                <a href="more_features/bonemass.html">Bone Mass</a>
            </div>
            <div class="bmi">
              <img id="draw" src="Utilities/Images/undraw_activity_tracker_re_2lvv.svg" alt="">
                <a href="Utilities/bmi.html">BMI</a>
            </div>
            <div class="bodyfat">
                <img id="draw" src="Utilities/Images/undraw_indoor_bike_pwa4.svg" alt="">
                <a href="Utilities/bodyfat.html">Body Fat%</a>
            </div>
            <div class="bmr">
                <img id="draw" src="Utilities/Images/undraw_fitness_stats_sht6.svg" alt="">
                <a href="Utilities/bmr.html">BMR</a>
            </div>

        </div>
        
        
    </section>
</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>