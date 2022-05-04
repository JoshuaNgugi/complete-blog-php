<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/post_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>

<!-- Get all admin courses from DB -->
<?php $activities = getAllActivities(); ?>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>

	<div class="container content">
		<!-- Left side menu -->
		<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>

		<!-- Display records from DB-->
		<div class="table-div"  style="width: 80%;">
			<!-- Display notification message -->
			<?php include(ROOT_PATH . '/includes/messages.php') ?>

			<?php if (empty($activities)): ?>
				<h1 style="text-align: center; margin-top: 20px;">No activites in the database.</h1>
			<?php else: ?>
				<table class="table">
						<thead>
						<th>#</th>
						<th>Title</th>
                        <th>Slug</th>
						<th>Created On</th>
                        <th>Edit</th>
					</thead>
					<tbody>
					<?php foreach ($activities as $key => $activity): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td><?php echo $activity['title']; ?></td>
                            <td><?php echo $activity['slug']; ?></td>
							<td><?php echo $activity['created_at']; ?></td>
                            <td>
								<a class="fa fa-pencil btn edit"
									href="create_activity.php?edit-activity=<?php echo $activity['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
		<!-- // Display records from DB -->
	</div>
</body>
</html>