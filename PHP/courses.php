
<?php  
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Courses</title>
  </head>
  <body>
    
<div class="container p-3">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="logo text-danger">Your Logo Name</h2>
            <div class="left-team">
                <a class="text-primary mx-2" href="./index.php">Dashbord</a>
                <a class="text-danger mx-2" href="./courses.php">Courses</a>
            </div>
        </div>
        <div class="card-body">
                <div class="card">
                    <div class="card-header  d-flex justify-content-between align-items-center">
                            <h4 class="text-primary">Courses List</h4>
                            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Add New Course
</button>
                    </div>

                    <!-- Courses List -->
                    <div style="flex-wrap:wrap; padding-top:50px;" class="card-body d-flex justify-content-center align-items-start">
                    
                    <?php  
$conn = mysqli_connect("localhost" , "root" , "" , "dashboard_db");
$select = mysqli_query($conn  , "SELECT * FROM courses");

if(mysqli_num_rows($select) > 0)
{
    foreach($select as $row)
    {
        ?>
<div style="width:320px; margin:10px;  border-radius:10px; overflow:hidden; border:1px solid #44444457;">
                                <div style="width:320px; height:50%; overflow:hidden;" >
                                    <img style="width:320px;" src="<?php echo $row['image_url'] ?>" alt="searching">
                                </div>
                                <div class="content p-2">
                                    <h6  class="p-1 bg-secondary text-white rounded col-3 "><?php echo $row['level'] ?></h6>
                                    <h4><?php echo $row['course_name'] ?></h4>
                                    <p><?php echo $row['info'] ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="p-1 bg-secondary text-white rounded"><?php echo $row['hours'] ?></h6>
                                        <button class="btn btn-danger">Delete</button>
                                        <button class="btn btn-success">Edit</button>
                                    </div>
                                </div>
                        </div>

                    
        <?php
    }

}
else
{
    echo "<h2 class='text-danger text-center'>No Course Found!!</h2>";
}
?>
                    
                    
                </div>
        </div>
    </div>
</div>




<!-- Modal -->
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="" class="form-group">
        <input type="text" placeholder="Enter Course Name" class="form-control my-1">
        <input type="text" placeholder="Enter Course Name" class="form-control my-1">
        <input type="text" placeholder="Enter Course Name" class="form-control my-1">
        <input type="text" placeholder="Enter Course Name" class="form-control my-1">
        <input type="text" placeholder="Enter Course Name" class="form-control my-1">
        <input type="text" placeholder="Enter Course Name" class="form-control my-1">
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>