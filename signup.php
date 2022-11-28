<?php

include 'config.php';
 
error_reporting(0);
 
session_start();

if (!isset($_SESSION['user_name'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tracking ICT Petrosea | Register</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper-register">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="https://www.petrosea.com/id/">
                                <img src="images/icon/petrosea-logo.jpg" alt="">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="signup-check.php" method="post">
                            <?php if (isset($_GET['error'])) { ?>
     		                    <p class="error"><?php echo $_GET['error']; ?></p>
     	                    <?php } ?>

                            <?php if (isset($_GET['success'])) { ?>
                                <p class="success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>
                                <div class="form-group">
                                    <label>Name</label>
                                    <?php if (isset($_GET['name'])) { ?>
                                        <input class="au-input au-input--full" type="text" name="name" value="<?php echo $_GET['name']; ?>"><br>
                                    <?php }else{ ?>
                                        <input class="au-input au-input--full" type="text" name="name"><br>
                                    <?php }?>
                                </div>

                                <div class="form-group">
                                    <label>Username</label>
                                    <?php if (isset($_GET['username'])) { ?>
                                        <input class="au-input au-input--full" type="text" name="username" value="<?php echo $_GET['username']; ?>"><br>
                                    <?php }else{ ?>
                                        <input class="au-input au-input--full" type="text" name="username"><br>
                                    <?php }?>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" id="password">
                                </div>

                                <div class="form-group">
                                    <label>Confirm-Password</label>
                                    <input class="au-input au-input--full" type="password" name="re_password" id="re_password">
                                </div>

                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">Register</button>

                            </form>
                            <!-- <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="index.php">Sign In</a>
                                </p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>
</html>
