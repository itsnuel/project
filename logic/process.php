
<?php  

require_once('logic/dbconnection.php');

    if(isset($_POST['update']))
    {
        // fetch form data
        $email=$_POST['email'];
        $created_at=$_POST['created_at'];


        // perform the sql query
        $update=mysqli_query($conn, "UPDATE subscribers SET 
        email='$email',created_at='$created_at' WHERE no='".$_GET['id']."'");

        if($update)
        {
            $messages="Editedsuccessfully";
        }
        else
        {
            $messages="Error occured while editing user";
        }

    }




?>