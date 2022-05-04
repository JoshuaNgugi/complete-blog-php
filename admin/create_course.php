<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/post_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
<!-- Get all topics -->
<?php 
$directors = getAllDirectors();	
$levels = getAllCourseLevels();	
?>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>

	<div class="container content">
		<!-- Left side menu -->
		<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>

		<!-- Middle form - to create and edit  -->
		<div class="action create-post-div">
			<h1 class="page-title">Add/Edit Course</h1>
			<form method="post" enctype="multipart/form-data" action="<?php echo BASE_URL . 'admin/create_course.php'; ?>" >
				<!-- validation errors for the form -->
				<?php include(ROOT_PATH . '/includes/errors.php') ?>

				<!-- if editing post, the id is required to identify that post -->
				<?php if ($isEditingPost === true): ?>
					<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
				<?php endif ?>

				<input type="text" name="title" value="<?php echo $title; ?>" placeholder="Title">
				<textarea name="body" id="body" cols="30" rows="10"><?php echo $body; ?></textarea>
				<select name="director_id">
					<option value="" selected disabled>Choose Director</option>
					<?php foreach ($directors as $director): ?>
						<option value="<?php echo $director['id']; ?>">
							<?php echo $director['first_name'] . " ". $director['last_name'] . " | " . $director['email']; ?>
						</option>
					<?php endforeach ?>
				</select>

                <select name="course_level_id">
					<option value="" selected disabled>Course Level</option>
					<?php foreach ($levels as $level): ?>
						<option value="<?php echo $level['id']; ?>">
							<?php echo $level['name']; ?>
						</option>
					<?php endforeach ?>
				</select>
								
				<!-- if editing post, display the update button instead of create button -->
				<?php if ($isEditingPost === true): ?> 
					<button type="submit" class="btn" name="update_course">Update</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_course">Save Course</button>
				<?php endif ?>

			</form>
		</div>
		<!-- // Middle form - to create and edit -->
	</div>
</body>
</html>

<script>
	CKEDITOR.replace('body');
</script>