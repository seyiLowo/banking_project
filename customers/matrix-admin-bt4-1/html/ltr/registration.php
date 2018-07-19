<!DOCTYPE html>
<html>
<head>
	<title>Customer Registration</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Raleway|Open+Sans|Varela+Round" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	

	<style type="text/css">
		body{
			color: #fff;
			background:  url(d4.png);
			opacity: 0.9;
			background-size: cover;
			background-position: center;
			font-family: 'Roboto', sans-serif;
		}
		html{
			height: 100%
		}
	    .form-control{
			height: 40px;
			box-shadow: none;
			color: #636363;
		}
		.form-control:focus{
			border-color: #f04f01;
		}
	    .form-control, .btn{        
	        border-radius: 3px;
	    }
		.signup-form{
			width: 400px;
			margin: 0 auto;
			padding: 30px 0;
		}
		.signup-form h2{
			color: #f04f01;   #636363
	        margin: 0 0 15px;
			position: relative;
			text-align: center;
	    }
		.signup-form h2:before, .signup-form h2:after{
			content: "";
			height: 2px;
			width: 30%;
			background: #d4d4d4;
			position: absolute;
			top: 50%;
			z-index: 2;
		}	
		.signup-form h2:before{
			left: 0;
		}
		.signup-form h2:after{
			right: 0;
		}
	    .signup-form .hint-text{
			color: #636363;
			margin-bottom: 30px;
			text-align: center;
		}
	    .signup-form form{
			color: #636363;
			border-radius: 3px;
	    	margin-bottom: 15px;
	        background: #f2f3f7;
	        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	        padding: 30px;
	    }
		.signup-form .form-group{
			margin-bottom: 20px;
		}
		.signup-form input[type="checkbox"]{
			margin-top: 3px;
		}
		.signup-form .btn{        
	        font-size: 16px;
	        font-weight: bold;		
			min-width: 140px;
	        outline: none !important;
	    }
		.signup-form .row div:first-child{
			padding-right: 10px;
		}
		.signup-form .row div:last-child{
			padding-left: 10px;
		}    	
	    .signup-form a{
			color: #f04f01;
			text-decoration: underline;
		}
	    .signup-form a:hover{
			text-decoration: none;
		}
		.signup-form form a{
			color: #f04f01;
			text-decoration: none;
		}	
		.signup-form form a:hover{
			text-decoration: underline;
		}

		.btn-success{
			background: #f04f01 !important; 
			border-color: #f04f01 !important;
			min-width: 90px;
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
			color: #f04f01;
		}
		.navbar ul.nav li {
			font-size: 96%;
			font-weight: bold;		
			text-transform: uppercase;
		}
		.navbar ul.nav li.active a, .navbar ul.nav li.active a:hover, .navbar ul.nav li.active a:focus {
			color: #f04f01 !important;
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
			border-color: #f04f01;
			box-shadow: 0 0 8px rgba(240,79,1,0.2);
		}
		.search-box .btn-primary, .search-box .btn-primary:active {
			font-weight: bold;
			background: #f04f01;
			border-color: #f04f01;
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
			color: #333;
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


		.modal-confirm {		
		color: #636363;
		width: 325px;
	}
	.modal-confirm .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-confirm .modal-header {
		border-bottom: none;   
        position: relative;
	}
	.modal-confirm h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -15px;
	}
	.modal-confirm .form-control, .modal-confirm .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-confirm .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}	
	.modal-confirm .modal-footer {
		border: none;
		text-align: center;
		border-radius: 5px;
		font-size: 13px;
	}	
	.modal-confirm .icon-box {
		color: #fff;		
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -70px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #f04f01;
		padding: 15px;
		text-align: center;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.modal-confirm .icon-box i {
		font-size: 58px;
		position: relative;
		top: 3px;
	}
	.modal-confirm.modal-dialog {
		margin-top: 80px;
	}
    .modal-confirm .btn {
        color: #fff;
        border-radius: 4px;
		background: #82ce34;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
	.modal-confirm .btn:hover, .modal-confirm .btn:focus {
		background: #6fb32b;
		outline: none;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
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
			<li class="nav-item"><a href="login.php" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="#" class="nav-link">About</a></li>			
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Services <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="#" class="dropdown-item">Internet Banking</a></li>
					<li><a href="#" class="dropdown-item">Mobile Banking</a></li>
					<li><a href="#" class="dropdown-item">Loan Calculator</a></li>
					<li><a href="#" class="dropdown-item">Account Creation</a></li>
				</ul>
			</li>
			<li class="nav-item active"><a href="registration.php" class="nav-link">Register</a></li>
			<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
			<li class="nav-item"><a href="customer_contact.php" class="nav-link">Contact</a></li>
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

<div class="signup-form">
    <form action="process.php" method="post">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
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
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" href="#myModal" class="trigger-btn" data-toggle="modal">Register Now</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title">Awesome!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Your account has been created. Check your email for detials.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div>    

<input type="hidden" name="page" value="<?php if(isset($_GET['page'])){ echo $_GET['page']; } ?>"> 

</body>
</html>                            