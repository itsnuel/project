<?php
    require_once('logic/dbconnection.php');

    if(isset($_POST['signup']))
    {
       $username=$_POST['username'];
       $email=$_POST['email'];
       $password=$_POST['password'];
       $cpass=$_POST['pwd'];

       $passhash=md5($password);

       $sqlusername=mysqli_query($conn,"SELECT * FROM account
       WHERE username='$username'");
       $checkusername=mysqli_num_rows($sqlusername);

//email

       $sqlemail=mysqli_query($conn,"SELECT * FROM account
       WHERE email='$email'");
       $checkemail=mysqli_num_rows($sqlemail);

       if($checkusername !=0){
        $msg="username already exist";
       }
       elseif($checkemail !=0){
        $msg="Email already in use. please try another email address";
       }
       elseif($password !=$cpass){
        $msg="Passwords do not match";
       }
       else
       {
        $sql=mysqli_query($conn, "INSERT INTO account(username,email,password)
        VALUES('$username','$email','$passhash')");

        if($sql)
        {
            $msg='submitted';
        }
        else
        {
            $msg='Error';
        }
       }
    }
?>