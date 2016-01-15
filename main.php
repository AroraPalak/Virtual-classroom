<!DOCTYPE html>
<!-- "main.php" 
		Student's home page
-->
<?php
	session_start();
	Include('connect.php');
	$memid=$_SESSION['MEMID'];
	$val="SELECT * FROM reg WHERE MemId = '$memid' " or die(mysql_error());
	$res=mysql_query($val);
	$row= mysql_fetch_array($res) or die(mysql_error());
	$fname=$row['FirstName'];	$lname=$row['LastName'];		
?>
<html lang="en">
	<head>
		<title> Student's Homepage</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<script type="text/javascript" src="js/jquery-1.6.js" ></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/cufon-replace.js"></script>  
		<script type="text/javascript" src="js/Vegur_300.font.js"></script>
		<script type="text/javascript" src="js/PT_Sans_700.font.js"></script>
		<script type="text/javascript" src="js/PT_Sans_400.font.js"></script>
		<script type="text/javascript" src="js/tms-0.3.js"></script>
		<script type="text/javascript" src="js/tms_presets.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/atooltip.jquery.js"></script>
		<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
		<![endif]-->
		<!--[if lt IE 7]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
			</div>
		<![endif]-->
	    <style type="text/css">
			<!--
			.style1 {font-size: 18px; color: #5f870e;}
			.style101 {font-size: 50px; color: #FF0000;}
			.style4 {font-size: 24px}
			.style5 {font-size: 24px; color: #5f870e;}
			.style6 {color: #FF0000}
			.style7 {font-size: 35px; color: #5f870e;}
			-->
        </style>
	</head>
	<body id="page1">
	<div class="main"></br></br> <a class="style101">  E-Planet..! </a> <a class="style5">Get A Benefit For Yourself</a>
		<header>
			<div class="wrapper">				  
				<form id="search" method="post">		
					<fieldset>
						<div id="header_right">
							<h5> <a href="logout.php">Log Out</a> </h5>
						</div>						 
					</fieldset>
				</form>
			</div>
			<p class="style7"> 
				<?php echo "Hello,  ";	echo $fname . " " . $lname;	?> 	
			</p>
			<article id="content"> 
			</article>
				<nav>
					<ul id="menu">
						<li class="active"><a href="main.php"><span>Homepage</span></a></li>
						<li><a href="courses.php"><span>Courses</span></a></li>
						<li><a href="test.php">Test</a></li>
						<li class="last"><a href="palak.php"><span>Clear Doubts</span></a></li>
					</ul>
				</nav>				
			<p class="style5">
				 <marquee behavior="alternate">
					Welcome Student to <blink> E-Planet...! </blink>
				</marquee> 
			</p>
			<div class="style4" id="slider">
				<ul class="items">
					<li>
						<img src="images/e-planet.jpg" alt="">
					</li>
					<li>
						<img src="images/image1.jpg" alt="">
					</li>
					<li>
						<img src="images/image3.jpg" alt="">
					</li>
				</ul>
			</div>
		</header>	
	</div>
	<div class="bg1">
		<div class="main">
			<article id="content2">
				<div class="wrapper">
					<div class="col2 marg_right1">
						<h3> Experience A Virtual Classroom At Your Home...</h3>
					</div>
				</div>
			</article>
		</div>
	</div>
	<script type="text/javascript"> Cufon.now(); </script>
	<script>
		$(window).load(function()
		{$('#slider')._TMS(
			{banners:true,
				waitBannerAnimation:false,
				preset:'diagonalFade',
				easing:'easeOutQuad',
				pagination:true,
				duration:200,
				slideshow:5000,
				bannerShow:function(banner){
					banner.css({marginRight:-500}).stop().animate({marginRight:0}, 600)},
				bannerHide:function(banner){
					banner.stop().animate({marginRight:-500}, 600)}
			})
		})
	</script>
	</body>
</html>