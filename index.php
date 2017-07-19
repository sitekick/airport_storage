<!DOCTYPE html>
<html>
<head>
	<title>Airport Storage & Garages</title>
	<meta charset="utf-8">
	<meta description="Storage and large garages located in Newport News, VA">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/style.css" />
	<?php $page_url="http://www.storageandgarages.com"; ?>
	<!--bower:css -->
	<!--endbower-->
</head>
<body class="home index">
	<div class="container-fluid">
		<?php include('assets/inc/header.html'); ?>
		<main>
			<div class="page-header row">
			<h1 class="col-sm-9">Storage Units and Garages on the Virginia Peninsula</h1>
			<div class="col-sm-3 sharing-controls"><?php include('assets/inc/controls.php'); ?></div>
			</div>
			<div class="primary row">
				<section class="col-md-8 col-md-push-4 jumbotron" style="background-image: url(/assets/img/slides/slide1.jpg);">
					<h1>Now Pre-Leasing</h1>
					<div class="offer">
						<h2>Save $75 <small>on first month's rent for terms of 6 months or longer</small></h2>
					</div>
				</section>
				<section class="col-md-4 col-md-pull-8 benefits">
					<ul>
						<li><strong>Lowest price per square foot</strong> in the area</li>
						<li><strong>Huge storage garages</strong> with 14’ ceilings</li>
						<li><strong>Brand new</strong> facility with <strong>great lighting</strong> and <strong>security cameras</strong></li>
						<li>Ground level storage units with <strong>drive-up access</strong></li>
						<li><strong>10 ft. doors</strong> that trigger <strong>automatic interior lighting</strong> when opened</li>
					</ul>
				</section>
			</div>
			<h1>Airport Storage & Garages</h1>
			<aside class="business-info">
				<div class="wrap">
				<div class="row">
					<div class="col-md-4">
					  	<section>
					  	<iframe src="https://www.google.com/maps/d/u/1/embed?mid=1CQ1deEvqJCRnw-qVK_Xdk6GatXM&z=12" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
					  	</section>
					</div>
					<div class="col-md-8 row">
					  	<h3>Conveniently located near Newport News Williamsburg Intl. Airport</h3>
					  	<section class="panel panel-info col-sm-6">
						  	<div class="panel-heading">
							<h4 class="panel-title">Location</h4>
							</div>
						  	<div class="panel-body">
						  		<p><strong>Leasing Office</strong><br>
							  	458 Severn Road<br>
							  	Newport News, VA 23602</p>
						  	</div>
					  	</section>
						<section class="panel panel-info col-sm-6">
							<div class="panel-heading">
							<h4 class="panel-title">Hours</h4>
							</div>
							<div class="panel-body">
							<table class="table table-condensed">
							<thead>
								<tr>
									<th colspan="2">Leasing Office</th>
								</tr>
							</thead>
								<tbody>
									<tr>
										<td>Monday - Friday</td>
										<td align="right">8am to 5pm</td>
									</tr>
									<tr>
										<td>Saturday</td>
										<td align="right">8am to 4pm</td>
									</tr>
									<tr>
										<td>Sunday</td>
										<td align="right">Closed</td>
									</tr>	
								</tbody>
							</table>
							<table class="table table-condensed">
							<thead>
								<tr>
									<th colspan="2">Facility</th>
								</tr>
							</thead>
								<tbody>
									<tr>
										<td>Daily</td>
										<td align="right">6am to 10pm</td>
									</tr>
									
								</tbody>
							</table>
							</div>
						</section>
					</div><!--top row-->
				<div class="buttons row">
					<div class="col-sm-4">
						<a class="btn-default btn" href="https://www.google.com/maps/dir//458+Severn+Rd,+Newport+News,+VA+23602/@37.1169755,-76.5094899,17z/data=!4m16!1m7!3m6!1s0x89b0792b7c05347b:0xdf3b0b66b42bd6e9!2s458+Severn+Rd,+Newport+News,+VA+23602!3b1!8m2!3d37.1169755!4d-76.5073012!4m7!1m0!1m5!1m1!1s0x89b0792b7c05347b:0xdf3b0b66b42bd6e9!2m2!1d-76.5073012!2d37.1169755?authuser=1" target="_blank">Get Directions</a>
					</div>
					<div class="col-sm-4">
						<a class="btn-default btn" href="tel:+17578819404">Call (757) 881-9404</a>
					</div>
					<div class="col-sm-4">
						<a class="btn-default btn" href="contact.php">Contact by Email</a>
					</div>
				</div>
				</div><!--.wrap-->
			</aside>
			<aside class="secondary row">
				  	<section class="col-sm-4">
					  	<?php include('assets/inc/widget_storage.html'); ?>
					</section>
					<section class="col-sm-4">
					  	<?php include('assets/inc/widget_garages.html'); ?>
					</section>
					<section class="col-sm-4">
					  	<?php include('assets/inc/widget_facility_map.html'); ?>
					</section>
			</aside>		
		</main>
		<?php include('assets/inc/footer.html'); ?>
		</div><!-- /.container -->
	<!--bower:js -->
	<script src="src/lib/bower/jquery/dist/jquery.js"></script>
	<script src="src/lib/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
	<!--endbower-->
	<script src="assets/js/scripts.js"></script>
</body>
</html>