<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>KB-Client List</title>
        <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
        <link href="dist/css/style.min.css" rel="stylesheet">
        
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
                            <!--  <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                    <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li> -->
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admins.php" aria-expanded="false"><i class="mdi mdi-file-document"></i><span class="hide-menu">Staff List</span></a></li>
                        <li class="sidebar-item"><a  class="sidebar-link waves-effect waves-dark sidebar-link" href="sDetails.php" aria-expanded="false"><i class="mdi mdi-account-edit"></i><span class="hide-menu"> Edit Account Details </span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple-plus"></i></i><span class="hide-menu">Register </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="sRegistration2.php" class="sidebar-link"><i class="mdi mdi-account-plus"></i><span class="hide-menu"> New Staff </span></a></li>
                            <li class="sidebar-item"><a href="cRegistration2.php" class="sidebar-link"><i class="mdi mdi-account-plus"></i><span class="hide-menu"> New Client </span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Client List</h4>
                    <div class="ml-auto text-right"><font color="green"><h4 id="1">
                        <?php
                            if(isset($Mssg)){
                                echo $Mssg;
                            }
                        ?>
                    </h4></font></div>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Client List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <?php
                                    require ('sConn.php');
                                    $staffEmail = $_SESSION['email'];
                                    $customer = mysqli_query($con, "select * from class110618 where staff_email = '$staffEmail'");
                                    echo
                                    "<thead>
                                        <tr>
                                            <th>Account Name</th>
                                            <th>Email</th>
                                            <th>Account Number</th>
                                            <th>Account Type</th>
                                            <th>Phone Number</th>
                                            <th>Creation Date</th>
                                            <th>Edit Details</th>
                                            <th>Close Account</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                                        $i=0;
                                        while($row = mysqli_fetch_array($customer)):{
                                        echo
                                        "<tr>
                                            <td class='col-md-1'>".$row['first_name']." ".$row['last_name']."</td>
                                            <td>".$row['email']."</td>
                                            <td>".$row['account_number']."</td>
                                            <td>".$row['account_type']."</td>
                                            <td>".$row['phone_number']."</td>
                                            <td>".$row['creation_date']."</td>";}
                                            ?>
                                            <td><a href="admin_cDetails.php?id=<?php echo $row['customer_id']; ?>" class="btn btn-success">Edit</a></td>
                                            <td><a href="sDelete_user.php?id=<?php echo $row['customer_id']; ?>" class="btn btn-danger">Close</a></td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
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
<!-- this page js -->
<script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
/****************************************
*       Basic Table                   *
****************************************/
$('#zero_config').DataTable();
</script>
</body>
</html>
