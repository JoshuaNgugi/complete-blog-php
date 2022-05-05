# ICS 3114 WEB TECHNOLOGY PROJECT
## Assignement (Website for School of Computing and Information Technology)
Website: [Here](http://oldman.co.ke/)

The following shows the entity relationship diagram used for the above website
![web-erd](https://user-images.githubusercontent.com/19873411/166811014-f35b363c-1033-4822-b260-dbe11ac934db.PNG)

Please note the admin credentials to log into the admin dashboard are indicated in the file uploaded on sodel4.

#### Staff Table

`CREATE TABLE staff (
  id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  first_name varchar(20),
  last_name varchar(20),
  email varchar(30),
  role varchar(20),
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp NULL,
  is_active boolean NOT NULL DEFAULT FALSE
);`

#### Course Level Table

`CREATE TABLE course_level (
  id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  name varchar(20),
  slug varchar(20) UNIQUE,
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp NULL
);`

#### Courses Table

`CREATE TABLE courses (
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
);`

#### Courses Details Table

`CREATE TABLE course_details (
  id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  course_id int(11) UNIQUE,
  course_level_id int(11),
  FOREIGN KEY (course_id) REFERENCES courses(id),
  FOREIGN KEY (course_level_id) REFERENCES course_level(id),
);`

#### Director's Messages Tables

`CREATE TABLE director_messages (
  id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  director_id int(11),
  title VARCHAR(20) NOT NULL,
  message text NOT NULL,
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp NULL,
  is_published boolean NOT NULL DEFAULT FALSE,
  FOREIGN KEY (director_id) REFERENCES staff(id),
);`

#### Current Activities Table

`CREATE TABLE current_activities (
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
);`
