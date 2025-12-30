<?php
$conn = mysqli_connect("localhost", "root", "", "dashboard_db");

if (!$conn) {
    die("Database connection failed");
}

if (isset($_POST['save_course'])) {
    $course_name = $_POST['course_name'];
    $info        = $_POST['info'];
    $image_url   = $_POST['image_url'];
    $level       = $_POST['level'];
    $hours       = $_POST['hours'];

    mysqli_query($conn, "
        INSERT INTO courses (course_name, info, image_url, level, hours)
        VALUES ('$course_name', '$info', '$image_url', '$level', '$hours')
    ");

    header("Location: courses.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5>Add New Course</h5>
        </div>

        <div class="card-body">
            <form method="POST">

                <input type="text" name="course_name" class="form-control mb-2"
                       placeholder="Course Name" required>

                <textarea name="info" class="form-control mb-2"
                          placeholder="Course Description" required></textarea>

                <input type="text" name="image_url" class="form-control mb-2"
                       placeholder="Image URL" required>

                <input type="text" name="level" class="form-control mb-2"
                       placeholder="Level (Beginner / Intermediate)" required>

                <input type="text" name="hours" class="form-control mb-3"
                       placeholder="Hours (e.g. 10h)" required>

                <button type="submit" name="save_course" class="btn btn-success">
                    Save Course
                </button>

                <a href="courses.php" class="btn btn-secondary">
                    Cancel
                </a>

            </form>
        </div>
    </div>
</div>

</body>
</html>
