<?php
    session_start();

    require_once('logic/dbconnection.php');

    $querystudent=mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['no']."' ");
    while($fetchstudent=mysqli_fetch_array($querystudent))
    {
        $fullname=$fetchstudent['fullname'];
        
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                            <h4>Edit student <?php echo $fullname ?> </h4>
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