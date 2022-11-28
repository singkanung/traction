<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location: index.php");
}



require 'config.php';
if(isset($_POST['tambah'])){
    mysqli_query($connect, "INSERT INTO item SET
    nama_item = '$_POST[nama_item]',
    deskripsi_item = '$_POST[deskripsi_item]',
    kategori_id = '$_POST[id_kategori]'") or die(mysqli_error($connect));

        echo "
            <script>
              alert('Successfully');
              document.location.href = 'tableitem.php';
            </script>";
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tracking ICT Petrosea | Master Item</title>
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
    <link rel="stylesheet" href="b/select2.min.css">
    <link rel="stylesheet" href="b/select2-bootstrap.min.css">

</head>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="#"><img src="images/icon/petrosea-logoo.jpg" alt=""></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li><a href="halamanadmin.php">Tracking</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-list"></i>
                                    <span>Master</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="tableitem.php">Item</a></li>
                                    <li><a href="tablecategory.php">Category</a></li>
                                    <!-- <li><a href="datatable.html">datatable</a></li> -->
                                </ul>
                            </li>
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
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
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
                                <li><a href="#">Master</a></li>
                                <li><a href="tableitem.php">Item</a></li>
                                <li><span>Create Item</span></li>
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

                        <h4 class="card-title">Form Create Item</h4><br>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Item Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama_item" id="nama_item" class="form-control" required>     
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Descriptions</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="deskripsi_item" id="deskripsi_item" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Category</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100" name="id_kategori">
                                                <option>- Select -</option>
                                                    <?php
                                                    include "config.php";
                                                    $sql = mysqli_query($connect, "SELECT * FROM kategori") or die (mysqli_error($connect));
                                                    while($data = mysqli_fetch_array($sql)){
                                                        echo "<option value=$data[id_kategori]> $data[nama_kategori] </option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            &emsp;&emsp;
                                            <a class="btn btn-primary mb-3" href="tableitem.php" role="button"><span class="fa fa-arrow-left">&ensp;</span>Back</a>&ensp;                           
                                            &nbsp;<button class="btn btn-success mb-xl-3" type="submit" name="tambah" id="tambah"><span class="ti-save">&nbsp;</span>Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

	                    <script>
		                    $(".theSelect").select2();
	                    </script>

                        <footer>
                            <div class="footer-area">
                                <p>Powered By&ensp;ICT PETROSEA KJA</p>
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

    <script src="b/select2.min.js"></script>
    <script src="b/select2.js"></script>
  <!-- End custom js for this page-->

</body>
</html>