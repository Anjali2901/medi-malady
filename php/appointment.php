<?php
 session_start();
 
 $con = mysqli_connect('localhost','root','1234','medipas');
 if($con){
 }
 else {
   echo "no connection";
 }
if(isset($_GET['name'])){
  if($_GET['name']){
    $name=$_GET['name'];
   $result = mysqli_query($con,"select * from medicine where name = '$name'");
   if($result == FALSE) {
      echo "error";
   }
$array=array();
   while($row = mysqli_fetch_array($result)){
	  for ($i=0; $i<9; $i++) {
		array_push($array,$row[$i]);
	  }
   }
  }
}

 ?>


<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Health Plus a Medical Category Bootstrap Responsive Website Template | Appointment :: w3layouts</title>
<!-- for-meta-tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-meta-tags-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
			<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
</head>

<body>
<div class="main" id="home">
<!-- banner -->
		<div class="header_agileinfo">
						<div class="w3_agileits_header_text">
								<ul class="top_agile_w3l_info_icons">
									<li><i class="fa fa-home" aria-hidden="true"></i>IIIT Lucknow.</li>
									<li class="second"><i class="fa fa-phone" aria-hidden="true"></i>(+91) 123 456 879</li>

									<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:maria@example.com">medi-malady@gmail.com</a></li>
								</ul>

						</div>
						<div class="agileinfo_social_icons">
							<ul class="agileits_social_list">
								<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_rss"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
			</div>

		<div class="header-bottom">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<h1><a class="navbar-brand" href="index.php"><span>M</span>edy  <i class="fa fa-plus" aria-hidden="true"></i> <p>Malady</p></a></h1>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--sebastian">
					<ul id="m_nav_list" class="m_nav menu__list">
						<li class="m_nav_item menu__item menu__item--current" id="m_nav_item_1"> <a href="index.php" class="menu__link">Home</a></li>
						<li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="about.php" class="menu__link"> About Us </a> </li>

						<li class="m_nav_item menu__item" id="moble_nav_item_4"> <a href="appointment.php" class="menu__link">Medical Authentication </a> </li>

						<li class="m_nav_item menu__item" id="moble_nav_item_3 "> <a href="single.php" class="menu__link " >Nutrients Required </a>
						</li>
						
						<li class="m_nav_item menu__item" id="moble_nav_item_3 dropdown"> <a href="#" class="menu__link dropdown-toggle" data-toggle="dropdown">Search <b class="caret"></b></a> 
						   <ul class="dropdown-menu agile_short_dropdown">
									<li><a href="hospitals.php">Nearby Hospitals</a></li>
									<li><a href="doctor.php">Nearby Doctors</a></li>
									<li><a href="gallery.php">Nearby Pharmacy</a></li>
								</ul>
						</li>
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="contact.php" class="menu__link"> Contact </a> </li>
					</ul>
				</nav>

				</div>
				<!-- /.navbar-collapse -->
			</nav>
	 </div>
</div>
<!-- banner -->
<!-- banner1 -->
	<div class="banner1 jarallax">
		<div class="container">
		</div>
	</div>

	<div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.php">Home</a><i>|</i></li>
				<li>Medicine Authentication</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->
<!-- icons -->
	<div class="banner-bottom" id="about">
		<div class="container">
					<h2 class="w3_heade_tittle_agile">Medicine Authentication</h2>
			        <p class="sub_t_agileits"></p>

					<div class="book-appointment">
						<h4>Search all about your Medicine </h4>
								<form >
								<div class="left-agileits-w3layouts same">
								<div class="gaps">
									<p>Enter the Medicine name </p>

										<input  type="text" name="name" id="medicine" placeholder="eg. Paracetamol"  value = "<?php ?>">

								</div>

							</div>
								<div class="clearfix"></div>
							<input type="submit" value="Search">
								</form>

 							 	<div id="drug">
										<?php
 							 				  for($i=0;$i<9;$i++){
 							 							  if(isset($array[$i])){
 							 							      if ($array[$i]) {
 							 							          if($i === 0){
 							 							                $array[$i]="NAME: ". $array[$i];
																						echo "0";
 							 							              }
 							 							              if($i === 1){
 							 							                $array[$i]="COMMON BRAND(S): ". $array[$i];
 							 							              }
 							 							              if($i === 2){
 							 							                $array[$i]="GENERIC NAME(S): ". $array[$i];
 							 							              }
 							 							              if($i === 3){
 							 							                $array[$i]="USES: ". $array[$i];
 							 							              }
 							 							              if($i === 4){
 							 							                $array[$i]="CONTENTS: ". $array[$i];
 							 							              }
 							 							              if($i === 5){
 							 							                $array[$i]="EFFECTS: ". $array[$i];
 							 							              }
 							 							              if($i === 6){
 							 							                $array[$i]="MISSED DOSAGES: ". $array[$i];
 							 							              }
 							 							              if($i === 7){
 							 							                $array[$i]="AUTHORISED MANUFACTURES: ". $array[$i];
 							 							              }
																	   if($i === 8){
 							 							                $array[$i]="ANALYSIS: ". $array[$i];
 							 							              }
																	  

 							 							              echo '<div class="alert alert-success" role="alert">'.$array[$i].'</div>';
 							 							            }
 							 							          }
																		else {
																			$msg="The medicine you entered is not found .... Please retry";
																			echo '<div class="alert alert-success" role="alert">'.$msg.'</div>';
																			break;
																		}
 							 							     }
															 
 							 							     ?></div>

							</div>
					   </div>
                <div align="center" >
					<div align="center" style="color:lightGreen"><h3><u>Reviews of users</u></h3></div>
					<?php

                      if(isset($_GET['name'])){
								  if($_GET['name']){
								$acc = "reviewtable";
								$nn = $_GET['name'];
								  $check = "select user,review from $acc where medicine = '$nn'";
								  $result = mysqli_query($con,$check) or die ("Could not match data because ".mysqli_error($con));
								  if (!$result) {
									echo "Could not successfully run query ($sql) from DB: " . mysql_error();
								  }
								if (mysqli_num_rows($result) == 0) {
									echo "No reviews yet, Be the FIRST ONE to review medicine";
								}

								while($row = $result->fetch_assoc()){
								   echo $row['user']." : ".$row['review'].'</br>';
								}


								//echo "$result[0]";
								mysqli_free_result($result);

								if(isset($_POST['submit'])){
									$table = "reviewtable";
									$user = $_POST['user'];
									
									$reviews = $_POST['review'];
									$q= "insert into reviewtable(medicine,user,review) values('$name','$user', '$reviews')";
									$res = mysqli_query($con, $q);
										if($res === FALSE) {
										  print("Error");
										}
									}	
								  }
								}  					
					?>
					</div>
		</div>
		
<div class="single-grid">
				<div class="col-md-6 w3ls-blog-center" >
					<div class="w3-blog-center-grid">
					<div class="coment-form" align="center">
							<h4 >Leave your comment</h4>
							<form  action="#" method="POST">
								<input type="text" name="user" placeholder="Name "  required="" >
								<input type="email" name="email" placeholder="Email (will not be published)*" required="">
								
								<textarea name="review" align="right" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required=""  >Your Comment...</textarea>
								<input type="submit" name="submit" value="Submit Comment" align="right">
							</form>
						</div>


	</div>
	</div>
	</div>
			<div class="clearfix"> </div>
		<!-- footer -->
			<div class="footer">
				<div class="container">
					
			<div class="agile_footer_copy">
				<div class="w3agile_footer_grids">
					<div class="col-md-4 w3agile_footer_grid">
						<h3>About Us</h3>
						<p>We have tried our best to make your living easier. <span>This project aims at well being of every individual who must be aware of medicines,nutrients and doctors which they should consult for the disease they are going through.</span></p>
					</div>
					<div class="col-md-4 w3agile_footer_grid">
						<h3>Contact Info</h3>
						<ul>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>IIIT Lucknow <span> India .</span></li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">medi-malady@gmail.com</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+1234 567 567</li>
						</ul>
					</div>
					<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
						<h3>Navigation</h3>
						<ul>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="gallery.php">Trace Hospitals</a></li>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="appointment.php">Medical Authentication</a></li>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="about.php">About</a></li>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="w3_agileits_copy_right_social">
				<div class="col-md-6 agileits_w3layouts_copy_right">
					<p>&copy; 2018 Medi-Malady. All rights reserved | Design by Team Medi-Malady</a></p>
				</div>
				<div class="col-md-6 w3_agile_copy_right">
					<ul class="agileits_social_list">
								<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_rss"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
							</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
 <!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
		<!-- Calendar -->
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Health Plus
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<img src="images/g9.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum
							exercitationem ullam corporis suscipit laboriosam,
							nisi ut aliquid ex ea commodi consequatur? Quis autem
							vel eum iure reprehenderit qui in ea voluptate velit
							esse quam nihil molestiae consequatur, vel illum qui
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
			<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
						$().UItoTop({ easingType: 'easeOutQuart' });
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
