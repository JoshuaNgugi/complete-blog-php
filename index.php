<!-- The first include should be config.php -->
<?php require_once('config.php') ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once(ROOT_PATH . '/includes/registration_login.php') ?>

<!-- Retrieve all posts from database  -->
<?php
$posts = getPublishedPosts();
$directors_message = getDirectorsMessage();
?>

<?php require_once(ROOT_PATH . '/includes/head_section.php') ?>
<title>LifeBlog | Home </title>
</head>

<body>
	<!-- container - wraps whole page -->
	<div class="container">
		<!-- navbar -->
		<?php include(ROOT_PATH . '/includes/navbar.php') ?>
		<!-- // navbar -->

		<!-- banner -->
		<?php include(ROOT_PATH . '/includes/banner.php') ?>
		<!-- // banner -->

		<!-- Page content -->

		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<?php foreach ($posts as $post) : ?>
				<div class="post" style="margin-left: 0px;">
					<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">

					<?php if (isset($post['topic']['name'])) : ?>
						<a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>" class="btn category">
							<?php echo $post['topic']['name'] ?>
						</a>
					<?php endif ?>

					<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
						<div class="post_info">
							<h3><?php echo $post['title'] ?></h3>
							<div class="info">
								<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
								<span class="read_more">Read more...</span>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>
			<!-- more content still to come here ... -->
		</div>
		<!-- Single News Start-->
		<div class="single-news">
			<div class="container">
				<div class="row">
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
		</div>
		<!-- Single News End-->
		<!-- // Page content -->
	</div>
	<!-- // container -->

	<!-- footer -->
	<?php include(ROOT_PATH . '/includes/footer.php') ?>
	<!-- // footer -->