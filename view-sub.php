<?php  
    require_once('logic/dbconnection.php');
    $subdata=mysqli_query($conn, "SELECT * FROM subscribers WHERE no='".$_GET['id']."' ");
    while($fetchdata=mysqli_fetch_array($subdata))
    {
        $email=$fetchdata['email'];
        $created_at=$fetchdata['created_at'];
        

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
                        <div class="card-header  bg-dark  text-center text-white">
                                 <a href="subscribers.php">
                                    <button type="submit" class="float-start btn btn-primary">Back</button>
                                 </a>
                            <h4 class="card-title">User info.</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Email <span class="float-end badge bg-primary"><?php echo $email ?></span> </li>
                                <li class="list-group-item">Created_at <span class="float-end badge bg-success"><?php echo $created_at ?></span> </li>
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