<?php
$conn = mysqli_connect("localhost", "root", "", "dashboard_db");
if (!$conn) die("Connection failed");

if (!isset($_GET['id'])) {
    header("Location: courses.php");
    exit();
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM courses WHERE id='$id'");
$data = mysqli_fetch_assoc($result);

/* UPDATE COURSE */
if (isset($_POST['update'])) {
    $course_name = $_POST['course_name'];
    $info = $_POST['info'];
    $image_url = $_POST['image_url'];
    $level = $_POST['level'];
    $hours = $_POST['hours'];

    mysqli_query($conn, "
        UPDATE courses SET
        course_name='$course_name',
        info='$info',
        image_url='$image_url',
        level='$level',
        hours='$hours'
        WHERE id='$id'
    ");

    header("Location: courses.php");
    exit();
}
?>

<!doctype html>
<html>
<head>
    <title>Edit Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">Edit Course</div>
        <div class="card-body">

<form method="POST">
    <input type="text" name="course_name" class="form-control my-1"
           value="<?= $data['course_name']; ?>" required>

    <input type="text" name="info" class="form-control my-1"
           value="<?= $data['info']; ?>" required>

    <input type="text" name="image_url" class="form-control my-1"
           value="<?= $data['image_url']; ?>" required>

    <input type="text" name="level" class="form-control my-1"
           value="<?= $data['level']; ?>" required>

    <input type="text" name="hours" class="form-control my-1"
           value="<?= $data['hours']; ?>" required>

    <button type="submit" name="update" class="btn btn-success mt-2">
        Update Course
    </button>

    <a href="courses.php" class="btn btn-secondary mt-2">Cancel</a>
</form>

        </div>
    </div>
</div>

</body>
</html>
