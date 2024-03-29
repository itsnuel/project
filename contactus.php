<?php
    require_once('logic/dbconnection.php');

    $querymessage=mysqli_query($conn, "SELECT * FROM contactus");


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
                    <span>Contact Us</span>
                </div>

                <div class="card-body"> </div>
                <div class="card-footer"></div>
            </div>
        </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-stripped table-hover table-responsive" style="font-size:12px;">
                    <thead>
                        <tr>
                        <th>id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Phonenumber</th>
                        <th>Message</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $count=1;
                    while($fetchmessage= mysqli_fetch_array($querymessage)) {?> 
                        <tr>
                            <td><?php echo $count ?></td>
                            <td><?php echo $fetchmessage['firstname'] ?></td>
                            <td><?php echo $fetchmessage['lastname'] ?></td>
                            <td><?php echo $fetchmessage['email'] ?></td>
                            <td><?php echo $fetchmessage['phonenumber'] ?></td>
                            <td><?php echo $fetchmessage['message'] ?></td>
                            <td>
                                <a href="edit-contactus.php?id=<?php echo $fetchmessage['no'] ?>" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <a href="view-contactus.php?id=<?php echo $fetchmessage['no'] ?>" class="btn btn-success">
                                    <i class="fa fa-eye"></i>
                                </a>

                                <a href="delete-contactus.php?id=<?php echo $fetchmessage['no'] ?>" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <?php $count++; }?>
                    
                    </tbody>

                 </table>
                </div>
            </div>


    </div>
    
     <!-- script -->
     <?php require_once('includes/scripts.php') ?>
</body>
</html>