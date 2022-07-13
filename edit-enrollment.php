<?php
    session_start();
    $message='';
    require_once('logic/dbconnection.php');

    $querystudent=mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");
    while($fetchstudent=mysqli_fetch_array($querystudent))
    {
        $fullname=$fetchstudent['fullname'];
        $phonenumber=$fetchstudent['phonenumber'];
        $email=$fetchstudent['email'];
        $gender=$fetchstudent['gender'];
        $course=$fetchstudent['course'];
        $id=$fetchstudent['no'];
        
    }

    // updating user records
    require_once('logic/process-update.php');

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
                                <a href="students.php">
                                    <button type="submit" class="float-start btn btn-primary">Back</button>
                                 </a>
                            <h4>Edit student</h4>
                            <?php echo $message ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST">
                    <div class="row">
                            <div class="col-lg-6">
                                <label for="Fullname" class="form-label">Fullname</label>
                                <input type="text" name="fullname" class="form-control" placeholder="Enter your Fullname" value="<?php echo $fullname ?>">
                                
                            </div>
                            <div class="col-lg-6">
                                <label for="phonenumber" class="form-label">Phonenumber</label>
                                <input type="text" name="phonenumber" class="form-control" placeholder="+245....." value="<?php echo $phonenumber ?>">
                            
                            </div>

                            <div class="col-lg-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" required value="<?php echo $email ?>">
                            </div>

                            <div class=" mb-3 col-lg-6">
                                <label for="gender" class="form-lable">What's your gender?</label>
                                <br>
                                <select name="gender" class="form-control"  id="gender">
                                    <option value=""><?php echo $gender ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            
                            </div>

                            <div class=" mb-3 col-lg-6">
                            <label for="course" class="form-lable">What's your preferred course?</label>
                                <br>
                                <select name="course" class="form-control" id="course">
                                    <option value=""><?php echo $course ?></option>
                                    <option value="cyber">cyber</option>
                                    <option value="android">android</option>
                                </select>
                            </div>
                     </div>

                            <div>
                                <button type="submit" name="update" class="btn btn-primary" >Update</button>
                            </div>
            </form>
        </div>


    </div>
    
    <!-- script -->
    <?php require_once('includes/scripts.php') ?>
</body>
</html>