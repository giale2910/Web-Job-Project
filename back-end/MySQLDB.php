<?php

function sql_execute(PDO $conn, string $sql, string $msg = ""){
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    } catch (PDOException $e) {
        die("Error executing query: " . $e->getMessage() . $msg);
    }
}

function create_database(PDO $conn, $database, string $version) {
    extract($database);

    /* 1. $databasename [drop]-creation and use */
    sql_execute($conn, "DROP DATABASE IF EXISTS $databasename");
    sql_execute($conn, "CREATE DATABASE $databasename");

    $conn = new PDO("mysql:host=$host;dbname=$databasename", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* 2. create and insert version table */
    $sql = "CREATE TABLE Version(`id` INT AUTO_INCREMENT PRIMARY KEY, `version` VARCHAR(10) NOT NULL)";
    sql_execute($conn, $sql);

    $sql = "INSERT INTO Version(version) VALUES ('$version')";
    sql_execute($conn, $sql);


    /* 3. Create tables (edit this for new version) */

    // I - "User"
    $sql = "
    CREATE TABLE User (
    `id` INTEGER AUTO_INCREMENT PRIMARY KEY,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(60) NOT NULL,
    `role` VARCHAR(15) NOT NULL,
    `first_name` VARCHAR(50),
    `last_name` VARCHAR(50),
    `phone` VARCHAR(12),
    `profile_link` VARCHAR(255) DEFAULT '#',
    `web_link` VARCHAR(255) DEFAULT '#',
    `address` VARCHAR(255),
    `about` TEXT,
    `status` ENUM('Active', 'Deactive') DEFAULT 'Active',
    `image` VARCHAR(100) 
    )
    ";
    sql_execute($conn, $sql, " - 'User' table create");

    // II - "Job"
    $sqls = array(
        "CREATE TABLE Location (
            `id` INTEGER AUTO_INCREMENT PRIMARY KEY,
            `lat` DECIMAL(10,7),
            `lng` DECIMAL(10,7),
            `name` VARCHAR(255),
            `city` VARCHAR(100)
        )",
        "CREATE TABLE Category (
            `id` INTEGER AUTO_INCREMENT PRIMARY KEY,
            `category` VARCHAR(30) NOT NULL
        )",
        "CREATE TABLE Job (
            `id` INTEGER AUTO_INCREMENT PRIMARY KEY,
            `title` VARCHAR(40) NOT NULL,
            `company` VARCHAR(40) ,
            `manager_id` INTEGER NOT NULL,
            `location_id` INTEGER,
            `category_id` INTEGER NOT NULL,
            `date_posted` DATE NOT NULL,
            `deadline` DATE NOT NULL,
            `salary` BIGINT,
            `job_type` ENUM('Full time', 'Part time', 'Temporary', 'To be discussed'),
            `gender` ENUM('Male', 'Female', 'Others', 'Any'),
            `qualification` VARCHAR(30),
            `min_experience` INTEGER,
            `contact_email` VARCHAR(50),
            `description` TEXT,
            CONSTRAINT `FK_manager` FOREIGN KEY (`manager_id`) REFERENCES `User`(`id`) ON DELETE CASCADE,
            CONSTRAINT `FK_location` FOREIGN KEY (`location_id`) REFERENCES `Location`(`id`) ON DELETE SET NULL,
            CONSTRAINT `FK_category` FOREIGN KEY (`category_id`) REFERENCES `Category`(`id`) ON DELETE CASCADE
        )",
        "CREATE TABLE JobExperience (
            `id` INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
            `job_id` INTEGER NOT NULL,
            `experience_text` TEXT,
            CONSTRAINT `FK_JobE` FOREIGN KEY(`job_id`) REFERENCES `Job`(`id`) ON DELETE CASCADE
        )    
        ",
        "CREATE TABLE JobResponsibility (
            `id` INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
            `job_id` INTEGER NOT NULL,
            `responsibility_text` TEXT,
            CONSTRAINT `FK_JobR` FOREIGN KEY(`job_id`) REFERENCES `Job`(`id`) ON DELETE CASCADE
        )",
        "CREATE TABLE FavoriteJob (
            `job_id` INTEGER NOT NULL,
            `user_id` INTEGER NOT NULL,
            CONSTRAINT `PK_JobUser` PRIMARY KEY(`job_id`, `user_id`),
            CONSTRAINT `FK_FavJob` FOREIGN KEY(`job_id`) REFERENCES `Job`(`id`) ON DELETE CASCADE,
            CONSTRAINT `FK_FavCus` FOREIGN KEY(`user_id`) REFERENCES `User`(`id`) ON DELETE CASCADE
        )",
        "CREATE TABLE ApplyJob (
            `job_id` INTEGER NOT NULL,
            `user_id` INTEGER NOT NULL,
            CONSTRAINT `PK_JobUser` PRIMARY KEY(`job_id`, `user_id`),
            CONSTRAINT `FK_job` FOREIGN KEY (`job_id`) REFERENCES `Job`(`id`) ON DELETE CASCADE,
            CONSTRAINT `FK_user` FOREIGN KEY (`user_id`) REFERENCES `User`(`id`) ON DELETE CASCADE
           
        )",
    );

    foreach ($sqls as $sql) {
        sql_execute($conn, $sql);
    }

    /* 4. Insert default records into table */
    function insert_user($conn, $values, $role) {
        $user_querized = function ($record, $role){
            extract($record);
            $pw_hash = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
            return "('$email','$pw_hash','$role','$first_name','$last_name','$profile_link','$phone','$address','$image')";
        };

        $query = implode(",", array_map($user_querized, $values, array_fill(0, count($values), $role)));
        $sql = "INSERT INTO User(email,password,role,first_name,last_name,profile_link,phone,address,image) VALUES " . $query;
        sql_execute($conn, $sql, " - $role insert");
    }
    insert_user($conn, $admins, "admin");
    insert_user($conn, $managers, "manager");
    insert_user($conn, $customers, "customer");

    $sqls = array(
        "INSERT INTO Location(id, lat, lng, name, city) VALUES
        (1, 10.8144067, 106.7106083, 'Ben xe Mien Dong', 'Ho Chi Minh City'),
        (2, 10.7733743, 106.6584306, 'Truong Dai hoc Bach khoa Tp. HCM', 'Ho Chi Minh City'),
        (3, 10.3551611, 107.0820357, '30Shine Vung Tau', 'Vung tau'),
        (4, 10.3551611, 107.0820357, 'Khu cong nghe cao', 'Ho Chi Minh City')
        ",
        "INSERT INTO Category(id, category) VALUES
        (1, 'Engineering / Technology'),
        (2, 'Accounting / Finance'),
        (3, 'Health Care'),
        (4, 'Arts'),
        (5, 'Industrial Labour'),
        (6, 'Servicing'),
        (7, 'Education')
        ",
        "INSERT INTO Job(id, title, company, manager_id, location_id, category_id, date_posted, deadline, salary, job_type, gender, qualification, min_experience, contact_email, description) VALUES 
        (1, 'A.I Replacement Lecturer', 'HCM University of Technology', 10, 2, 1, '2021-08-18', '2022-01-01', 350, 'Full time', 'Any', 'Kindergarten', -1, 'oisp@hcmut.edu.vn', 'Please replace the current A.I. lecturer ASAP - this is a call for help.'),
        (2, 'Hair dresser', '30Shine', 12, 3, 6, '2021-09-11', '2021-11-11', 160, 'Part time', 'Any', 'High school', 2, 'vng@yahoo.com', 'Cut your hair and your self confidence'),
        (3, 'Front-end Developer ', 'VNG', 6, 3, 1, '2021-09-11', '2021-11-11', 200, 'Full time', 'Any', 'High school', 2, 'vng@yahoo.com', 'We need you !!! Join us now'),
        (4, 'Dai Nam C.E.O', 'Dai Nam', 3, 4, 7, '2021-09-11', '2021-11-11', 320, 'Part time', 'Any', 'High school', 2, 'google@yahoo.com', 'Cut your hair and your self confidence'),
        (5, 'Back-end Developer ', 'VNG', 8, 3, 1, '2021-09-11', '2021-11-11', 600, 'Part time', 'Any', 'High school', 2, 'vng@yahoo.com', 'We need you !!! Join us now'),
        (6, 'Restaurant Manager', 'KFC', 11, 3, 6, '2021-09-11', '2021-11-11', 160, 'Part time', 'Any', 'High school', 2, 'vng@yahoo.com', 'Cut your hair and your self confidence'),
        (7, 'Software Tester', 'Google', 7, 4, 1, '2021-09-11', '2021-11-11', 200, 'Part time', 'Any', 'High school', 2, 'google@yahoo.com', 'Cut your hair and your self confidence'),
        (8, 'Business Analysis', 'Google', 6, 4, 1, '2021-09-11', '2021-11-11', 400, 'Part time', 'Any', 'High school', 2, 'google@yahoo.com', 'Cut your hair and your self confidence'),
        (9, 'UX/UI Design', 'Google', 5, 4, 1, '2021-09-11', '2021-11-11', 300, 'Part time', 'Any', 'High school', 2, 'google@yahoo.com', 'Cut your hair and your self confidence'),
        (10, 'Dentist', 'Minh Khai Clinic', 3, 4, 3, '2021-09-11', '2021-11-11', 160, 'Part time', 'Any', 'High school', 2, 'abc@yahoo.com', 'Cut your hair and your self confidence'),
        (11, 'Security', 'Google', 9, 4, 1, '2021-09-11', '2021-11-11', 420, 'Part time', 'Any', 'High school', 2, 'google@yahoo.com', 'Cut your hair and your self confidence'),
        (12, 'English Teacher', 'Yola', 13, 2, 7, '2021-09-11', '2021-11-11', 160, 'Part time', 'Any', 'High school', 2, 'google@yahoo.com', 'Cut your hair and your self confidence'),
        (13, 'Project Manager', 'Google', 7, 4, 1, '2021-09-11', '2021-11-11', 500, 'Part time', 'Any', 'High school', 2, 'google@yahoo.com', 'Cut your hair and your self confidence'),
        (14, 'AI. Researcher', 'Google', 9, 4, 1, '2021-09-11', '2021-11-11', 350, 'Part time', 'Any', 'High school', 2, 'google@yahoo.com', 'Cut your hair and your self confidence')
        
        ",
        "INSERT INTO JobExperience(job_id, experience_text) VALUES
        (1, 'Able to develop an e-learning and exam website without bugs.'),
        (1, 'Expertise in human commmunication and punctuality.'),
        (1, 'Competent in using GMail.'),
        (2, 'M.B.S / M.B.A under National University with CA course complete.'),
        (2, '3 or more years of professional design experience.'),
        (2, 'Excellent communication skills, most notably a demonstrated ability to solicit and address creative and design feedback.'),
        (2, 'Masters of library science any Green University.'),
        (2, 'BA/BS degree in a technical field or equivalent practical experience.'),
        (2, 'Ability to work independently and to carry out assignments to completion within parameters of instructions given, prescribed routines, and standard accepted practices.')
        ",
        "INSERT INTO JobResponsibility(job_id, responsibility_text) VALUES
        (1, 'Teach the subject.'),
        (1, 'Hand out assignment appropriately.'),
        (1, 'Actually mark the assignment.'),
        (1, 'Actually mark the students at all.'),
        (2, 'Explore and design dynamic and compelling consumer experiences.'),
        (2, 'Have sound knowledge of commercial activities.'),
        (2, 'Build next-generation web applications with a focus on the client side.'),
        (2, 'The applicants should have experience in the following areas.')
        ",
        "INSERT INTO FavoriteJob(job_id, user_id) VALUES
        (1, 3),
        (2, 2),
        (2, 3)
        "
    );
    foreach ($sqls as $sql) {
        sql_execute($conn, $sql);
    }
    debugAlert('Database updated successfully!');
    return $conn;

}

/* Get configuration detail from config/database.php */
global $database;
extract($database);

try {
    $conn = new PDO("mysql:host=$host", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

/* Check if database already exists */
$reset = false;
$stmt = sql_execute($conn, "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME='$databasename'");
if (isset($stmt->fetchAll()[0])) {
    /* Version check */
    $conn = new PDO("mysql:host=$host;dbname=$databasename", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = sql_execute($conn, "SELECT version FROM Version");
    $current_version = $stmt->fetch()[0];
    if (strcmp($version, $current_version) > 0) $reset = true;
}
else $reset = true;

if ($reset) $conn = create_database($conn, $database, $version);

$conn = null;

return 1;

?>