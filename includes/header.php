<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>Not Far From The Tree</title>

  <link rel="shortcut icon" href="images/favicon.png"> 
  <link rel="apple-itouch-icon" href="images/favicon.png">
  <meta name="viewport" content="width=device-width, minimumscale=1.0, maximum-scale=1.0" />

    <!-- Stylesheets -->
    
  <link rel="stylesheet" href="styles/main.css" type="text/css" media="screen" />

	<script src="js/jquery-1.10.2.min.js"> </script>

	<!-- Place somewhere in the <head> of your document -->
<link rel="stylesheet" href="js/slider/flexslider.css" type="text/css">
<script src="js/slider/jquery.flexslider.js"></script>

<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();

    $('#menuButton').click(function(){
    	$('#mainNav').slideToggle();
    });
    
    $('#getInvolved').click(function(){
    	$('#getInvolvedDropdown').slideToggle();
    });
    $('#about').click(function(){
    	$('#aboutDropDown').slideToggle();
    });
    $('#contactUs').click(function(){
    	$('#contactUsDropDown').slideToggle();
    });
  });
</script>

</head>
<body>

	<div class="fullWidth" id="headerWrapper">
		<div class="wrapper">
			<a href="index.php"><img id="mainLogo" src="images/logo.png"></a>
			<a href="donate.php"><img id="donate" src="images/donate.png"></a>
			<ul>
				<li><a href="#"><img src="images/facebook.png"></a></li>
				<li><a href="#"><img src="images/twitter.png"></a></li>
				<li><a href="#"><img src="images/pinterest.png"></a></li>
			</ul>
		</div>	
	</div>

	<div class="fullWidth" id="navWrapper">
		<div class="wrapper">
			<img src="images/menu.svg" id="menuButton">
			<nav>
				<ul id="mainNav">
					<li><a href="#" id="getInvolved">Get Involved</a>
						<ul id="getInvolvedDropdown">
							<li><a href="#" class="dropDown">Volunteer</a></li>
							<li><a href="donate.php" class="dropDown">Donate</a></li>
							<li><a href="#" class="dropDown">Register Your Fruit Tree</a></li>
						</ul>
					</li>
					<li><a href="#" id="about">About</a>
						<ul id="aboutDropDown">
							<li><a href="#">Awards and Accolades</a></li>
							<li><a href="#">Annual Reports</a></li>
						</ul>
					</li>
					<li><a href="events.php" >Events</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#" id="contactUs">Contact Us</a>
						<ul id="contactUsDropDown">
							<li><a href="#">Request Fruit Donations</a></li>
							<li><a href="#">Recieve Our Newsletter</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>