<?php 
	include('connection.php');
	$conn = portfolio();
	
	date_default_timezone_set("Asia/Dhaka");
	$today= date("Y-m-d-D");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Aslam's Portfolio</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />

	  	<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico">

		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

		<!-- fontawesome manual -->
		<link rel="stylesheet" href="css/all.min.css">
		<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
		
		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Flexslider  -->
		<link rel="stylesheet" href="css/flexslider.css">
		<!-- Flaticons  -->
		<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">

		<link rel="stylesheet" href="css/style.css">
	</head> 

	<body>
	<div id="colorlib-page">
		<div class="container-wrap">
			<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i>
			</a>
		
			<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
				<div class="text-center">
					<div class="author-img" style="background-image: url(images/admin.jpg);"></div>
					<div id="info">
						<h1 id="colorlib-logo"><a href="index.html">Md Aslam Hossain</a></h1>
						<span class="position"><a href="https://www.w3schools.com/whatis/whatis_fullstack.asp" target="_blank">Full Stack Developer</a> in Bangladesh</span>
					</div>
				</div>
                <div>
                    <nav id="colorlib-main-menu" role="navigation" class="navbar">
                        <div id="navbar" class="collapse">
                            <ul>
                                <li class="active"><a href="#" data-nav-section="home">Home</a></li>
                                <li><a href="#" data-nav-section="about">About</a></li>
                                <li><a href="#" data-nav-section="services">Services</a></li>
                                <li><a href="#" data-nav-section="skills">Skills</a></li>
                                <li><a href="#" data-nav-section="education">Education</a></li>
                                <li><a href="#" data-nav-section="experience">Experience</a></li>
                                <li><a href="#" data-nav-section="work">Work</a></li>
                                <!--<li><a href="#" data-nav-section="blog">Blog</a></li>-->
                                <li><a href="#" data-nav-section="contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>				

				<div class="colorlib-footer footer_area">
					<div class="footer_social mt-lg-0 mt-4">
						<?php 
							 $social_link = "select * from social_link";
	                   $result = mysqli_query($conn, $social_link);                   
	                   while ($social = mysqli_fetch_assoc($result)) { ?>
	                   	<a href="<?= $social['link']; ?>" target="_blank"><i class="<?= $social['name']; ?>"></i></a>
						<?php } ?>
					</div>
					
					<p>
						<small><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script>
							 |  <b>Portfolio.</b> <br> All rights reserved.
						</small>
					</p>				
				</div>
			</aside>	    	

			<div id="colorlib-main">

				<section id="colorlib-hero" class="js-fullheight" data-section="home">
					<div class="flexslider js-fullheight">
						<ul class="slides">
					   	<li class="default">
					   		<div class="overlay"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
						   				<div class="slider-text-inner js-fullheight">
						   					<div class="desc">
							   					<h1>Hi! <br>I'm Aslam</h1>
							   					<h4>I tell you about myself</h4>
											</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	<li class="web">
					   		<div class="overlay"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
						   				<div class="slider-text-inner">
						   					<div class="desc2">
							   					<h1>I'm a<br> Web Designer</h1>
													<h4>I use many technologies and hypermedia resources web design tools.</h4>		
												</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li> 
					   	<li class="php">
					   		<div class="overlay"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
						   				<div class="slider-text-inner js-fullheight">
						   					<div class="desc3">
							   					<h1>I'm a <br> Php Developer</h1>
							   					<h4>I develop programs, applications and web sites using the dynamic scripting language PHP</h4>
							   					<p><a href="#contact2" class="btn btn-learn">Hire me</a></p>	
												</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	<li class="cad">
					   		<div class="overlay"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
						   				<div class="slider-text-inner">
						   					<div class="desc4">
							   					<h2>I know something<br>about AutoCAD Design</h2>
													<h4>I have little knowledge about 2D & 3D design and i can design it by "Autodesk AutoCAD 2002"</h4>
												</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	<li class="fullStack">
					   		<div class="overlay"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
						   				<div class="slider-text-inner">
						   					<div class="desc5">
							   					<h1>I'm a <br> Full Stack Developer</h1>
													<h2>I work with both the front and back end of a website or application.</h2>

                                                    <?php 
                                                        $cv = "select * from cv where location='ctg'";
                                                        $cv2 = mysqli_query($conn, $cv);
                                                        $cv3 = mysqli_fetch_assoc($cv2);

                                                        if ($cv3['link']) { ?>
                                                            <p><a class="btn btn-primary btn-learn" download href="<?= $cv3['link'];?>">
                                                                        Download CV <i class="icon-download4"></i>
                                                                </a>
                                                            </p>
														<?php } else{ ?>
																<p><a class="btn btn-primary btn-learn">No CV <i class="icon-download4"></i></a></p>
														<?php	} ?>
                                                     
												</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div> 
					   	</li>
					   	<li class="thanks">
					   		<div class="overlay"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
						   				<div class="slider-text-inner">
						   					<div class="desc5">
							   					<h1>Thanks for<br>visit hare</h1>
													<h2>For more information scroll below</h2>
													<p><a href="#work2" class="btn btn-primary btn-learn">View Portfolio <i class="icon-briefcase3"></i></a></p>
												</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					  	</ul>
				  	</div>
				</section>

				<section class="colorlib-about" data-section="about">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-12">
								<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
									<div class="col-md-12">
										<div class="about-desc">
											<span class="heading-meta">About Me</span>
											<h2 class="colorlib-heading">Who Am I?</h2>
											<p><strong>Hi I'm Md Aslam Hossain</strong> <br/> I apply the principles of software engineering to the design, development, maintenance, testing, and evaluation of computer software.</p>
											
											<p></p>
										</div>
									</div>
								</div>
								<div class="row">
								
									<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
										<div class="services color-2">		
											<span class="icon2">
												<img src="images/web.png">	
											</span>
											<h3>Web Designer</h3>
										</div>
									</div>
									<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
										<div class="services color-1">
											<span class="icon2">
												<img src="images/php.png">
											</span>
											<h3>PHP Developer</h3>
										</div>
									</div>	
									<div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
										<div class="services color-3">
											<span class="icon2">
												<img src="images/softwere.png">
											</span>
											<h3>Software Tester</h3>
										</div>
									</div>
									<div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
										<div class="services color-4">
											<span class="icon2">
												<img src="images/database.png">		
											</span>
											<h3>Database Designer</h3>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
										<div class="hire">
											<?php 
										 		$project = "select * from project";
						             		$result = mysqli_query($conn, $project);
						             		$total_project=mysqli_num_rows($result);
						             	?>
											<h2>I am happy to know you <br>that about <?= $total_project; ?>+ projects done sucessfully!</h2>
											<a href="#" class="btn-hire">Hire me</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="colorlib-services" data-section="services">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">What I do?</span>
								<h2 class="colorlib-heading">Here are some of my expertise</h2>
							</div>
						</div>
						<div class="row row-pt-md">
							<div class="col-md-4 text-center animate-box">
								<div class="services color-1">
									<span class="icon">
										<i class="icon-bulb"></i>
									</span>
									<div class="desc">
										<h3>Innovative Ideas</h3>
										<p>One Page calendar is one of them. I design it by 'php' in real time.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center animate-box">
								<div class="services color-4">
									<span class="icon">
										<i class="icon-layers2"></i>
									</span>
									<div class="desc">
										<h3>Responsive web design</h3>
										<p>Responsive any divice with background effects.</p> 
									</div>
								</div>
							</div>
							
							<div class="col-md-4 text-center animate-box">
								<div class="services color-5">
									<span class="icon">
										<i class="icon-settings"></i>
									</span>
									<div class="desc">
										<h3>Backend Design</h3>
										<p> The backend usually consists of three parts: a server, an application, and a database. As a Full Stack Developer i follow all three step.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 text-center animate-box">
								<div class="services color-6">
									<span class="icon">
										<i class="icon-data"></i>
									</span>
									<div class="desc">
										<h3>Database Design</h3>
										<p>Database design is the organization of data according to a database model. A smart database design is more helpful for a big project for future</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
					<div class="overlay"></div>
					<div class="colorlib-narrow-content">
						<div class="row">
						</div>
						<div class="row">
							<div class="col-md-3 text-center animate-box">
								<span class="colorlib-counter js-counter" data-from="0" data-to="309" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Cups of coffee</span>
							</div>
							<div class="col-md-3 text-center animate-box">
								<span class="colorlib-counter js-counter" data-from="0" data-to="356" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Projects</span>
							</div>
							<div class="col-md-3 text-center animate-box">
								<span class="colorlib-counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Clients</span>
							</div>
							<div class="col-md-3 text-center animate-box">
								<span class="colorlib-counter js-counter" data-from="0" data-to="10" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Partners</span>
							</div>
						</div>
					</div>
				</div>

				<section class="colorlib-skills" data-section="skills">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">My Specialty</span>
								<h2 class="colorlib-heading animate-box">My Skills</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
								<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="progress-wrap">
									<h3>C</h3>
									<div class="progress">
									 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
									  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
									    <span>90%</span>
									  	</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
								<div class="progress-wrap">
									<h3>Java [J2SE & J2EE]</h3>
									<div class="progress">
									 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="80"
									  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
									    <span>80%</span>
									  	</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="progress-wrap">
									<h3>HTML5</h3>
									<div class="progress">
									 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
									  	aria-valuemin="0" aria-valuemax="100" style="width:95%">
									    <span>95%</span>
									  	</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
								<div class="progress-wrap">
									<h3>CSS3</h3>
									<div class="progress">
									 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
									  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
									    <span>90%</span>
									  	</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="progress-wrap">
									<h3>Bootstrap</h3>
									<div class="progress">
									 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="85"
									  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
									    <span>85%</span>
									  	</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
								<div class="progress-wrap">
									<h3>JavaScript & jQuery</h3>
									<div class="progress">
									 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="40"
									  	aria-valuemin="0" aria-valuemax="100" style="width:40%">
									   	<span class="edit">40%</span>
									  	</div>
									</div>
								</div>
							</div>

							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="progress-wrap">
									<h3>Photoshop</h3>
									<div class="progress">
									 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="20"
									  	aria-valuemin="0" aria-valuemax="100" style="width:20%">
									    <span class="edit">20%</span>
									  	</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
								<div class="progress-wrap">
									<h3>Php</h3>
									<div class="progress">
									 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="95"
									  	aria-valuemin="0" aria-valuemax="100" style="width:95%">
									    <span>95%</span>
									  	</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="progress-wrap">
									<h3>MySql</h3>
									<div class="progress">
									 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="90"
									  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
									    <span>90%</span>
									  	</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
								<div class="progress-wrap">
									<h3>Laravel [Running]</h3>
									<div class="progress">
									 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="30"
									  	aria-valuemin="0" aria-valuemax="100" style="width:30%">
									    <span class="edit">30%</span>
									  	</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="progress-wrap">
									<h3>AutoCad</h3>
									<div class="progress">
									 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="40"
									  	aria-valuemin="0" aria-valuemax="100" style="width:40%">
									    <span>40%</span>
									  	</div>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</section>

				<section class="colorlib-education" data-section="education">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">Education</span>
								<h2 class="colorlib-heading animate-box">Education</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
								<div class="fancy-collapse-panel">
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

										<div class="panel panel-default">
										    <div class="panel-heading" role="tab" id="headingOne">
										        <h4 class="panel-title">
										            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Bachelor Degree of Computer Science
										            </a>
										        </h4>
										    </div>
										    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										         <div class="panel-body">
										            <div class="row">
											      		<div class="col-md-6">
											      			<p>Computer Science & Engineering (CSE)</p>
											      		</div>
											      		<div class="col-md-6">
											      			<p>Premier University, Chittagong, Bangladesh.</p>
											      		</div>
											      	</div>
										         </div>
										    </div>
										</div>

										<div class="panel panel-default">
										    <div class="panel-heading" role="tab" id="headingTwo">
										        <h4 class="panel-title">
										            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Higher Secondary School Certificate
										            </a>
										        </h4>
										    </div>
										    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										         <div class="panel-body">
										            <div class="row">
											      		<div class="col-md-6">
											      			<p>Degree Name: HSC (2010-2012)<br>Group: Science</p>
											      		</div>
											      		<div class="col-md-6">
											      			<p>Chittagong Biggan College, Chittagong, Bangladesh.</p>
											      		</div>
											      	</div>
										         </div>
										    </div>
										</div>

										<div class="panel panel-default">
										    <div class="panel-heading" role="tab" id="headingThree">
										        <h4 class="panel-title">
										            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">High School Secondary Education
										            </a>
										        </h4>
										    </div>
										   <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										         <div class="panel-body">
										            <div class="row">
											      		<div class="col-md-6">
											      			<p>Degree Name: SSC (2008-2010)<br>Group: Science</p>
											      		</div>
											      		<div class="col-md-6">
											      			<p>Krismat Sreenagar Adarsha Secondary High School, Patuakhali, Bangladesh.</p>
											      		</div>
											      	</div>
										         </div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="colorlib-experience" data-section="experience">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">Experience</span>
								<h2 class="colorlib-heading animate-box">Work Experience</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
					         <div class="timeline-centered">

						         <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
						            <div class="timeline-entry-inner">
						               <div class="timeline-icon color-2">
						                  <i class="icon-pen2"></i>
						               </div>
						               <div class="timeline-label">
						               	<h2><a href="#">Front End Web Development (Trainee)</a> <span>(24-July to 06-October)-2017</span></h2>
						                 <p>Basis Institute of Technology & Management(BITM)</p>
						                	<p>Registration No: 178680</p>
						                	<p>Certificate No: 9/WD/CTG-10/0015</p>
						               </div>
						            </div>
						         </article>

						         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
						            <div class="timeline-entry-inner">
						               <div class="timeline-icon color-3">
						                  <i class="icon-pen2"></i>
						               </div>
						               <div class="timeline-label">
						               	<h2><a href="#">Top-up IT Training (For OOP(Java))</a><span> March-2017 To January-2018</span></h2>
						                  <p>Leveraging Information & Communication Technology (LICT)</p>
						                  <p>GraduateID: G023794</p>
						               	<p>Batch Name: TOP000264</p>
						               </div>
						            </div>
						         </article>

						          <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
						            <div class="timeline-entry-inner">
						               <div class="timeline-icon color-4">
						                  <i class="icon-pen2"></i>
						               </div>
						               <div class="timeline-label">
						               	<h2><a href="#">Php development</a> <span>Learn myself next six(06) month-2018</span></h2>
						                 <p>I learn php, js, mysql from youtube. When i face any problem <i>"stackoverflow, javatpoint"</i> website help me.</p>

						                 <p>I complete some small project when i learn <i>backend</i> code</p>

						               </div>
						            </div>
						         </article>

						         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
						            <div class="timeline-entry-inner">
						               <div class="timeline-icon color-1">
						                  <i class="icon-pen2"></i>
						               </div>
						               <div class="timeline-label">
						                  <h2><a href="#">Full Stack Developer</a> <span>2019 To Now</span></h2>
						                	<p>After long struggle i successfully complete my <i>University's Final Project</i></p><a href="http://bazarinfo.ml/" target="_blank">Click Hare</a>

						                	<p>My <i>Final</i> project was include 
						                 		<ol>
						                 			<i>
							                 			<li>HTML5</li>, 
							                 			<li>CSS3</li>, 
							                 			<li>Bootstrap  v3.3.7 [Now i am working Bootstrap v4.2]</li>, 
							                 			<li>JavaScript & Jquery(Medium)</li>, 
							                 			<li>PHP 7.2</li>, 
							                 			<li>MySql server</li>, 
							                 			<li>online domain and hosting.</li>
							                 		</i>
						                 		</ol>
						                 	</p>

						               </div>
						            </div>
						         </article>

						        
						         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
						            <div class="timeline-entry-inner">
						               <div class="timeline-icon color-5">
						                  <i class="icon-pen2"></i>
						               </div>
						               <div class="timeline-label">
						               	<h2><a href="#">Laravel loading...</a> <span>July-2019 To at present</span></h2>
						               	<p>PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.</p>
						               	<p>Now I'm trying to understand <i>Laravel</i>.</p>
						               </div>
						            </div>
						         </article>

						         <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
						            <div class="timeline-entry-inner">
						               <div class="timeline-icon color-none">
						               </div>
						            </div>
						         </article>
						      </div>
						   </div>
					   </div>
					</div>
				</section>

				<section class="colorlib-work" data-section="work" id="work2">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">My Work</span>
								<h2 class="colorlib-heading animate-box">Recent Work</h2>
							</div>
						</div>
						<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
							<div class="col-md-12">
								<p class="work-menu">
									<span>
										<a href="#" class="active">All Project Preview</a>
									</span> 									
								</p>
							</div>
						</div>					

						<!-- <div class="row">
							<div class="col-md-offset-4 col-md-4 animate-box" data-animate-effect="fadeInLeft">

								<div class="project" style="background-image: url(images/img-1.jpg);">
									<div class="desc">
										<div class="con">
											<h3><a href="work.html">Work 01</a></h3>
											<span>Website</span>
											<p class="icon">
												<span><a href="#"><i class="icon-share3"></i></a></span>
												<span><a href="#"><i class="icon-eye"></i> 100</a></span>
												<span><a href="#"><i class="icon-heart"></i> 49</a></span>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div> -->

					<!-- 	<div class="row">
							<div class="col-md-12 animate-box">
								<p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
							</div>
						</div> -->
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<?php 
						 		$project = "select * from project";
		             		$result = mysqli_query($conn, $project);                   
		             		$row = mysqli_fetch_assoc($result);
		             		$rowcount=mysqli_num_rows($result);
		             	?>



						  <!-- Indicators -->
						  <!-- <ol class="carousel-indicators">
						    	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							   <?php 
				      			$rowcount;
				      			for ($i=0; $i <= $rowcount; $i++) { ?>		
				      				<li data-target="#carousel-example-generic" data-slide-to="<?= $i; ?>"></li>
				      		<?php } ?>
						  </ol> -->

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    	<div class="item active">
						      	<img src="img/portfolio/home.jpg" alt="Image Not F">
						      	<div class="carousel-caption">
							      	<h3>I sucessfully complete <br><?= $rowcount; ?> project</h3>		
						      	</div>
						    	</div>						    	
						    		<?php 
						    			$i=0;
							      	$project = "select * from project";
			             			$result2 = mysqli_query($conn, $project);
			             			$rowcount=mysqli_num_rows($result2);

							      	while($row = mysqli_fetch_assoc($result2)) { ?>
							      		<?php 
							      			$rowcount;
								      		if($i <= $rowcount){
								      			$i=$i+1;
								      	} ?>	

						      <div class="item">
								   <img src="<?= $row['image']; ?>" class="img-fluid" alt="Image not found">
								   <div class="carousel-caption">
								   	<span class="project_list">Project No: <?= $i; ?> of <?= $rowcount; ?> </span>	
						          	<a class="btn btn-info project_about" target="_blank" href="<?= $row['link']; ?>">About</a>	

						          	<p class="project_name"><?= $row['name']; ?></p>
						          	<a class="btn btn-success link" target="_blank" href="<?= $row['link']; ?>">Link</a>	
								   </div>
								</div>
					   	<?php } ?>

						  </div>

						  	<!-- Controls -->
						  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"><i class="fas fa-chevron-circle-left"></i></span>
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"><i class="fas fa-chevron-circle-right"></i></span>
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
					</div>
				</section>

			<!-- 	<section class="colorlib-blog" data-section="blog">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">Read</span>
								<h2 class="colorlib-heading">Recent Blog</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="blog-entry">
									<a href="blog.html" class="blog-img"><img src="images/blog-1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
									<div class="desc">
										<span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
										<h3><a href="blog.html">Renovating National Gallery</a></h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInRight">
								<div class="blog-entry">
									<a href="blog.html" class="blog-img"><img src="images/blog-2.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
									<div class="desc">
										<span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
										<h3><a href="blog.html">Wordpress for a Beginner</a></h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="blog-entry">
									<a href="blog.html" class="blog-img"><img src="images/blog-3.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
									<div class="desc">
										<span><small>April 14, 2018 </small> | <small> Inspiration </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
										<h3><a href="blog.html">Make website from scratch</a></h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 animate-box">
								<p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
							</div>
						</div>
					</div>
				</section> -->

				<section class="colorlib-contact" data-section="contact" id="contact2">
					<div class="colorlib-narrow-content">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">Get in Touch</span>
								<h2 class="colorlib-heading">Contact</h2>
							</div>
						</div>
						<div class="row">
							<?php 
							 	$contact = "select * from contact where location='ctg'";
		                	$result = mysqli_query($conn, $contact);                   
		                	$contact = mysqli_fetch_assoc($result);
		                ?>
		                			
							<div class="col-md-5">							
								<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
									<div class="colorlib-icon">
										<i class="icon-globe-outline"></i>
									</div>
									<div class="colorlib-text">
										<p><a href="#"><?= $contact['email']; ?></a></p>
									</div>
								</div>

								<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
									<div class="colorlib-icon">
										<i class="icon-map"></i>
									</div>
									<div class="colorlib-text">
										<p><?= $contact['address']; ?></p>
									</div>
								</div>

								<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
									<div class="colorlib-icon">
										<i class="icon-phone"></i>
									</div>
									<div class="colorlib-text">
										<p><a href="tel://"><?= $contact['contact']; ?></a></p>
									</div>
								</div>
							</div>

							<div class="col-md-7 col-md-push-1">
								<div class="row">
									<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
										<form action="action.php" method="POST">
											<div class="form-group">
												<input type="text" name="name" class="form-control" placeholder="Your Name" required>
											</div>
											<div class="form-group">
												<input type="text" name="contact" class="form-control" placeholder="Your Contact" required>
											</div>
											<div class="form-group">
												<input type="text" name="email" class="form-control" placeholder="Your Email" required>
											</div>
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Subject" required>
											</div>
											<div class="form-group">
												<textarea type="text" name="message" cols="30" rows="7" class="form-control" placeholder="Message..." onkeydown="if(event.keyCode===9){var v=this.value,s=this.selectionStart,e=this.selectionEnd;this.value=v.substring(0, s)+'\t'+v.substring(e);this.selectionStart=this.selectionEnd=s+1;return false;}" required></textarea>  
		                           </div>
											<div class="form-group">
												<input type="submit" name="send_message" class="btn btn-primary btn-send-message" value="Send Message">
											</div>
										</form>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</section>

			</div> <!-- end:colorlib-main -->
		</div> <!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->

   <script type="text/javascript">
		$('.carousel').carousel({
		  interval: 1000
		})
	</script>  

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- isotope -->
	<script src="js/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="js/isotope/isotope-min.js"></script>
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>
	</body>
</html>

<?php if(isset($_SESSION['sms_sender']) && isset($_SESSION['sms'])) { ?>
   <?php      
      echo '<script type="text/javascript">
            	alert("Hellow '.$_SESSION['sms_sender'].'\n'.$_SESSION['sms'].'");
         	</script>';
   ?> 
<?php } ?> 

<?php unset($_SESSION['sms_sender']); ?> 
<?php unset($_SESSION['sms']); ?>