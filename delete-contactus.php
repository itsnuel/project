<?php  
  require_once('logic/dbconnection.php');
  $delete=mysqli_query($conn, "DELETE FROM contactus WHERE no='".$_GET['id']."' ");

  if($delete)
  {
    echo "Deleted Successfully";
    header('location:contactus.php');
  }
  else
  {
    echo "Error Occurred. Please try again!";
  }


?>