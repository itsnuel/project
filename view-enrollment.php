<?php  
    require_once('logic/dbconnection.php');
    $sqlfetchenrolledstudent=mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");
    while($fetchstudent=mysqli_fetch_array($sqlfetchenrolledstudent))
    {
        $fullname=$fetchstudent['fullname'];
        $email=$fetchstudent['email'];
        $phonenumber=$fetchstudent['phonenumber'];
        $gender=$fetchstudent['gender'];
        $course=$fetchstudent['course'];
        

    }


?>







<!DOCTYPE html>
<html lang="en">

        <!-- header -->
    <?php require_once('includes/headers.php') ?>

<body>
        <!-- narbar -->
        <?php require_once('includes/navbar.php') ?>

        <!-- sidebar -->
        <?php require_once('includes/sidebars.php') ?>
        

    <div class="main-content">
         <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header  bg-dark  text-center text-white">
                                <a href="students.php">
                                    <button type="submit" class="float-start btn btn-primary">Back</button>
                                </a>
                            <h4 class="card-title">Personal information</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Fullname: <span class="float-end badge bg-primary"><?php echo $fullname ?></span> </li>
                                <li class="list-group-item">Email: <span class="float-end badge bg-success"><?php echo $email ?></span> </li>
                                <li class="list-group-item">Phonenumber: <span class="float-end badge bg-danger"><?php echo $phonenumber ?></span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header  bg-dark  text-center text-white">
                            <h4 class="card-title">Personal information</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Gender <span class="float-end badge bg-primary"><?php echo $gender ?></span> </li>
                                <li class="list-group-item">Course <span class="float-end badge bg-success"><?php echo $course ?></span> </li>
                                <li class="list-group-item">Enrolled On <span class="float-end badge bg-danger"><?php ?></span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- script -->
    <?php require_once('includes/scripts.php') ?>
</body>
</html>