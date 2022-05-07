<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php
if (isset($_GET['activity-slug'])) {
    $activity = getActivityBySlug($_GET['activity-slug']);
}
?>
<?php include('includes/head_section.php'); ?>
</head>

<body>

    <?php include(ROOT_PATH . '/includes/navbar.php'); ?>
    <div class="container">
        <div class="content" style="font-family: 'Averia Serif Libre', cursive;">
            <!-- Page wrapper -->
            <div class="activity-wrapper">
                <div class="full-post-div">
                    <img style="margin-left: auto; margin-right: auto; display: block;" 
                    src="<?php echo BASE_URL . 'static/images/' . $activity['image']; ?>" alt="" 
                    onerror="this.src='<?php echo BASE_URL . 'static/images/type.jpg'; ?>'">
                
                    <?php ?>
                    <h2 class="post-title"><?php echo $activity['title']; ?></h2>
                    <div class="post-body-div">
                        <?php echo html_entity_decode($activity['body']); ?>
                    </div>
                    <?php ?>
                </div>
            </div>
        </div>
    </div>

    <?php include(ROOT_PATH . '/includes/footer.php'); ?>