<?php
    require_once('logic/dbconnection.php');
    session_start();
    
    if(isset($_POST['login']))
    {
        //fetch form data

        $username=$_POST['username'];
        $password=$_POST['password'];
        $newpass=md5($password);

        $sql=mysqli_query($conn,"SELECT * FROM account WHERE username='$username' and password='newpass'");
        $fetch=mysqli_fetch_array($sql);

        if($fetch>0)
        {
            // $_SESSION['login']=$username;
            
            header('location:index.php');
        }
        else
        {
            echo "error";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
    
<div class="card-hearder bg-danger text-white text-center">
                    <span>Zalego Training|Admin Login</span>
    </div>
        
    <center><img src="font-awesome/zalego.jpg" alt="zalego logo" height="50" width="50" class="rounded-circle"></center>
    
<body>
    <form action="index.php" method="POST">
        <div class="container">

            <div>
                <label for="username"><b>username</b></label>
                <input type="text" class="form-control" placeholder="Enter username"required>
            </div>

            <div>
                <label for="psw"><b>Password</b></label>
                <input type="password" class="form-control" placeholder="Enter password" required>
            </div>

        </div>
<br>
        <div class="clearfix">
          <button type="submit" name="login" class="btn btn-primary">submit</button>
            
        </div>

        <div class="sign in">
          <p class="text-dark">Have no account? Sign up <a href="register.php">Here</a>.</p>
        </div>
    </form>

    <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>