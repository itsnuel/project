<?php  
  require_once('logic/dbconnection.php');
  $sqldeletestudent=mysqli_query($conn, "DELETE FROM enrollment WHERE no='".$_GET['id']."' ");

  if($sqldeletestudent)
  {
    echo "User Deleted Successfully";
    header('location:students.php');
  }
  else
  {
    echo "Error Occurred. Please try again!";
  }


?>