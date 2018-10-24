<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title><?php echo $this->siteTitle();?></title>
		<meta name="description" content="Focus is a Well organized and easy to understand school management application for kinder garden and high schools"/>
		<link rel="icon" href="<?php echo PROOT; ?>public/images/army-logo.png" />
		<!-- Bootstrap v-3.7 -->
		<link rel="stylesheet" href="<?php echo PROOT; ?>public/css/bootstrap.min.css" />
		<!-- Google Fonts -->
		<link href="<?php echo PROOT; ?>public/fonts/roboto.css" rel="stylesheet">
		<!-- Font-Awesome -->
		<link rel="stylesheet" href="<?php echo PROOT; ?>public/css/font-awesome.min.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="<?php echo PROOT; ?>public/css/animate.css" />
		<!--  main css -->
		<link rel="stylesheet" href="<?php echo PROOT; ?>public/css/style.css" />
		<link rel="stylesheet" href="<?php echo PROOT; ?>public/css/responsive.css" />
		<link rel="stylesheet" href="<?php echo PROOT; ?>public/css/bootstrap-datepicker3.min.css" />

		<script src="<?php echo PROOT; ?>public/js/jquery-1.9.1.min.js"></script>
		<script src="<?php echo PROOT; ?>public/js/bootstrap-datepicker.min.js"></script>
	</head>
	<body>
	<div class="sidebar_wrapper " >
	<div class="fixed_box" >
		<!-- User profile picture -->
		<div class="profile">
			<div class="face"><img src="<?= PROOT; ?>public/images/army-logo.png" alt="" /></div>
		</div>
		<!-- User profile picture -->
		<div class="panel-group">
			<div id="sidebar" class="sidebar">
				<!--  left sidebar menu start -->
				<ul class="nav sidebar_nav" >
					<!--  Home menu  item  start-->
					<li class="">
						<a href="<?= PROOT; ?>dashboard" ><i class="fa fa-home "></i> Home</a>
					</li>
					<!--  Home menu item end-->

					<!--  classes menu item  start-->
					<li class="">
						<a class="dropdn" id="class_area" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-th-large"></i> Soldier
						</a>
						<!--  classes sub menu  items -->
						<ul class="dropdown-menu"  aria-labelledby="class_area">
							<li><a href="<?= PROOT; ?>soldier">All Soldier</a></li>
							<li><a href="<?= PROOT; ?>soldier/admission/step-1/">Add Soldier</a></li>
							<!--<li><a href="<?= PROOT; ?>soldier/mass_admission">Mass Addmission</a></li>
							<li><a href="<?= PROOT; ?>soldier/ranks">Ranks</a></li>
							<li><a href="<?= PROOT; ?>soldier/create_ranks">Create Ranks</a></li>-->
						</ul>
						<!--  classes sub menu  items end-->
					</li>
					<li class="">
						<a class="dropdn" id="class_area" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-th-large"></i> Civil
						</a>
						<!--  classes sub menu  items -->
						<ul class="dropdown-menu"  aria-labelledby="class_area">
							<li><a href="<?= PROOT; ?>civil">All Civil</a></li>
							<li><a href="<?= PROOT; ?>civil/add/step-1/">Add Civil</a></li>
						</ul>
						<!--  classes sub menu  items end-->
					</li>
					<!--  classes menu  item end-->
					<!--  Setting menu  item start-->
					<li>
						<a href=""><i class="fa fa-cogs"></i> Settings</a>
					</li>
					<!--  Setting menu  item end-->

				</ul>
				<!--  left sidebar menu end -->
			</div>
		</div>
	</div>
</div>
<!-- Sidebar end -->
<div class="content_area large small">
	<div class="header_fixed">
		<header class="content_header">
			<div class="col-md-4 col-xs-4 col-sm-2">
				<ul class="nav navbar-nav ">
					<li><span class="toggle_icon"><i class="fa fa-bars"></i></span></li>
					
				</ul>
			</div>
			<div class="col-md-4 ">
				<div class="mysearch">
					<form  method="post" action="<?= PROOT;?>search">
						<input class="effect-2" type="text" placeholder="Search here" name="find" required=""/>
						<button type="submit" name="search" ><i class="fa fa-search"></i></button>
						<span class="focus-border"></span>
					</form>
				</div>
			</div>
			<div class="col-md-4 col-sm-8 col-xs-8">
				<div class="my_alert">
					<ul class="nav navbar-nav">
						<li>
							  <a class="dropdn" id="notification" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
							  </a>
							  <div class="dropdown-menu pull-right" aria-labelledby="notification">

									<div class="panel-heading">Notification</div>
									<ul class="nav">
										<li><a href="">0 notification</a></li>
									</ul>
							  </div>

						</li>
						<li>
							  <a class="dropdn" id="Message" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							  </a>
							   <div class="dropdown-menu pull-right" aria-labelledby="Message">
									<div class="panel-heading">Messages</div>
									<ul class="nav">
										<li><a href="">You have no message </a></li>
									</ul>
							  </div>
						</li>
						<li class="">
							 <a class="dropdn" id="user_nav" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-user"></i>
							  </a>

							  <div class="dropdown-menu pull-right" aria-labelledby="Message">
									 <ul class="nav" >
										<li>
											<a href="settings.php?myprofile="><i class="fa fa-user"></i>
												My Profile
											</a>
										</li>
									<li><a href="<?= PROOT; ?>logout" class="" title="Log out"><i class="fa fa-power-off" aria-hidden="true"></i> Log out</a></li>
									</ul>
							  </div>

						</li>
					</ul>

				</div>
			</div>
		</header>
	</div>

<!-- Content area div starts here -->
<div class="content_body">
<div class="overlay" ><span id="wloader"></span></div>
<br />
<br />
<br />
<div class="col-md-12">
	<div class="display-error hide" >
		<div class="alert ">
			
		</div>
		<span class='my_style'><i class='fa fa-times'></i></span>
	</div>
	<div id="loader" class="" style=""><img src="preloader.gif" alt="" /></div>
</div>
		<?= $this->content('body'); ?>
		
		
			</div><!-- Content body div ends here -->
			<!-- Copyright area start-->
			</div><!-- Content body div ends here -->
			<!-- Copyright area start-->
			<div class="copyright">
				Design &amp; Developed by Mohammad Akbar Hussain | Powered by <a href="https://aitso.army.mil.bd">AITSO</a>
			</div>
			<!-- Copyright area end-->
			<!-- Content area div ends here -->
			</div>
			<!-- Jquery 3.2.1 -->
			<script src="<?= PROOT; ?>public/js/jquery.min.js"></script>
			<!-- Bootstrap Js -->
			<script  src="<?= PROOT; ?>public/js/bootstrap.min.js"  ></script>
			<!-- Slim Scroll Js -->
			<script  src="<?= PROOT; ?>public/js/bootstrap-datepicker.js"  ></script>
			<!-- Slim Scroll Js -->
			<script src="<?= PROOT; ?>public/js/jquery.slimscroll.min.js"></script>
			<!-- Custom JS -->
			<script  src="<?= PROOT; ?>public/js/printThis.js" ></script>
			<script  src="<?= PROOT; ?>public/js/custom.js" ></script>
	</body>
</html>
