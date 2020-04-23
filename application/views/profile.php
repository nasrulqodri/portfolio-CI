<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Protfolio</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap4.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">

		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
		<script src="<?=base_url()?>assets/js/jQuery.js"></script>
		<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php 
			include "inc/custom_css.php";
		?>
		<div id="welcome">
			<div class="welcome-text">
				<h1 class="text-center text-white">Welcome to Portfolio</h1>
				<div class="text-center">
					<button id="viewProfile" class="viewProfile btn btn-success">View Profile</button>
				</div>
			</div>
		</div>
		<div id="container-profile" class="col">
			<div class="container">
				<div class="row profile-box">
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 profile-box-left">
						<div class="col-sm-12 content">
							<div class="col-sm-12 text-center">
								<h2 class="text-white mb-5">Profile Info</h2>
							</div>
							<div class="col-sm-12 text-center">
								<img id="picture" class="img-round" src="https://randomuser.me/api/portraits/women/87.jpg" >
							</div>
							<div class="col-sm-12 text-center">
								<h3 id="name" class="text-white pt-3">Juliette Chan </h3>
								<p id="gender" class="gender">Female</p>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5  col-sm-5 col-xs-5  profile-box-right">
						<div>
							<ul class="nav nav-pills mt-5 tab-menu">
							    <li><a data-toggle="pill" href="#menu1">Date of Birth</a></li>
				                <li><a data-toggle="pill" href="#menu2">Contact</a></li>
				                <li class="active"><a data-toggle="pill" href="#menu3">Location</a></li>
							</ul>
						</div>
						<div>
							<div class="tab-content content-list">
							    <div id="menu1" class="text-white tab-pane fade">
							      <h3 class="text-center">Date of Birth</h3>
							      <p class="title1">Date</p>
							      <p id="date" class="title2">22-93-1993</p>
							      <p class="title1">Age</p>
							      <p id="age" class="title2">49</p>
							    </div>
							    <div id="menu2" class="text-white tab-pane fade">
							      <h3 class="text-center">Contact</h3>
							      <p class="title1">Phone</p>
							      <p id="phone" class="title2">(743)-524-5179</p>
							      <p class="title1">Cell</p>
							      <p id="cell" class="title2">(743)-524-5179</p>
							    </div>
							    <div id="menu3" class="text-white tab-pane fade in active">
							      <h3 class="text-center">Location</h3>
							      <p class="title1">Street</p>
							      <p id="street" class="title2"></p>
							      <p class="title1">City</p>
							      <p id="city" class="title2">Georgetown</p>
							      <p class="title1">State</p>
							      <p id="state" class="title2">state</p>
							      <p class="title1">Country</p>
							      <p id="Country" class="title2">Canada</p>
							      <p class="title1">Post code</p>
							      <p id="postCode" class="title2">J2E 8G0</p>
							    </div>
						  	</div>
						</div>
				<div class="next-profile">
					<button class="btn btn-info viewProfile">Next Profile</button>
				</div>
					</div>
				</div>
			</div>
		</div>
		<div id="map" class="container">
			<div class="text-white text-center">
				<h2>Map Location</h2>
			</div>
			<div class="body-item mt-5" style="padding: 0 6%">
				<iframe src="https://maps.google.com/maps?q=-6.21462, 106.84513&z=15&output=embed" width="100%" height="500" frameborder="0" style="border:0"></iframe>    
		    </div>
		</div>
	</body>
	<footer>
		<div class="footer">
			<p class="text-center text-white">Copyright ©2020 All rights reserved - Design by nasrulqodri@gmail.com</p> 
		</div>
	</footer>

	<?php 
		include "inc/script.php"
	?>
</html>