<!-- The first include should be config.php -->
<?php require_once('config.php') ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once(ROOT_PATH . '/includes/registration_login.php') ?>

<!-- Retrieve all posts from database  -->
<?php
$activites = getPublishedActivities();
$directors_message = getDirectorsMessage();
?>

<?php require_once(ROOT_PATH . '/includes/head_section.php') ?>
</head>

<body>

	<!-- navbar -->
	<?php include(ROOT_PATH . '/includes/navbar.php') ?>
	<!-- // navbar -->

	<!-- container - wraps whole page -->
	<div class="container">

		<div class="content">
			<h2 class="content-title">Current Activites</h2>
			<hr>
			<?php foreach ($activites as $activity) : ?>
				<div class="post" style="margin-left: 0px;">
					<img src="<?php echo BASE_URL . 'static/images/' . $activity['image']; ?>" class="post_image" alt="" onerror="this.src='<?php echo BASE_URL . 'static/images/type.jpg' ;?>'">

					<?php if (isset($activity['topic']['name'])) : ?>
						<a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $activity['topic']['id'] ?>" class="btn category">
							<?php echo $activity['topic']['name'] ?>
						</a>
					<?php endif ?>

					<a href="single_activity.php?activity-slug=<?php echo $activity['slug']; ?>">
						<div class="post_info">
							<h3><?php echo $activity['title'] ?></h3>
							<div class="info">
								<span><?php echo date("F j, Y ", strtotime($activity["created_at"])); ?></span>
								<span class="read_more">Read more...</span>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>
			<!-- more content still to come here ... -->

		</div>
		<div class="row" style="font-family: 'Averia Serif Libre', cursive;">
			<div class="col-lg-8">
				<div class="sn-container">
					<div class="sn-content">
						<h1 class="sn-title">Director's Message</h1>
						<h3><?php echo $directors_message['title'] ?></h3>
						<p>
							<?php echo $directors_message['message'] ?>
						</p>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- // container -->

	<!-- Footer Start -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-widget">
						<h3 class="title">Contacts</h3>
						<div class="contact-info">
							<p><i class="fa fa-map-marker"></i>Main Campus, Juja, Kenya</p>
							<p><i class="fa fa-envelope"></i>thereporter@jkuat.ac.ke</p>
							<p><i class="fa fa-phone"></i>+254 700 000 000</p>
							<div class="social">
								<a href=""><i class="fab fa-twitter"></i></a>
								<a href=""><i class="fab fa-facebook-f"></i></a>
								<a href=""><i class="fab fa-linkedin-in"></i></a>
								<a href=""><i class="fab fa-instagram"></i></a>
								<a href=""><i class="fab fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="footer-widget">
						<h3 class="title">Useful Links</h3>
						<ul>
							<li><a href="#">Be a Reporter</a></li>
							<li><a href="#">Enroll</a></li>
							<li><a href="#">Apply Course</a></li>
							<li><a href="#">Undergraduate Courses</a></li>
							<li><a href="#">Postgraduate Courses</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="footer-widget">
						<h3 class="title">Links To</h3>
						<ul>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Regional CISCO Academy</a></li>
							<li><a href="#">JKUAT Enterprises</a></li>
							<li><a href="#">JKUAT Tech Expo</a></li>
							<li><a href="#">Online Systems & Services</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="footer-widget">
						<h3 class="title">Newsletter</h3>
						<div class="newsletter">
							<p>
								You can get our weekly newsletter by subcribing to us. You will always stay connected
								and up to date on the latest news.
							</p>
							<form>
								<input class="form-control" type="email" placeholder="Your email here">
								<button class="btn">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->
</body>

</html>