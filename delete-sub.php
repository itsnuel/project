<?php  
  require_once('logic/dbconnection.php');
  $sqldelete=mysqli_query($conn, "DELETE FROM subscribers WHERE no='".$_GET['id']."' ");

  if($sqldelete)
  {
    echo "User Deleted Successfully";
    header('location:delete-sub.php');
  }
  else
  {
    echo "Error Occurred. Please try again!";
  }


?>