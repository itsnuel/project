<?php
    $server='localhost';
    $username='root';
    $password='';
    $database='zalego';
    
    $conn=mysqli_connect($server,$username,$password,$database);
    $sql =mysqli_query($conn, "SELECT * FROM enrollment");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>

    <div class="header">
        <img src="font-awesome/zalego.jpg" alt="zalego" height="50" width="50" class="rounded-circle">

        <a href="#" class="navbar-trigger"><span></span></a>
    </div>

    <div class="sidebar">
        <nav>
            <ul>
                <li>
                    <a href="">
                        <span><i class="fa fa-group"></i></span>
                        <span>Students</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class="fa fa-folder-open"></i></span>
                        <span>Courses</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class="fa fa-graduation-cap"></i></span>
                        <span>Campus</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

    <div class="main-content">

    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>Students Table</span>
                </div>
                <div class="card-body"> </div>
                <div class="card-footer"></div>
            </div>
        </div>

            <table class="table table-bordered table-stripped table-hover table-responsive">
                <thead>
                    <tr>
                    <th>id</th>
                    <th>Fullname</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Gender</th>
                    <th>Enrolled on</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   <?php while($fetchEnrollmentRecord= mysqli_fetch_array($sql)) {?> 
                    <tr>
                        <td><?php echo $fetchEnrollmentRecord['no'] ?></td>
                        <td><?php echo $fetchEnrollmentRecord['fullname'] ?></td>
                        <td><?php echo $fetchEnrollmentRecord['phonenumber'] ?></td>
                        <td><?php echo $fetchEnrollmentRecord['email'] ?></td>
                        <td><?php echo $fetchEnrollmentRecord['course'] ?></td>
                        <td><?php echo $fetchEnrollmentRecord['gender'] ?></td>
                        <td>
                            
                        </td>
                        <td>
                             <a href="#" class="btn btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>

                            <a href="#" class="btn btn-success">
                                <i class="fa fa-eye"></i>
                            </a>

                            <a href="#" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                    <?php }?>
                   
                </tbody>

            </table>

    </div>
    
    

    <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>