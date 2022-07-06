<?php
    session_start();

    require_once('logic/dbconnection.php');

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
                <div class="card-hearder bg-dark text-white text-center">
                    <span>Top content</span>
                </div>
                <div class="card-body"> </div>
                <div class="card-footer"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>Students</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-group fa-3x"></i></span>
                    <span class="float-end">00</span>
                </div>
                <div class="card-footer"></div>
            </div>
            <div class="col-lg-3">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>Available Courses</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-folder-open fa-3x"></i></span>
                    <span class="float-end">00</span>
                </div>
                <div class="card-footer"></div>
            </div>
            <div class="col-lg-3">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>Campuses</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-graduation-cap fa-3x"></i></span>
                    <span class="float-end">00</span>
                </div>
                <div class="card-footer"></div>
            </div>
            <div class="col-lg-3">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>User</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-user fa-3x"></i></span>
                    <span class="float-end">00</span>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>Student Analysis</span>
                </div>
                <div class="body shadow">
                    <span><i class="fa fa-line-chart fa-4x"></i></span>
                </div>
            </div>
        </div>
        </div>
    </div>
    
    <!-- script -->
    <?php require_once('includes/scripts.php') ?>
</body>
</html>