<?php 
require_once('logic/dbconnection.php');


if(isset($_POST['submit']))
{
    // fetch form data
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    // submit form data

    $data=mysqli_query($conn, "INSERT INTO 
    enrollment(fullname,phonenumber,email,gender,course)VALUES('$fullname','$phonenumber','$email',' $gender','$course')"); 

}






?>


<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/header.php') ?>
<body>

<div class="main-content">
    <div class="container-fluid">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="students.php" method="POST">

                        <div class="row">
                                <div class="col-lg-6">
                                    <label for="Fullname" class="form-label">Fullname</label>
                                    <input type="text" name="fullname" class="form-control" placeholder="Enter your Fullname">
                                    
                                </div>
                                <div class="col-lg-6">
                                    <label for="phonenumber" class="form-label">Phonenumber</label>
                                    <input type="text" name="phonenumber" class="form-control" placeholder="+245.....">
                                
                                </div>

                                <div class="col-lg-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                                </div>

                                <div class="col-lg-6">
                                    <label for="gender" class="form-label">What's your gender?</label>
                                    <br>
                                    <select name="gender" class="form-control name="gender" id="gender">
                                        <option value="">--Select your gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <label for="course" class="form-label">What's your preferred course?</label>
                                    <br>
                                    <select name="course" class="form-control id="course">
                                        <option value="">--Select your course--</option>
                                        <option value="cyber">cyber</option>
                                        <option value="android">android</option>
                                    </select>

                                </div>
                        </div>
                            <div class="modal-footer">
                                <button type="submit"  name="submit" class="btn btn-primary">Register</button>
                            </div>
                    </form>
                </div>

                </div>
            </div>
            </div>
    </div>
</div>
            <?php require_once('includes/scripts.php') ?>
</body>
</html>