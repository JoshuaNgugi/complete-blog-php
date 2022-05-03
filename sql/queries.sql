CREATE TABLE `topics` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `name` varchar(255),
  `slug` varchar(255) UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `post_topic` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `post_id` int(11) UNIQUE,
  `topic_id` int(11)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `courses` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `name` varchar(255),
  `slug` varchar(255) UNIQUE
  `description` varchar(255),
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL,
  `user_id` int(11)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `courses` (`name`, `slug`, `description`,`user_id`)
VALUES ('Bachelor in Science Information Technology',  
'bscit', 'Bachelor in Science Information Technology is a beautiful course',1)

CREATE TABLE `staff` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `first_name` varchar(20),
  `last_name` varchar(20),
  `email` varchar(30),
  `role` varchar(20),
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL,
  `is_active` boolean NOT NULL DEFAULT FALSE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `staff` (`first_name`, `last_name`, `email`, `role`)
VALUES ('Jacob', 'Doe', 'jacobdoe@staff.jkuat.ac.ke', 'Director')

CREATE TABLE `course_level` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `name` varchar(20),
  `slug` varchar(20) UNIQUE,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `course_level` (`name`, `slug`)
VALUES ('PHD', 'phd')

CREATE TABLE `course_details` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `course_id` int(11) UNIQUE,
  `course_level_id` int(11),
  FOREIGN KEY (course_id) REFERENCES courses(id),
  FOREIGN KEY (course_level_id) REFERENCES course_level(id),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `course_details` (`course_id`, `course_level_id`)
VALUES (1, 3)

CREATE TABLE `director_messages` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `director_id` int(11),
  `title` VARCHAR(20) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL,
  `is_published` boolean NOT NULL DEFAULT FALSE,
  FOREIGN KEY (director_id) REFERENCES staff(id),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `director_messages` (`director_id`, `message`, `is_published`)
VALUES (1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer molestie, lorem eu eleifend bibendum, augue purus mollis sapien, non rhoncus eros leo in nunc. Donec a nulla vel turpis consectetur tempor ac vel justo. In hac habitasse platea dictumst. Cras nec sollicitudin eros. Nunc eu enim non turpis sagittis rhoncus consectetur id augue. Mauris dignissim neque felis. Phasellus mollis mi a pharetra cursus. Maecenas vulputate augue placerat lacus mattis, nec ornare risus sollicitudin.

Mauris eu pulvinar tellus, eu luctus nisl. Pellentesque suscipit mi eu varius pulvinar. Aenean vulputate, massa eget elementum finibus, ipsum arcu commodo est, ut mattis eros orci ac risus. Suspendisse ornare, massa in feugiat facilisis, eros nisl auctor lacus, laoreet tempus elit dolor eu lorem. Nunc a arcu suscipit, suscipit quam quis, semper augue.

Quisque arcu nulla, convallis nec orci vel, suscipit elementum odio. Curabitur volutpat velit non diam tincidunt sodales. Nullam sapien libero, bibendum nec viverra in, iaculis ut eros.', true)

ALTER TABLE director_messages
ADD COLUMN title VARCHAR(20) AFTER id;

CREATE TABLE `current_activities` (
 `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `staff_id` int(11) DEFAULT NULL,
 `title` varchar(255) NOT NULL,
 `slug` varchar(255) NOT NULL UNIQUE,
 `image` varchar(255) NOT NULL,
 `body` text NOT NULL,
 `is_published` BOOLEAN NOT NULL DEFAULT false,
 `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `updated_at` timestamp NULL,
  FOREIGN KEY (staff_id) REFERENCES staff(id) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1