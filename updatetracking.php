<?php

session_start();

if (!isset($_SESSION['user_name'])) {
    header("Location: index.php");
}

require_once('config.php');
 
if(isset($_POST) & !empty($_POST)){
 
    if(isset($_POST['csrf_token'])){
        $msgs[] = "CSRF Token Verification Success";
        if($_SESSION['csrf_token'] === $_POST['csrf_token']){
            $msgs[] = "CSRF Token Validation success";
        }else{
            $csrferrors[] = "CSRF Token Validation Failed";
        }
    }else{
        $csrferrors[] = "CSRF Token Verification Failed";
    }
    
  if(!isset($csrferrors)){  
 
  }else{
      $errors = $csrferrors;
  }
}

require "config.php";
    $id_tracking = mysqli_real_escape_string($connect, $_GET['id']);
    $sql1 = "SELECT * FROM tracking where id_tracking = '$id_tracking'";
    $q1 = mysqli_query($connect, $sql1);
    $data = mysqli_fetch_array($q1);
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>ICT Petrosea KJA | Update Tracking</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="select/select2.min.css">
    <link rel="stylesheet" href="select/select2-bootstrap.min.css">

    <!-- normalize CSS
	============================================ -->
    <link rel="stylesheet" href="data-table/css/normalize.css">

</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- page container area start -->
    <div class="page-container">

        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="https://www.petrosea.com/id/"><img src="images/icon/petrosea-logoo.jpg" alt=""></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <!-- <ul class="collapse">
                                    <li class="active"><a href="halamanadmin.php">Tracking</a></li>
                                </ul> -->
                            </li>
                            <!-- <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-list"></i>
                                    <span>Master</span></a>
                                <ul class="collapse">
                                    <li><a href="tableitem.php">item</a></li>
                                    <li><a href="tablecategory.php">category</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div> -->
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Overview</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="#">Dashboard</a></li>
                                <li><span>Update Tracking</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar2.jpg" alt="">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Administrator <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="change-password.php"><span class="ti-key">&nbsp;</span>Change Password</a>
                                <a class="dropdown-item" href="logout.php"><span class="fa fa-sign-out">&ensp;</span> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Form Update Tracking</h4><br>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No. PR</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pr" id="pr" class="form-control" value="<?php echo $data['pr'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row"><br>
                                        <label class="col-sm-3 col-form-label">Descriptions</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="item" id="item" class="form-control" value="<?php echo $data['item'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No. PO</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="po" id="po" class="form-control" value="<?php echo $data['po'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Estimate Cost</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="cost" id="cost" class="form-control" value="<?php echo (float)$data['cost'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Start Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo $data['tanggal'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Qty</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="qty" id="qty" class="form-control" value="<?php echo $data['qty'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                    <label for="example-datetime-local-input" class="col-sm-3 col-form-label">ETA</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="datetime-local" name="eta" id="eta" value="<?php echo $data['eta'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="posisi" id="posisi" class="form-control" value="<?php echo $data['posisi'] ?>">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        &emsp;&emsp;
                                        <a class="btn btn-primary mb-3" href="halamanadmin.php" role="button"><span class="fa fa-arrow-left">&ensp;</span>Back</a>&ensp;                           
                                        &nbsp;<button class="btn btn-success mb-xl-3" type="submit" name="edit" id="edit"><span class="ti-save">&nbsp;</span>Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <?php
                    if(isset($_POST['edit'])){
                    mysqli_query($connect, "UPDATE tracking SET
                        pr = '$_POST[pr]',
                        po = '$_POST[po]',
                        item = '$_POST[item]',
                        cost = '$_POST[cost]',
                        qty = '$_POST[qty]',
                        tanggal = '$_POST[tanggal]',
                        eta = '$_POST[eta]',
                        posisi = '$_POST[posisi]' WHERE id_tracking=$_GET[id]") or die(mysqli_error($connect));

                    echo "
                        <script>
                            alert('Data updated successfully');
                            document.location.href = 'halamanadmin.php'
                        </script";
                    }
                    ?>

                <script>
		            $(".theSelect").select2();
	            </script>

                <footer>
                    <div class="footer-area">
                        <p>Powered By&nbsp;<a href="https://www.petrosea.com/id/" target="_blank">ICT PETROSEA KJA</a></p>
                    </div>
                </footer>
            </div>

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="select/select2.min.js"></script>
    <script src="select/select2.js"></script>

</body>
</html>