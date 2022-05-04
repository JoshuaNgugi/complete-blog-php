<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/post_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>

<!-- Get all admin courses from DB -->
<?php $messages = getAllDirectorMessages(); ?>
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

			<?php if (empty($messages)): ?>
				<h1 style="text-align: center; margin-top: 20px;">No director messages in the database.</h1>
			<?php else: ?>
				<table class="table">
						<thead>
						<th>#</th>
						<th>Title</th>
                        <th>Message</th>
						<th>Created On</th>
                        <th>Updated On</th>
					</thead>
					<tbody>
					<?php foreach ($messages as $key => $message): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td><?php echo $message['title']; ?></td>
                            <td><?php echo $message['message']; ?></td>
							<td><?php echo $message['created_at']; ?></td>
                            <td><?php echo $message['updated_at']; ?></td>
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