<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php
if (isset($_GET['course-slug'])) {
    $course = getCourseBySlug($_GET['course-slug']);
}
$course_levels = getAllCourseLevels();
?>
<?php include('includes/head_section.php'); ?>
</head>

<body>

    <?php include(ROOT_PATH . '/includes/navbar.php'); ?>
    <div class="container">
        <div class="content" style="font-family: 'Averia Serif Libre', cursive;">
            <!-- Page wrapper -->
            <div class="post-wrapper">
                <div class="full-post-div">
                    <?php ?>
                    <h2 class="post-title"><?php echo $course['name']; ?></h2>
                    <div class="post-body-div">
                        <?php if (empty($course['description'])) : ?>
                            <p style="font-family: 'Averia Serif Libre', cursive; text-align: center; margin-top: 20px;">
                                No details for <?php echo $course['name']; ?> added yet. Please contact the school administration for information.
                            </p>
                        <?php else : ?>
                            <div style="font-family: 'Averia Serif Libre', cursive;">

                                <?php echo html_entity_decode($course['description']); ?>

                            </div>
                        <?php endif ?>
                    </div>
                    <?php ?>
                </div>
                <p>
                    <a href="apply.php?course-id=<?php echo $course['id']; ?>" class="btn btn-danger ml-3">Apply Now</a>
                </p>
            </div>

            <!-- post sidebar -->
            <div class="post-sidebar">
                <div class="card">
                    <div class="card-header">
                        <h2>Level</h2>
                    </div>
                    <div class="card-content">
                        <?php foreach ($course_levels as $course_level) : ?>
                            <a href="<?php echo BASE_URL . 'filtered_courses.php?course_level_id=' . $course_level['id'] ?>">
                                <?php echo $course_level['name']; ?>
                            </a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <!-- // post sidebar -->
        </div>
    </div>
    <!-- // content -->

    <?php include(ROOT_PATH . '/includes/footer.php'); ?>