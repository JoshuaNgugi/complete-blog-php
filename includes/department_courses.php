<div class="sidebar-widget">
    <h2 class="sw-title">Department of IT</h2>
    <div class="category">
        <ul>
            <?php foreach ($courses as $course) : ?>
                <li><a href="single_programme.php?course-slug=<?php echo $course['slug']; ?>"><?php echo $course['name']; ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>
</div>