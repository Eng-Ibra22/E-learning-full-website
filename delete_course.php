<?php
$conn = mysqli_connect("localhost", "root", "", "dashboard_db");

if (!$conn) {
    die("Connection failed");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = mysqli_query($conn, "DELETE FROM courses WHERE id = '$id'");

    if ($delete) {
        header("Location: courses.php");
        exit();
    } else {
        echo "Delete failed!";
    }
} else {
    echo "Invalid Request";
}
?>
