<?php
    session_start();
    $data='';
    require_once('logic/dbconnection.php');

    $editmessage=mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."' ");
    while($fetchmessage=mysqli_fetch_array($editmessage))
    {
        $firstname=$fetchmessage['firstname'];
        $lastname=$fetchmessage['lastname'];
        $email=$fetchmessage['email'];
        $phonenumber=$fetchmessage['phonenumber'];
        $message=$fetchmessage['message'];
        $id=$fetchmessage['no'];
        
    }

    // updating user records
    require_once('logic/process-edit.php');

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
                                <a href="contactus.php">
                                    <button type="submit" class="float-start btn btn-primary">Back</button>
                                 </a>
                            <h4>Edit</h4>
                            <?php echo $data ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form action="edit-contactus.php?id=<?php echo $id ?>" method="POST">
                    <div class="row">
                            <div class="col-lg-6">
                                <label for="Firstname" class="form-label">Firstname</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Enter your Firstname" value="<?php echo $firstname ?>">
                                
                            </div>
                            <div class="col-lg-6">
                                <label for="lastname" class="form-label">Lastname</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Enter your Lastname" value="<?php echo $lastname ?>">
                            
                            </div>

                            <div class="col-lg-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" required value="<?php echo $email ?>">
                            </div>

                            <div class="col-lg-6">
                                <label for="phonenumber" class="form-label">Phonenumber</label>
                                <input type="text" name="phonenumber" class="form-control" placeholder="+254....." required value="<?php echo $phonenumber ?>">
                            </div>

                            <div class="col-lg-6">
                                <label for="message" class="form-label">Message</label>
                                <input type="text" name="message" class="form-control" placeholder="message" required value="<?php echo $message ?>">
                            </div>

                     </div>

                            <div>
                                <button type="submit" name="update" class="btn btn-primary" >Edit</button>
                            </div>
            </form>
        </div>


    </div>
    
    <!-- script -->
    <?php require_once('includes/scripts.php') ?>
</body>
</html>