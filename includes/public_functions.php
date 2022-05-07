<?php 
/* * * * * * * * * * * * * * *
* Returns all published posts
* * * * * * * * * * * * * * */
function getPublishedPosts() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE published=true";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}
/* * * * * * * * * * * * * * *
* Receives a post id and
* Returns topic of the post
* * * * * * * * * * * * * * */
function getPostTopic($post_id){
	global $conn;
	$sql = "SELECT * FROM topics WHERE id=
			(SELECT topic_id FROM post_topic WHERE post_id=$post_id) LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$topic = mysqli_fetch_assoc($result);
	return $topic;
}
/* * * * * * * * * * * * * * * *
* Returns all posts under a topic
* * * * * * * * * * * * * * * * */
function getPublishedPostsByTopic($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=$topic_id GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}
/* * * * * * * * * * * * * * * *
* Returns topic name by topic id
* * * * * * * * * * * * * * * * */
function getTopicNameById($id)
{
	global $conn;
	$sql = "SELECT name FROM topics WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	$topic = mysqli_fetch_assoc($result);
	return $topic['name'];
}
/* * * * * * * * * * * * * * *
* Returns a single post
* * * * * * * * * * * * * * */
function getPost($slug){
	global $conn;
	// Get single post slug
	$post_slug = $_GET['post-slug'];
	$sql = "SELECT * FROM posts WHERE slug='$post_slug' AND published=true";
	$result = mysqli_query($conn, $sql);

	// fetch query results as associative array.
	$post = mysqli_fetch_assoc($result);
	if ($post) {
		// get the topic to which this post belongs
		$post['topic'] = getPostTopic($post['id']);
	}
	return $post;
}
/* * * * * * * * * * * *
*  Returns all topics
* * * * * * * * * * * * */
function getAllTopics()
{
	global $conn;
	$sql = "SELECT * FROM topics";
	$result = mysqli_query($conn, $sql);
	$topics = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $topics;
}

function getAllProgrammes() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM courses WHERE course_level_id != 4";
	$result = mysqli_query($conn, $sql);
	// fetch all courses as an associative array called $courses
	$courses = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $courses;
}

function getCourseBySlug($slug){
	global $conn;
	// Get single post slug
	$course_slug = $_GET['course-slug'];
	$sql = "SELECT * FROM courses WHERE slug='$course_slug'";
	$result = mysqli_query($conn, $sql);

	// fetch query results as associative array.
	$post = mysqli_fetch_assoc($result);
	return $post;
}

function getCourseById($id){
	global $conn;
	$course_id = $_GET['course-id'];
	$sql = "SELECT * FROM courses WHERE id=$course_id";
	$result = mysqli_query($conn, $sql);

	// fetch query results as associative array.
	$post = mysqli_fetch_assoc($result);
	return $post;
}

function getAllStaff()
{
	global $conn;
	$sql = "SELECT * FROM staff";
	$result = mysqli_query($conn, $sql);
	$staff = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $staff;
}

function getAllCourseLevels()
{
	global $conn;
	$sql = "SELECT * FROM course_level";
	$result = mysqli_query($conn, $sql);
	$course_levels = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $course_levels;
}

function getTop5Courses() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM courses WHERE course_level_id != 4 ORDER BY created_at limit 5";
	$result = mysqli_query($conn, $sql);
	// fetch all courses as an associative array called $posts
	$courses = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	return $courses;
}

/* * * * * * * * * * * * * * * *
* Returns all posts under a topic
* * * * * * * * * * * * * * * * */
function getCoursesByCourseLevel($course_level_id) {
	global $conn;
	$sql = "SELECT * FROM courses WHERE course_level_id =  $course_level_id";

	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}

function getCourseLevelTitleById($id)
{
	global $conn;
	$sql = "SELECT name FROM course_level WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	$courses = mysqli_fetch_assoc($result);
	return $courses['name'];
}

function getDirectorsMessage() {
	global $conn;
	$sql = "SELECT * FROM director_messages WHERE is_published = true ORDER BY created_at DESC limit 1";

	$result = mysqli_query($conn, $sql);

	// fetch query results as associative array.
	$courses = mysqli_fetch_assoc($result);
	
	return $courses;
}

function getPublishedActivities() {
	global $conn;
	$sql = "SELECT * FROM current_activities WHERE is_published=true";
	$result = mysqli_query($conn, $sql);
	$activities = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $activities;
}

function getBootCamps() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM courses WHERE course_level_id = 4 ORDER BY created_at limit 5";
	$result = mysqli_query($conn, $sql);
	// fetch all courses as an associative array called $posts
	$courses = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	return $courses;
}

function getBankDetails()
{
	global $conn;
	$sql = "SELECT * FROM bank_account_details WHERE is_active=true";
	$result = mysqli_query($conn, $sql);
	$bank_details = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $bank_details;
}

function getActivityBySlug($slug){
	global $conn;
	// Get single post slug
	$activity_slug = $_GET['activity-slug'];
	$sql = "SELECT * FROM current_activities WHERE slug='$activity_slug'";
	$result = mysqli_query($conn, $sql);

	// fetch query results as associative array.
	$activity = mysqli_fetch_assoc($result);
	return $activity;
}
?>