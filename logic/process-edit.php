<?php 
    require_once('logic/dbconnection.php');

    if(isset($_POST['update']))
    {
        // fetch form data
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $phonenumber=$_POST['phonenumber'];
        $message=$_POST['message'];

        // perform the sql query
        $edit=mysqli_query($conn, "UPDATE contactus SET 
        firstname='$firstname',lastname='$lastname',email='$email',phonenumber='$phonenumber',message='$message' WHERE no='".$_GET['id']."'");

        if($edit)
        {
            $data="Editedsuccessfully";
        }
        else
        {
            $data="Error occured while editing user";
        }

    }