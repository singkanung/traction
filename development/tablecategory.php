<?php 
session_start();
 
if (!isset($_SESSION['user_name'])) {
    header("Location: index.php");
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tracking ICT Petrosea | Master Category</title>
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
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>



    <!-- Bootstrap CSS
	============================================ -->
    <link rel="stylesheet" href="a/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="a/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="a/css/owl.carousel.css">
    <link rel="stylesheet" href="a/css/owl.theme.css">
    <link rel="stylesheet" href="a/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="a/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="a/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="a/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="a/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="a/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="a/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="a/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="a/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="a/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="a/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="a/css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="a/css/editor/select2.css">
    <link rel="stylesheet" href="a/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="a/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="a/css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="a/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="a/css/data-table/bootstrap-editable.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="a/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="a/css/responsive.css">
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
                                    <li><a href="tableitem.php">Item</a></li>
                                    <li class="active"><a href="tablecategory.php">Category</a></li>
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
                                <li><a href="tablecategory.php">Master</a></li>
                                <li><span>Category</span></li>
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
            <div class="main-content-inner">
                <div class="row">
                    <!-- Dark table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table Category</h4><br>
                                &nbsp;<a class="btn btn-success mb-xl-3" href="formcategory.php" role="button"><span class="fa fa-plus-square">&ensp;</span>CREATE&nbsp;</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
										                        <option value="">Export Basic</option>
										                        <option value="all">Export All</option>
										                        <option value="selected">Export Selected</option>
									                      </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true"  data-cookie="true"
                                          data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>&emsp;&emsp;
                                                <th data-field="id">No.</th>
                                                <th data-field="name">Category</th>
                                                <th data-field="complete">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            require 'config.php';
                                            $i = 1;
                                            $query = "SELECT * FROM kategori";
                                            $sql = mysqli_query($connect, $query) or die (mysqli_error($connect));
                                            while ($data = mysqli_fetch_array($sql)) { ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $data["nama_kategori"]; ?></td>
                                                <td><a href="updatecategory.php?id=<?php echo $data['id_kategori'];?>" class="text-secondary"><i class="fa fa-edit"></i></a>&emsp;
                                                    <a href="deletecategory.php?id=<?php echo $data['id_kategori'];?>" onclick="return confirm('Delete data category?');" class="text-danger"><i class="ti-trash"></i></a></td>     
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dark table end -->
            </div>
        </div>
        <!-- main content area end -->

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



    <!-- jquery
	============================================ -->
    <script src="a/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="a/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="a/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="a/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="a/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="a/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="a/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="a/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="a/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="a/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="a/js/metisMenu/metisMenu.min.js"></script>
    <script src="a/js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="a/js/data-table/bootstrap-table.js"></script>
    <script src="a/js/data-table/tableExport.js"></script>
    <script src="a/js/data-table/data-table-active.js"></script>
    <script src="a/js/data-table/bootstrap-table-editable.js"></script>
    <script src="a/js/data-table/bootstrap-editable.js"></script>
    <script src="a/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="a/js/data-table/colResizable-1.5.source.js"></script>
    <script src="a/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="a/js/editable/jquery.mockjax.js"></script>
    <script src="a/js/editable/mock-active.js"></script>
    <script src="a/js/editable/select2.js"></script>
    <script src="a/js/editable/moment.min.js"></script>
    <script src="a/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="a/js/editable/bootstrap-editable.js"></script>
    <script src="a/js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="a/js/chart/jquery.peity.min.js"></script>
    <script src="a/js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="a/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="a/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="a/js/main.js"></script>
</body>
</html>
