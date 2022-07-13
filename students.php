<?php
  require_once('logic/dbconnection.php');
  
    $sql =mysqli_query($conn, "SELECT * FROM enrollment");
?>

<!DOCTYPE html>
<html lang="en">

    <!-- header -->
    <?php require_once('includes/headers.php') ?>

<body>

        <!-- navbar -->
        <?php require_once('includes/navbar.php') ?>

        <!-- sidebar -->
        <?php require_once('includes/sidebars.php') ?>

    <div class="main-content">

    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-hearder bg-dark text-white text-center">
                    <a href="index.php">
                        <button type="submit" class="float-start btn btn-primary" style="font-size:12px;">Back</button>
                    </a>
                    <span>Students Table</span>
                </div>

                <div class="card-body"> </div>
                <div class="card-footer"></div>
            </div>
        </div>

            <table class="table table-bordered table-stripped table-hover table-responsive" style="font-size:12px;">
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
                             <a href="edit-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>

                            <a href="view-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-success">
                                <i class="fa fa-eye"></i>
                            </a>

                            <a href="delete-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                    <?php }?>
                   
                </tbody>

            </table>

    </div>
    
     <!-- script -->
     <?php require_once('includes/scripts.php') ?>
</body>
</html>