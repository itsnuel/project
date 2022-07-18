<?php  
    require_once('logic/dbconnection.php');
    $sqlview=mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."' ");
    while($fetchmessage=mysqli_fetch_array($sqlview))
    {
        $firstname=$fetchmessage['firstname'];
        $lastname=$fetchmessage['lastname'];
        $email=$fetchmessage['email'];
        $phonenumber=$fetchmessage['phonenumber'];
        $message=$fetchmessage['message'];
    
        

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
                    <div class="card">
                        <div class="card-header  bg-dark  text-center text-white">
                                <a href="contactus.php">
                                    <button type="submit" class="float-start btn btn-primary">Back</button>
                                </a>
                            <h4 class="card-title">DETAILS</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Firstname: <span class="float-end badge bg-primary"><?php echo $firstname ?></span> </li>
                                <li class="list-group-item">Lastname: <span class="float-end badge bg-success"><?php echo $lastname ?></span> </li>
                                <li class="list-group-item">Email: <span class="float-end badge bg-danger"><?php echo $email ?></span> </li>
                                <li class="list-group-item">Phonenumber: <span class="float-end badge bg-warning"><?php echo $phonenumber ?></span> </li>
                                <li class="list-group-item">Message: <span class="float-end badge bg-primary"><?php echo $message ?></span> </li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    <!-- script -->
    <?php require_once('includes/scripts.php') ?>
</body>
</html>