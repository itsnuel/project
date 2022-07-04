<?php
  $msg='';
  require_once('processregister.php')

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
</head>
<body>

    <div class="card-hearder bg-danger text-white text-center">
                    <span>Zalego| Admin Register</span>
    </div> 
      
    <center><img src="font-awesome/zalego.jpg" alt="zalego logo" height="50" width="50"  class="rounded-circle" ></center>
            
<form action="register.php" method="POST">
          <span><?php echo $msg ?></span>
        <div class="container">
        
            

          <div>
          <label for="username"><b>username</b></label>
          <input type="text" class="form-control" name="username" placeholder="Enter username"required>
          </div>

          <div>
          <label for="email"><b>Email</b></label>
          <input type="text" class="form-control" name="email" placeholder="Enter Email" required>
          </div>

          <div>
          <label for="password"><b>Password</b></label>
          <input type="password" class="form-control" name="password" placeholder="Enter password" required>
          </div>

          <div>
          <label for="cpass"><b>ConfirmPassword</b></label>
          <input type="password" class="form-control" name="pwd" placeholder="Confirm Password" required>
        </div>
<br>

        <div class="clearfix">
          <button type="submit" name="signup" class="btn btn-primary">submit</button>
            
        </div>
        <div class="sign in">
          <p class="text-dark">Have an account? <a href="login.php">Login</a>.</p>
        </div>
      </form>


    <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>