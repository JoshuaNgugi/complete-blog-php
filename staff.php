<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php
$staff = getAllStaff();
?>
<?php include('includes/head_section.php'); ?>
</head>

<body>
    <!-- Navbar -->
    <?php include(ROOT_PATH . '/includes/navbar.php'); ?>

    <div class="staff-bar" style="font-family: 'Averia Serif Libre', cursive;">
        <h2>Staff</h2>
        <table class="table table-hover table-striped">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
                <th scope="col">Email</th>
            </tr>
            <?php foreach ($staff as $staffmember) : ?>
                <tr class="card-content">
                    <td><?php echo $staffmember['first_name'] . ' ' . $staffmember['last_name'] ?></td>
                    <td><?php echo $staffmember['role'] ?></td>
                    <td><?php echo $staffmember['email'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

    <?php include(ROOT_PATH . '/includes/footer.php'); ?>