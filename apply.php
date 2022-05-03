<?php include('config.php'); ?>
<!-- Source code for handling registration and login -->
<?php include('includes/public_functions.php'); ?>

<?php include('includes/head_section.php'); ?>

<?php
if (isset($_GET['course-id'])) {
    $course = getCourseById($_GET['course-id']);
}
?>

</head>

<body>

    <?php include(ROOT_PATH . '/includes/navbar.php'); ?>
    <div class="container">
        <div style="width: 40%; margin: 20px auto;">
            <form method="post" action="register.php">
                <h2>Apply Course</h2>
                <label for="course_title">Course Title:</label>
                <input id="course_title" type="text" name="Course Title" value="<?php echo $course['name']; ?>" placeholder="Course Title" disabled>
                <label for="email">Email:</label>
                <input id="email" type="email" name="Your Email" value="" placeholder="Email">
                <button type="submit" class="btn" name="reg_user">Apply</button>
            </form>
        </div>
    </div>
    <!-- // container -->
    <!-- Footer -->
    <?php include(ROOT_PATH . '/includes/footer.php'); ?>
    <!-- // Footer -->