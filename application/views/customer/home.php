<!DOCTYPE html>
<html>
<head>
	<title>Kitchen Kits</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link rel="apple-touch-icon" href="<?php echo base_url('assets/img/KKIcon.png');?>">
  	<link rel="shortcut icon" href="<?php echo base_url('assets/img/KKIcon.png');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/styles.css">
</head>
<body>
	<nav class="navbar navbar-expand-md flex-column fixed-top bg-white stroke">
		<a class="navbar-brand align-self-center m-0 pb-3 position-md-absolute pb-md-0" href="#">
			<img id="c-logo" src="<?php echo base_url();?>/assets/img/logo-lg.png" width="900px" height="120px">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-md-center w-100" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a id="nav-link" href="<?php echo site_url();?>">HOME<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a id="nav-link" href="<?php echo site_url('customer/view_region'); ?>">RECIPES</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="#order">ORDER</a>
				</li> -->
				<?php
					if (isset($_SESSION['logged_in'])) {
						if ($_SESSION['utype'] == 1) {
							?>
								<li class="nav-item">
									<a id="nav-link" href="<?php echo site_url('admin');?>">DASHBOARD</a>
								</li>
								<li class="nav-item">
									<a id="nav-link" href="<?php echo site_url('user/logout');?>">LOG OUT</a>
								</li>
							<?php
						}elseif ($_SESSION['utype'] == 2) {
							?>
								<li class="nav-item">
									<a id="nav-link" href="<?php echo site_url('branch');?>">DASHBOARD</a>
								</li>
								<li class="nav-item">
									<a id="nav-link" href="<?php echo site_url('user/logout');?>">LOG OUT</a>
								</li>
							<?php
						}else{
							?>
								<li class="nav-item">
									<a id="nav-link" href="<?php echo site_url('customer/view_profile');?>">PROFILE</a>
								</li>
								<li class="nav-item">
									<a id="nav-link" href="<?php echo site_url('user/logout');?>">LOG OUT</a>
								</li>
							<?php
						}
					}
					else{
						?>
							<li class="nav-item">
								<a id="nav-link" href="<?php echo site_url('login');?>">SIGN IN</a>
							</li>
							<li class="nav-item">
								<a id="nav-link" href="<?php echo site_url('register');?>">SIGN UP</a>
							</li>
						<?php
					}
				?>
			</ul>
		</div>
	</nav>

	<div>
		<div class="v-header last-content">
			<video autoplay="true" loop="true">
				<source src="<?php echo base_url();?>/assets/vid/video-bg.mp4" type="video/mp4">
			</video>
		</div>
		<div class="v-header-content">
			<a class="btn btn-default" href="<?php echo site_url('customer/view_region'); ?>"><span>GET STARTED</span></a>
		</div>
	</div>

	<!-- Wekkly Favorites -->
	<div class="container-fluid new-div padding last-content">
		<h1 class="title-design">Weekly Favorites</h1>
		<div class="card-content">
				<div class="card wew">
					<a href=""><img class="card-img-top" src="" height="220px"></a>
					<div class="card-body">
						<h4 class="card-title">Recipe Name</h4>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-4" style="padding-top:0.5rem;">
								<span class="fa fa-star-checked"></span>
							</div>
							<div class="col-4" style="text-align:right;">
								<p><span class="fa fa-clock-o">Cook time</span></p>
							</div>
							<div class="col-4" style="text-align:center;">
								<p><span class="fa fa-cutlery"> Serve </span></p>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	<!-- Recommendation -->
	<div class="container-fluid new-div padding last-content">
		<h1 class="title-design">Recommended for You</h1>
		<div class="card-content">
				<div class="card wew">
					<a href=""><img class="card-img-top" src="" height="220px"></a>
					<div class="card-body">
						<h4 class="card-title">Recipe Name</h4>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-4" style="padding-top:0.5rem;">
								<span class="fa fa-star-checked"></span>
							</div>
							<div class="col-4" style="text-align:right;">
								<p><span class="fa fa-clock-o">Cook time</span></p>
							</div>
							<div class="col-4" style="text-align:center;">
								<p><span class="fa fa-cutlery"> Serve </span></p>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<h6>Copyright &copy; 2019 RLC Company. All Rights Reserved</h6>
		</div>
	</footer>
</body>
</html>
