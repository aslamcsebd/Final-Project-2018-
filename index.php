<?php 
   session_start();
   session_destroy();
   include('item/addpreviousprice.php');	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="ISO-8859-1">
		<title>Bazar info</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="icon" type="image/png" href="images/gift.png">	
	</head>
	<body>

		<nav class="navbar  animated bounceInUp wow"> 		
			<div class="container">

				<div class="logo animated fadeInRightBig wow">
					<ul>
						<li><img src="images/logo.png"></li>
						<li><img src="images/salad.png"></li>
						<li><img src="images/logo2.png"></li>
					</ul>			
				</div>

				<div class="navbar-header">
					<button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
						<i class="fa fa-bars"> </i>
					</button>
				</div>				

				<div id="mainnav" class="collapse menu_area navbar-collapse animated fadeInLeftBig wow">
					<ul class="">
						<li class="active hvr-underline-from-left"><a href="index.php" >Home</a></li>
						<li class="hvr-underline-from-center"><a href="user/userLogin.php">User</a></li>
						<li class="hvr-underline-from-center"><a href="admin/adminLogin.php">Admin</a></li>
						<li class="hvr-underline-from-center"><a href="http://aslambd.ml/">Portfolio</a></li>
						<li class="hvr-underline-from-right"><a href="coreCode/index.php">codeCore</a></li>
					</ul>
				</div>
			</div>
		</nav>

	<section id="index" class="container">
	   <form action="confirmLogin.php" method="POST">
		   <div class="form-group row">
		      <div class="col-sm-offset-4 col-sm-4">

		    		<fieldset class="scheduler-border animated zoomIn wow">		    
	    				<legend class="scheduler-border" align="center">
	    					Welcome to Market Information
	    				</legend>	     
		    
			       	<div class="form-group row animated fadeInLeftBig wow">
			         	<div class="col-sm-offset-4 col-sm-3 ">
			           		<a href="user/userLogin.php"  class="btn btn-filled btn-success ">User Login</a>
			         	</div>
			       	</div>

			       	<div class="form-group row animated fadeInLeftBig wow" >
			         	<div class="col-sm-offset-4 col-sm-3">
			           		<a href="admin/adminLogin.php" class="btn btn-filled btn-danger ">Admin Login</a>
			         	</div>
			       	</div>

			       	<div class="form-group row animated fadeInRightBig wow" >
			         	<div class="col-sm-offset-4 col-sm-3 ">
			           		<a href="user/createAccount.php" class="btn btn-filled btn-info ">User Registration</a>
			         	</div>
			       	</div>		       	

					</fieldset>
					<table class="table text-center" >
                            <thead>
                                <th>type</th>
                                <th>User</th>
                                <th>Pass</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Admin</td>
                                    <td>Admin</td>
                                    <td>Admin</td>
                                </tr>
                                <tr>
                                    <td>User</td>
                                    <td>aslam</td>
                                    <td>aslam</td>
                                </tr>
                            </tbody>
                            <p>It is for use this application.</p>
                                                    
                       </table>
					
				</div>
			</div>
		</form> 
	</section>

	<section id="footer">
		<ul class="list-inline text-center animated fadeInDownBig wow">
			<li><a href="https://www.facebook.com/aslam.cse.ctg" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/aslamctg" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
			
		</ul>

		<div class="text-center animated fadeInDownBig wow">
			<p>&copy; <?php date_default_timezone_set("Asia/Dhaka"); echo $year= date("Y"); ?>
			<!-- $date3= date("Y-m-d")."<br>"; -->
                        PUC, Premier University, Chittagong. <br>
			Leveraging Information & Communication Technology (LICT)</p>
		</div>
	</section>

<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>

	<!--WOW CSS-->
	<script>/*
	    new WOW().init();
	</script>

	<script>/*
	    $('.carousel').carousel({
	        interval: 1000
	    })
	</script>


</body>
</html>	