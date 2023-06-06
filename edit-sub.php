<?php
    session_start();
    $message='';
    require_once('logic/dbconnection.php');
    


    $querysubscribers=mysqli_query($conn, "SELECT * FROM subscribers WHERE no='".$_GET['id']."' ");
    while($subscribe=mysqli_fetch_array($querysubscribers))
    {

        $email=$subscribe['email'];
        $created_at=$subscribe['created_at'];
        $id=$subscribe['no'];
        
    }

    // updating user records
    require_once('logic/process.php');

?>




<!DOCTYPE html>
<html lang="en">

        <!-- header -->
    <?php require_once('includes/headers.php') ?>

<body>
        <!-- narbar -->
        <?php require_once('includes/navbar.php') ?>

        <!-- sidebar -->
        <?php require_once('includes/sidebars.php') ?>
        

    <div class="main-content">

         <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                                <a href="subscribers.php">
                                    <button type="submit" class="float-start btn btn-primary">Back</button>
                                 </a>
                            <h4 class="card-title">Edit user</h4>
                            <?php echo $message ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form action="edit-sub.php?id=<?php echo $id ?>" method="POST">
                    <div class="row">
                            <div class="col-lg-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" required value="<?php echo $email ?>">
                            </div>

                            <div class="col-lg-6">
                                <label for="created_at" class="form-label">Created_at</label>
                                <input type="date" name="created_at" class="form-control" required value="<?php echo $created_at ?>">
                            </div>

                            <div>
                                <button type="submit" name="update" class="btn btn-primary" >Update</button>
                            </div>
            </form>
        </div>


    </div>
    
    <!-- script -->
    <?php require_once('includes/scripts.php') ?>
</body>
</html>