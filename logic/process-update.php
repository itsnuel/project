<?php 
    require_once('logic/dbconnection.php');

    if(isset($_POST['update']))
    {
        // fetch form data
        $fullname=$_POST['fullname'];
        $phonenumber=$_POST['phonenumber'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $course=$_POST['course'];

        // perform the sql query
        $update=mysqli_query($conn, "UPDATE enrollment SET 
        fullname='$fullname',phonenumber='$phonenumber',email='$email',gender='$gender',course='$course' WHERE no='".$_GET['id']."'");

        if($update)
        {
            $message="Updated successfully";
        }
        else
        {
            $message="Error occured while updating user";
        }

    }



?>