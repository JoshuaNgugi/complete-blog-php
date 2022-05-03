<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php
if (isset($_GET['course-slug'])) {
    $course = getCourse($_GET['course-slug']);
}
$topics = getAllTopics();
?>
<?php include('includes/head_section.php'); ?>
<title> <?php echo $course['name'] ?> | JKUAT SCIT</title>
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        <?php include(ROOT_PATH . '/includes/navbar.php'); ?>
        <!-- // Navbar -->

        <div class="content">
            <!-- Page wrapper -->
            <div class="post-wrapper">
                <!-- full post div -->
                <div class="full-post-div">
                    <?php ?>
                        <h2 class="post-title"><?php echo $course['name']; ?></h2>
                        <div class="post-body-div">
                            <?php echo html_entity_decode($course['description']); ?>
                        </div>
                    <?php ?>
                </div>
                <!-- // full post div -->

                <!-- comments section -->
                <!--  coming soon ...  -->
            </div>
            <!-- // Page wrapper -->

            <!-- post sidebar -->
            <div class="post-sidebar">
                <div class="card">
                    <div class="card-header">
                        <h2>Topics</h2>
                    </div>
                    <div class="card-content">
                        <?php foreach ($topics as $topic) : ?>
                            <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
                                <?php echo $topic['name']; ?>
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