<?php
  require_once('logic/dbconnection.php');
  
    $sqlsub=mysqli_query($conn, "SELECT * FROM subscribers");
    
?>

<!DOCTYPE html>
<html lang="en">

    <!-- header -->
    <?php require_once('includes/headers.php') ?>

<body>

        <!-- navbar -->
        <?php require_once('includes/navbar.php') ?>

        <!-- sidebar -->
        <?php require_once('includes/sidebars.php') ?>

    <div class="main-content">

    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-hearder bg-dark text-white text-center">
                    <a href="index.php">
                        <button type="button" class="float-start btn btn-primary">Back</button>
                    </a>
                <h4>Subscribers</h4>
                </div>

                <div class="card-body"> </div>
                <div class="card-footer"></div>
            </div>
            
        </div>

            <table class="table table-bordered table-stripped table-hover table-responsive" style="font-size:12px;">
                <thead>
                    <tr>
                    <th>id</th>
                    <th>Email</th>
                    <th>created_at</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                        $count=1; 
                   while($fetchRecord= mysqli_fetch_array($sqlsub)) {?> 
                    <tr>
                        <td><?php echo $count ?></td>
                        <td><?php echo $fetchRecord['email'] ?></td>
                        <td><?php echo $fetchRecord['created_at'] ?></td>
                        <td>
                             <a href="edit-sub.php?id=<?php echo $fetchRecord['no'] ?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="view-sub.php?id=<?php echo $fetchRecord['no'] ?>" class="btn btn-success">
                                <i class="fa fa-eye"></i>
                            </a>

                            <a href="delete-sub.php?id=<?php echo $fetchRecord['no'] ?>" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                    <?php $count++; }?>
                   
                </tbody>

            </table>
            
    </div>
</div>
    
     <!-- script -->
     <?php require_once('includes/scripts.php') ?>
     <?php require_once('addrecord.php') ?>
    
</body>
</html>