<?php
if(!isset($_SESSION))
{
session_start();
}
require ('sConn.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>KB-Dashboard</title>
        <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
        <link href="dist/css/style.min.css" rel="stylesheet">
        <style>
        .navbar-brand {
        color: #555;
        font-size: 20px;
        font-family: 'Raleway', sans-serif;
        text-transform: uppercase;
        font-size: 26px;
        }
        .navbar-brand b {
        font-weight: bold;
        color: orange;
        font-size: 20px;
        }
        .btn{
        margin-left: 45%;
        }
        </style>
    </head>
    <body>
        <div id="main-wrapper">
            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin5">
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        
                        <a class="navbar-brand" href="index2.php">
                            <b class="logo-icon p-l-10">
                            </b>
                            <span class="logo-text">
                                <a class="navbar-brand" href="#">Keystone<b>Bank</b></a>
                            </span>
                        </a>
                        
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                    </div>
                    
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                        
                        <ul class="navbar-nav float-left mr-auto">
                            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                            
                            <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                                <?php
                                echo "Welcome, ".$_SESSION['email'];
                                ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="transactions.php"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="dUpdate"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="cDashboard" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                 <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="cDashboard.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="transactions.php" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Transactions</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="transfers.php" aria-expanded="false"><i class="fas fa-paper-plane"></i><span class="hide-menu">Transfer</span></a></li>
                        <li class="sidebar-item"><a  class="sidebar-link waves-effect waves-dark sidebar-link" href="dUpdate.php" aria-expanded="false"><i class="mdi mdi-account-edit"></i><span class="hide-menu"> Edit Account Details </span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">My Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="cDashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                <div class="row"><center>
                    <div class="col-md-11">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <!-- <h4 class="card-title">Dashboard 2</h4> -->
                                        <h5 class="card-subtitle">Account Details</h5>
                                    </div>
                                </div>
                                <div class="row"><center>
                                    <!-- column -->
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-12 m-t-10">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-user m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5">
                                                    <?php
                                                    $email = $_SESSION['email'];
                                                    $fname =  mysqli_query($con, "select * from class110618 where email = '$email'");
                                                    $fname2 = mysqli_fetch_array($fname);
                                                    $dfname = $fname2['first_name'];
                                                    $dlname = $fname2['last_name'];
                                                    echo $dfname. ' ' . $dlname;
                                                    ?>
                                                    </h5>
                                                    <small class="font-light">Account Name</small>
                                                </div>
                                            </div>
                                            <div class="col-12 m-t-10">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fas fa-at m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5"><?php echo $_SESSION['email']; ?></h5>
                                                    <small class="font-light">User Email</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-10">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fas fa-address-card m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5">
                                                    <?php
                                                    $email = $_SESSION['email'];
                                                    $pno =  mysqli_query($con, "select phone_number from class110618 where email = '$email'");
                                                    $pno2 = mysqli_fetch_array($pno);
                                                    $dpno = $pno2['phone_number'];
                                                    echo $dpno;
                                                    ?>
                                                    </h5>
                                                    <small class="font-light">Contact Number</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-10">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fas fa-key m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5">
                                                    <?php
                                                    $email = $_SESSION['email'];
                                                    $at =  mysqli_query($con, "select account_type from class110618 where email = '$email'");
                                                    $at2 = mysqli_fetch_array($at);
                                                    $dat = $at2['account_type'];
                                                    echo $dat;
                                                    ?>
                                                    </h5>
                                                    <small class="font-light">Account Type</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-10">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fas fa-id-badge m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5">
                                                    <?php
                                                    $email = $_SESSION['email'];
                                                    $ano =  mysqli_query($con, "select account_number from class110618 where email = '$email'");
                                                    $ano2 = mysqli_fetch_array($ano);
                                                    $dano = $ano2['account_number'];
                                                    echo $dano;
                                                    ?>
                                                    </h5>
                                                    <small class="font-light">Account Number</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-10">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fas fa-at m-b-5 font-16"></i>
                                                    <h5 class="m-b-0 m-t-5">
                                                    <?php
                                                    $email = $_SESSION['email'];
                                                    $se =  mysqli_query($con, "select staff_email from class110618 where email = '$email'");
                                                    $se2 = mysqli_fetch_array($se);
                                                    $dse = $se2['staff_email'];
                                                    echo $dse;
                                                    ?>
                                                    </h5>
                                                    <small class="font-light">Account Manager</small>
                                                </div>
                                            </div>
                                            <div class="col-12 m-t-10">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fas fa-gem m-b-5 font-16"></i>
                                                    <font color="orange"><h3 class="m-b-0 m-t-5">
                                                    <?php
                                                    $email = $_SESSION['email'];
                                                    $lBalance =  mysqli_query($con, "select balance from transactions where customer_email = '$email' order by transaction_id desc limit 1");
                                                    $lBalance2 = mysqli_fetch_array($lBalance);
                                                    $balance = $lBalance2['balance'];
                                                    echo 'N' . $balance;
                                                    ?>
                                                    </h3></font>
                                                    <small class="font-light">Account Balance</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div></center>
                                </div>
                            </div>
                        </div>
                    </div></center>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="dist/js/pages/mask/mask.init.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
</body>
</html>