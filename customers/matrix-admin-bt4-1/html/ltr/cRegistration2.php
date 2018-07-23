<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>KB-Register New Client</title>
    <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
            .navbar-brand {
                color: #555;
                font-family: 'Raleway', sans-serif;
                text-transform: uppercase;
                font-size: 26px;
            }
           .navbar-brand b {
                font-weight: bold;
                color: #f21d11;
                font-size: 20px;
            }
            .btn{
                margin-left: 45%;
            }
            .form-control{
            height: 40px;
            box-shadow: none;
            color: #636363;
            }
            .form-control:focus{
                border-color: #f21d11;
            }
            .form-control, .btn{        
                border-radius: 3px;
            }
            .signup-form{
                width: 400px;
                margin: 0 auto;
                padding: 20px 0;
            }
            .signup-form h3{
                color: #f21d11;   #636363
                margin: 0 0 15px;
                position: relative;
                text-align: center;
            }
            .signup-form h3:before, .signup-form h3:after{
                content: "";
                height: 2px;
                width: 30%;
                background: #d4d4d4;
                position: absolute;
                top: 50%;
                z-index: 2;
            }   
            .signup-form h3:before{
                left: 0;
            }
            .signup-form h3:after{
                right: 0;
            }
            .signup-form .hint-text{
                color: #636363;
                margin-bottom: 30px;
                text-align: center;
            }
            .signup-form form{
                color: #636363;
                margin-bottom: 15px;
                background: #e0e2ed;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .signup-form .form-group{
                margin-bottom: 20px;
            }
            .signup-form .btn{        
                font-size: 16px;
                font-weight: bold;      
                min-width: 50px;
                outline: none !important;
                margin-left: 33%;
                margin-top:13px;
            }
            .signup-form .row div:first-child{
                padding-right: 10px;
            }
            .signup-form .row div:last-child{
                padding-left: 10px;
            }      
            .btn-success{
                background: #f21d11 !important; 
                border-color: #f21d11 !important;
                min-width: 40px;
            }
            .btn-success:focus{
                outline: none;
                background: #eb4e01;
                box-shadow: 0 0 8px rgba(240,79,1,0.2);
            }
            .text-center div{
                border: 1px solid white;
                padding-top:0 !important;
            }
            .form-inline {
                display: inline-block;
            }
    </style>
</head>
<?php 
    if(!isset($_SESSION))
    {
        session_start();
    }
 ?>

<body>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>

                    <a class="" href="index2.php">
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                                <?php
                                    echo "Welcome, ".$_SESSION['email'];
                                ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="sIndex.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index2.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="clients.php" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Client List</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admins.php" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Staff List</span></a></li>
                        <li class="sidebar-item"><a  class="sidebar-link waves-effect waves-dark sidebar-link" href="sDetails.php" aria-expanded="false"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Edit Account Details </span></a></li>
                        <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" href="sRegistration2.php" class="sidebar-link"><i class="mdi mdi-account-key"></i><span class="hide-menu"> Register New Staff</span></a></li>
                        <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" href="cRegistration2.php" class="sidebar-link"><i class="mdi mdi-account-key"></i><span class="hide-menu"> Register New Client</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Create a Client Account</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="signup-form">
                                <form  action="process.php" method="POST">
                                    <center><font color="red"><h5>
                                        <?php
                                            if(isset($Mssg)){
                                                echo $Mssg;
                                            }
                                        ?>
                                    </h5></font></center>
                                    <h3>Register</h3>
                                    <p class="hint-text">Create a Client Account</p>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-6"><input type="text" class="form-control" name="firstname" placeholder="First Name" required="required"></div>
                                            <div class="col-xs-6"><input type="text" class="form-control" name="lastname" placeholder="Last Name" required="required"></div>
                                        </div>          
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number" required="required" maxlength="11">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="accountNumber" placeholder="Account Number" required="required" maxlength="10">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="accountType" placeholder="Account Type" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                                    </div>       
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-md">Register Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../../assets/libs/flot/excanvas.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../dist/js/pages/chart/chart-page-init.js"></script>
</body>

</html>