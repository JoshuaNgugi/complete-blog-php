<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php include('includes/head_section.php'); ?>
<?php
// Get courses under a particular level
if (isset($_GET['course_level_id'])) {
    $course_level_id = $_GET['course_level_id'];
    $courses = getCoursesByCourseLevel($course_level_id);
}
?>
<title>Course | Home </title>
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        <?php include(ROOT_PATH . '/includes/navbar.php'); ?>
        <!-- // Navbar -->
        <!-- content -->
        <div class="content">
            <h2 class="content-title">
                <?php echo getCourseLevelTitleById($course_level_id); ?> Courses
            </h2>
            <hr>
            <?php foreach ($courses as $post) : ?>
                <div class="post" style="margin-left: 0px;">
                    <a href="single_proramme.php?post-slug=<?php echo $post['slug']; ?>">
                        <div class="post_info">
                            <h3><?php echo $post['name'] ?></h3>
                            <div class="info">
                                <span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                                <span class="read_more">Read more...</span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
        <!-- // content -->
    </div>
    <!-- // container -->

    <!-- Footer -->
    <?php include(ROOT_PATH . '/includes/footer.php'); ?>
    <!-- // Footer -->