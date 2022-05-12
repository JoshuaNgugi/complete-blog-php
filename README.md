# ICS 3114 WEB TECHNOLOGY PROJECT DOCUMENTATION
## Assignement (Website for School of Computing and Information Technology)
Website: [Here](http://oldman.co.ke/)

##### Home Page
![web-potrait](https://user-images.githubusercontent.com/19873411/168120661-2d5559e2-d765-4ca9-9078-b8d3781107f7.PNG)



##### Academics Page
![academics](https://user-images.githubusercontent.com/19873411/168123332-765aaf13-2559-4b17-bd41-d982d9d33d51.PNG)



#### Payment Page
![payment](https://user-images.githubusercontent.com/19873411/168123386-f5fee698-e535-4b29-b7f4-05da72712af2.PNG)



#### Programmes Page
![programmes](https://user-images.githubusercontent.com/19873411/168123484-66d006da-08c7-4fed-afaf-a90dfa9b0163.PNG)



#### Admin Dashboard Landing Page
![admin](https://user-images.githubusercontent.com/19873411/168123582-8ae37437-92a8-4077-a99c-4ce8a913cd70.PNG)



### Functional and Non-functional Requirements
#### Functional Requirements
1. The website should contain the following pages:
	* Home Page
	* Academics
	* Payment methods
	* Programmes
	* Login
	* Staff
	* Apply now
2. Every page must contain a logo, menu bar and a footer.
3. The home page should provide information about the current activities of the school, how to apply link with a link to Apply Now, message from the director etc.
4. The academics page should contain information regarding various academic activities including and not limited to boot camps, cisco
academies and related information as well as microsoft related course that students undertake to enrich the programmes that they are taking.
5. Payment methods should consider direct payment to the university or payment via mpesa only. In this case only direct payments were implemented.
6. Programmes should enlist the various programmes of the department and the school at large.
7. The back end should allow the webadministrator to and information related to the area that need update with good forms.
8. The site should be database driven.

#### Non-functional Requirements
1. Security - the system should be secure in that unauthorized users should not be able to access it or should be authenticated properly before accessing it.
2. Reliability - the website should be up 24/7 to allow users to access it anytime they wish.
3. Maintainabilty - the site should be continualy updated and maintained in order to deal with any bugs and add any new requirement that might arise.
4. Usablility - the site should be user friendly and easy to use.

### Definition of Users
1. Web-admin - this is the person responsible for accessing the web admin portal and uploading information to the website.
2. Staff - these are the school staff who are listed under the staff page and employees of the university.
3. Student - these are the users who access the website to access the various information that they require about the school

### Use Case Diagram
![web-use](https://user-images.githubusercontent.com/19873411/168119797-58f09ba6-2de3-4add-a8c4-a8e5d29a0a81.PNG)

### Tools used
The website was developed using [Visual Studio Code](https://code.visualstudio.com/) and the backend which included the server and database [XAMPP](https://www.apachefriends.org/download.html). XAMPP provides an Apache Server and MySQL database locally.
The site is hosted using a domain purchased via [Truehost](https://truehost.co.ke/). The webisite files were uploaded to Truehost cpanel using [FileZilla](https://filezilla-project.org/download.php?platform=win64).
[GitHub](https://github.com/) was used for hosting the code and [Git](https://git-scm.com/) for version control.
This was developed using a HP-envy laptop.

## Database
### Entity Relationship Diagram
The following shows the entity relationship diagram used for the above website
![web-erd](https://user-images.githubusercontent.com/19873411/166811014-f35b363c-1033-4822-b260-dbe11ac934db.PNG)

Please note the admin credentials to log into the admin dashboard are indicated in the file uploaded on [sodel4](https://sodel4.jkuat.ac.ke/).

#### Staff Table

```
CREATE TABLE staff (
  id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  first_name varchar(20),
  last_name varchar(20),
  email varchar(30),
  role varchar(20),
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp NULL,
  is_active boolean NOT NULL DEFAULT FALSE
);
```

#### Course Level Table

```
CREATE TABLE course_level (
  id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  name varchar(20),
  slug varchar(20) UNIQUE,
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp NULL
);
```

#### Courses Table

```
CREATE TABLE courses (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY NOT NULL,
  name varchar(255) DEFAULT NULL,
  slug varchar(255) DEFAULT NULL UNIQUE,
  description text DEFAULT NULL,
  created_at timestamp NULL DEFAULT current_timestamp(),
  updated_at timestamp NULL DEFAULT NULL,
  staff_id int(11) DEFAULT NULL,
  course_level_id int(11) NOT NULL DEFAULT 3,
  FOREIGN KEY (staff_id) REFERENCES staff(id) ON DELETE NO ACTION ON UPDATE NO ACTION,
  FOREIGN KEY (course_level_id) REFERENCES course_levels(id) ON DELETE NO ACTION ON UPDATE NO ACTION
);
```

#### Courses Details Table

```
CREATE TABLE course_details (
  id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  course_id int(11) UNIQUE,
  course_level_id int(11),
  FOREIGN KEY (course_id) REFERENCES courses(id),
  FOREIGN KEY (course_level_id) REFERENCES course_level(id),
);
```

#### Director's Messages Tables

```
CREATE TABLE director_messages (
  id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  director_id int(11),
  title VARCHAR(20) NOT NULL,
  message text NOT NULL,
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp NULL,
  is_published boolean NOT NULL DEFAULT FALSE,
  FOREIGN KEY (director_id) REFERENCES staff(id),
);
```

#### Current Activities Table

```
CREATE TABLE current_activities (
 id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 staff_id int(11) DEFAULT NULL,
 title varchar(255) NOT NULL,
 slug varchar(255) NOT NULL UNIQUE,
 image varchar(255) NOT NULL,
 body text NOT NULL,
 is_published BOOLEAN NOT NULL DEFAULT false,
 created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 updated_at timestamp NULL,
  FOREIGN KEY (staff_id) REFERENCES staff(id) ON DELETE NO ACTION ON UPDATE NO ACTION
);
```

## Code
##### Retrieving current activities
The following section covers the backend code of the system.

The current activities displayed on the home page(`index.php`) are displayed using the html code below
```
<?php foreach ($activites as $activity) : ?>
	<div class="post" style="margin-left: 0px;">
		<img src="<?php echo BASE_URL . 'static/images/' . $activity['image']; ?>" class="post_image" alt="">

		<?php if (isset($activity['topic']['name'])) : ?>
			<a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $activity['topic']['id'] ?>" class="btn category">
				<?php echo $activity['topic']['name'] ?>
			</a>
		<?php endif ?>

		<a href="single_programme.php?course-slug=<?php echo $activity['slug']; ?>">
			<div class="post_info">
				<h3><?php echo $activity['title'] ?></h3>
				<div class="info">
					<span><?php echo date("F j, Y ", strtotime($activity["created_at"])); ?></span>
					<span class="read_more">Read more...</span>
				</div>
			</div>
		</a>
	</div>
<?php endforeach ?>
```

The `$activities` are retrieved using `getPublishedActivities()` which is stored in `public_functions.php`
```
function getPublishedActivities() {
	global $conn;
	$sql = "SELECT * FROM current_activities WHERE is_published=true";
	$result = mysqli_query($conn, $sql);
	$activities = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $activities;
}
```

##### Creating an activitiy
The code below is located in `post_functions.php` and retrieves data from the form in `create_activity.php` validates it and then inserts it into the `current_activities` table.

```
function createActivity($request_values)
{
    global $conn, $errors, $title, $featured_image, $body, $published;
    $title = esc($request_values['title']);
    $body = htmlentities(esc($request_values['body']));
    if (isset($request_values['publish'])) {
        $published = esc($request_values['publish']);
    }
    // create slug: if title is "The Storm Is Over", return "the-storm-is-over" as slug
    $activity_slug = makeSlug($title);
    // validate form
    if (empty($title)) {
        array_push($errors, "Activity title is required");
    }
    if (empty($body)) {
        array_push($errors, "Activity body is required");
    }
    // Get image name
    $featured_image = $_FILES['featured_image']['name'];
    if (empty($featured_image)) {
        array_push($errors, "Featured image is required");
    }
    // image file directory
    $target = "../static/images/" . basename($featured_image);
    if (!move_uploaded_file($_FILES['featured_image']['tmp_name'], $target)) {
        array_push($errors, "Failed to upload image. Please check file settings for your server");
    }
    // Ensure that no activity is saved twice. 
    $activity_check_query = "SELECT * FROM current_activities WHERE slug='$activity_slug' LIMIT 1";
    $result = mysqli_query($conn, $activity_check_query);

    if (mysqli_num_rows($result) > 0) { // if activity exists
        array_push($errors, "An activity already exists with that title.");
    }
    // create activity if there are no errors in the form
    if (count($errors) == 0) {
        $query = "INSERT INTO current_activities (staff_id, title, slug, image, body, is_published) VALUES(1, '$title', '$activity_slug', '$featured_image', '$body', $published)";
        if (mysqli_query($conn, $query)) { // if activity created successfully

            $_SESSION['message'] = "Activity created successfully";
            header('location: activities.php');
            exit(0);
        }
    }
}
```

##### Update activity
For updating an activity we listen to an `update_activity` POST request
```
if (isset($_POST['update_activity'])) {
    updateActivity($_POST);
}
```
This is triggered whenever we want to make an update to an activity in `create_activity.php`
```
<form method="post" enctype="multipart/form-data" action="<?php echo BASE_URL . 'admin/create_activity.php'; ?>" >
	<!-- Rest of code removed for brevity -->
	<?php if ($isEditingPost === true): ?> 
		<button type="submit" class="btn" name="update_activity">Update</button>
	<?php else: ?>
		<button type="submit" class="btn" name="create_activity">Save Activity</button>
	<?php endif ?>
</form>
```
Once the update is triggered `updateActivity($request_values)` runs the code to update an activity.

#### Programmes
![programmes](https://user-images.githubusercontent.com/19873411/166968359-67025619-396c-4b00-a2b1-be9402b8b7ce.PNG)

The programmes are listed using the html code below
```
<table class="table table-hover table-striped">
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
```

The PHP code that retrieves the programmes is shown below. Notice we select all courses apart from those whose course_level_id equals 4 because those ones are boot camps and other courses offered by the department.
```
function getAllProgrammes() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM courses WHERE course_level_id != 4";
	$result = mysqli_query($conn, $sql);
	// fetch all courses as an associative array called $courses
	$courses = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $courses;
}
```

