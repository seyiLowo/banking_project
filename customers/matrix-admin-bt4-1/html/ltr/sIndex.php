<!DOCTYPE html>
<html>
<head>
	<title>KB-Staff Login</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

	<style type="text/css">
		body{
			color: #636363;
			background:  url(d4.png);
			opacity: 0.9;
			background-size: cover;
			background-position: center;
			font-family: 'Roboto', sans-serif;
		}
		html{
			height: 100%
		}
		.form-inline {
	        display: inline-block;
	    }
		.navbar-header.col {
			padding: 0 !important;
		}	
		.navbar {
			font-size: 14px;
			background: #fff;
			padding-left: 16px;
			padding-right: 16px;
			border-bottom: 1px solid #d6d6d6;
			box-shadow: 0 0 4px rgba(0,0,0,.1);	
			font-family: 'Open Sans', sans-serif;	
		}
		.navbar .navbar-brand {
			color: #555;
			padding-left: 0;
			font-size: 20px;
			padding-right: 50px;
			font-family: 'Raleway', sans-serif;
			text-transform: uppercase;
		}
		.navbar .navbar-brand b {
			font-weight: bold;
			color: #f21d11;
		}
		.navbar ul.nav li {
			font-size: 96%;
			font-weight: bold;		
			text-transform: uppercase;
		}
		.navbar ul.nav li.active a, .navbar ul.nav li.active a:hover, .navbar ul.nav li.active a:focus {
			color: #f21d11 !important;
			background: transparent !important;
		}
		.search-box {
	        position: relative;
	    }
		.search-box input.form-control, .search-box .btn {
			font-size: 14px;
			border-radius: 2px !important;
		}
		.search-box .input-group-btn {
			padding-left: 4px;		
		}
		.search-box input.form-control:focus {
			border-color: #f21d11;
			box-shadow: 0 0 8px rgba(240,79,1,0.2);
		}
		.search-box .btn-primary, .search-box .btn-primary:active {
			font-weight: bold;
			background: #f21d11;
			border-color: #f21d11;
			text-transform: uppercase;
			min-width: 90px;
		}
		.search-box .btn-primary:focus {
			outline: none;
			background: #eb4e01;
			box-shadow: 0 0 8px rgba(240,79,1,0.2);
		}
		.search-box .btn span {
			transform: scale(0.9);
			display: inline-block;
		}
		.navbar .nav-item i {
			font-size: 18px;
		}
		.navbar .dropdown-item i {
			font-size: 16px;
			min-width: 22px;
		}
		.navbar .nav-item.open > a {
			background: none !important;
		}
		.navbar .dropdown-menu {
			border-radius: 1px;
			border-color: #e5e5e5;
			box-shadow: 0 2px 8px rgba(0,0,0,.05);
		}
		.navbar .dropdown-menu li a {
			color: #777;
			padding: 8px 20px;
			line-height: normal;
			font-size: 14px;
		}
		.navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:active {
			color:#f21d11;
		}
		.navbar .navbar-form {
			border: none;
		}
		@media (min-width: 992px){
			.form-inline .input-group .form-control {
				width: 225px;			
			}
		}
		@media (max-width: 992px){
			.form-inline {
				display: block;
			}
		}



		.btn-primary{
			background: #f21d11 !important; 
			border-color: #f21d11 !important;
			min-width: 90px;
		}
		.btn-primary:focus{
			outline: none;
			background: #eb4e01;
			box-shadow: 0 0 8px rgba(240,79,1,0.2);
		}
		.login-form {
			width: 340px;
			margin: 120px auto;
		}
		.login-form a{
			color:#f21d11;
		}
		.form-control:focus{
			border-color: #f21d11;
		}
	    .login-form form {        
	    	margin-bottom: 15px;
	        background: #f7f7f7;
	        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	        padding: 30px;
	    }
	    .login-form h2 {
	        margin: 0 0 15px;
	        color: #f21d11;
	    }
	    .form-control, .btn {
	        min-height: 38px;
	        border-radius: 2px;
	    }
		.input-group-addon .fa {
	        font-size: 18px;
	    }
	    .btn {        
	        font-size: 15px;
	        font-weight: bold;
	    }
	    .text-center{
	    	color:white;
	    }
	</style>
</head>

<body>
<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="#">Keystone<b>Bank</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="#" class="nav-link">Home</a></li>
			<li class="nav-item active"><a href="sIndex.php" class="nav-link">Login</a></li>
			<li class="nav-item"><a href="admin_contact.php" class="nav-link">Contact</a></li>
		</ul>
		<form class="navbar-form form-inline navbar-right ml-auto">
			<div class="input-group search-box">
				<input type="text" class="form-control">
				<span class="input-group-btn">
					<button type="button" class="btn btn-primary"><span>Search</span></button>
				</span>
			</div>
		</form>		
	</div>
</nav>

<div class="login-form">
    <form action="admin_process_login.php" method="post">
        <h2 class="text-center">
        	Sign In <br />
        	<center><font color="red"><h5>
        	<?php
        		if(isset($errorMssg)){
        			echo $errorMssg;
        		}
        	?>
        	</h5></font></center>
        </h2>   
        <div class="form-group">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" name="email" placeholder="Email" required="required">
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock">&nbsp</i></span>
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>

</div>
</body>
</html>                            