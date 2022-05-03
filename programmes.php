<?php include('config.php'); ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
<?php include('includes/registration_login.php'); ?>
<?php include('includes/head_section.php'); ?>

</head>
<?php
$courses = getAllProgrammes();
?>

<body>
    <!-- navbar -->
    <?php include(ROOT_PATH . '/includes/navbar.php') ?>
    <!-- // navbar -->

    <div class="staff-bar">
        <div class="card">
            <div class="card-header">
                <h2>Programmes</h2>
            </div>
            <table class="table table-hover">
                <tr>
                    <th scope="col">Name</th>
                </tr>
                <?php foreach ($courses as $course) : ?>
                    <tr class="card-content">
                        <td>
                            <a href="single_programme.php?course-slug=<?php echo $course['slug']; ?>">
                                <?php echo $course['name'] ?>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>

    <?php include(ROOT_PATH . '/includes/footer.php') ?>