<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php
$staff = getAllStaff();
?>
<?php include('includes/head_section.php'); ?>
<title>JKUAT SCIT Staff</title>
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        <?php include(ROOT_PATH . '/includes/navbar.php'); ?>
        <!-- // Navbar -->

        <div class="content">

            <!-- post sidebar -->
            <div class="staff-bar">
                <div class="card">
                    <div class="card-header">
                        <h2>Staff</h2>
                    </div>
                    <table class="table table-hover">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Role</th>
                        </tr>
                        <?php foreach ($staff as $staffmember) : ?>
                            <tr class="card-content">
                                <td><?php echo $staffmember['first_name']. ' '.$staffmember['last_name'] ?></td>
                                <td><?php echo $staffmember['role'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
            <!-- // post sidebar -->
        </div>
    </div>
    <!-- // content -->

    <?php include(ROOT_PATH . '/includes/footer.php'); ?>