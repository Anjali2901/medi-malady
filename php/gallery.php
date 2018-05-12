<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Medi-malady</title>
<!-- for-meta-tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-meta-tags-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Portfolio-CSS -->	<link rel="stylesheet" href="css/swipebox.css" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
</head>
<style>
.x{
	background-color:#add8e6;
}
</style>
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
				<li>Pharmacy</li>
			</ul>


			<!DOCTYPE html>
<html>
<head>
<title></title>

<script>
var x = document.getElementById('output');
  function getLocation()
  {
	  if(navigator.geolocation)
		  navigator.geolocation.getCurrentPosition(showPosition);
	  else
		  x.innerHTML="browser not supporting";
  }
  function showPosition(position)
  {
	  x.innerHTML = "latitude ="+position.coords.latitude;
	  
	  <?php 
	  session_start();
	  $_session['lat']=position.coords.latitude;
	  ?>
	  x.innerHTML += "<br>"
	  x.innerHTML += "Longitude ="+position.coords.longitude;
	  <?php 
	  session_start();
	  $_session['long']=position.coords.longitude;
	  ?>
	  var locAPI = "http://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude+"&sensor=true";
	  x.innerHTML =locAPI;
	  $.get()
  }
  
var x = document.getElementById('map');
var llt,llx;
  function getLocation()
  {
	  if(navigator.geolocation)
		  navigator.geolocation.getCurrentPosition(showPosition);
	  else
		  x.innerHTML="browser not supporting";
  }
  function showPosition(position)
  {
	  llt=position.coords.latitude;
	  llx=position.coords.longitude;
	  x.innerHTML = "latitude ="+llt;
	  x.innerHTML += "<br>"
	  x.innerHTML += "Longitude ="+llx;  
  }
function initMap(position)
{
	var location={lat: 20.5945,lng: 78.9690};
	var map1= new google.maps.Map(document.getElementById("map"),{
		
		zoom: 4,
		center: location
		
	});
	var marker = new google.maps.Marker({
          position: location,
          map: map1
        });
}



</script>

</head>
<body>
<div id="map">


</div>


<?php
//$latitude = position.coords.latitude;
//$longitude = position.coords.longitude;

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
//$link="https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=19.0760,72.8777&radius=500&type=doctor&key=AIzaSyDtRVL608rSdYKjmMIlgRNwRgkqDU0zhi0";
$cont = file_get_contents("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=26.2196,84.3567&radius=10000&type=pharmacy&key=AIzaSyD6PyURM2qCatrH37nHiDfDzZPlJVaxvLU", false, stream_context_create($arrContextOptions));

$obj = json_decode($cont,true);
for($i=0;$i<30;$i++)
               {
                  if(!isset($obj["results"][$i]["name"]))
                  {
                    echo "<b>We were able to show only these many results.</b><br><br><br><br>";
                    break;
                  }
                  else
                  {
                   $place_ref=$obj["results"][$i]["place_id"];
                          $place_details_url="https://maps.googleapis.com/maps/api/place/details/json?placeid=".$place_ref.'&key=AIzaSyD6PyURM2qCatrH37nHiDfDzZPlJVaxvLU';
                           $details_cont = file_get_contents($place_details_url, false, stream_context_create($arrContextOptions));
                           $details_obj = json_decode($details_cont,true); 

                          echo '
                          <div class="container-fluid">
                              <div class="jumbotron3" style="background-color:#5dbcdb;font-size:20px;margin-left:20px;padding-left:20px;padding-top:25px;padding-bottom:25px;">
                                  <b>'.$obj["results"][$i]["name"].
                              '</div></b><br><br>';
                          echo '<ul type="square" >
                                 <li><b><i>Address:'.$obj["results"][$i]["vicinity"].'</i></b><br></li>';

                            if (isset($details_obj["result"]["formatted_phone_number"])) 
                                  {
                                       echo '<li><b><i>Contact:'.$details_obj["result"]["formatted_phone_number"].'</i></b><br></li>'  ;                                 
                                 }
                            if(isset($details_obj["result"]["website"]))    
                            {
                                       echo '<li><b><i>Website:<a target="_blank" href='.$details_obj["result"]["website"].'>Open in a new tab. </a></i></b><br></li>';
                            } 
                                 
                                 if(isset($details_obj["result"]["rating"]))
                            {
                                       echo '<li><b><i>Ratings:'.$details_obj["result"]["rating"].'</i></b><br></li>';

                            }
                            
                            if(isset($details_obj["result"]["url"]))
                            {
                                      echo '<li><b><i>Find on map:<a target="_blank" href='.$details_obj["result"]["url"].'>Open in a new tab.</a></i></b><br></li>';

                            }
									echo "</ul><br><hr></div>";
				  }
			   }
?>


</body>

</html>

		</div>
	</div>
<!-- //banner1 -->
<div class="x">
<?php


if(isset($_POST['submit'])) {

	$conn=mysqli_connect('localhost','root','shubhi','health');

	$des = $_POST['disease'];
	$sql1="select Information from nutrients where Disease_type='$des'";
	$sql2="select Nutrient1 from nutrients where Disease_type='$des'";
	$sql3="select Nutrient2 from nutrients where Disease_type='$des'";
	$sql4="select Nutrient3 from nutrients where Disease_type='$des'";
	$sql5="select Nutrient4 from nutrients where Disease_type='$des'";
	$sql6="select Nutrient5 from nutrients where Disease_type='$des'";
	if($result1=mysqli_query($conn,$sql1))
	{
		while($row1 = mysqli_fetch_array($result1))
		echo $row1[0]."<br>"."<br>";
	}
	
	if($result2=mysqli_query($conn,$sql2))
	{
		while($row1 = mysqli_fetch_array($result2))
		echo '<a href="http://www.open.edu/openlearncreate/mod/oucontent/view.php?id=315&printable=1">'.$row1[0]."<br>".'</a>';
	}
	if($result3=mysqli_query($conn,$sql3))
	{
		while($row1 = mysqli_fetch_array($result3))
		echo $row1[0]."<br>";
	}
	if($result4=mysqli_query($conn,$sql4))
	{
		while($row1 = mysqli_fetch_array($result4))
		echo $row1[0]."<br>";
	}
	if($result5=mysqli_query($conn,$sql5))
	{
		while($row1 = mysqli_fetch_array($result5))
		echo $row1[0]."<br>";
	}
	if($result6=mysqli_query($conn,$sql6))
	{
		while($row1 = mysqli_fetch_array($result6))
		echo $row1[0]."<br>";
	}
}


?>


</div>
<!-- footer -->
<div class="footer">
		<div class="container">
			<h4>Subscribe to our<span>Newsletter</span></h4>
			<form action="#" method="post">
				<input type="email" name="Email" placeholder="Enter Your Email..." required="">
				<input type="submit" value="Send">
			</form>
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
<!-- Gallery-Tab-JavaScript -->
			<script src="js/cbpFWTabs.js"></script>
			<script>
				(function() {
					[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
						new CBPFWTabs( el );
					});
				})();
			</script>
		<!-- //Gallery-Tab-JavaScript -->


<!-- Swipe-Box-JavaScript -->
			<script src="js/jquery.swipebox.min.js"></script>
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
			</script>
		<!-- //Swipe-Box-JavaScript -->
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
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
