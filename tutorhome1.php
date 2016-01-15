<!DOCTYPE html>
<?php
	session_start();
	Include('connect.php');
	$techid=$_SESSION['TECHID'];
	$val="SELECT * FROM teacher WHERE TechID = '$techid' " or die(mysql_error());
	$res=mysql_query($val);
	$row= mysql_fetch_array($res) or die(mysql_error());
	$fname=$row['FirstName'];	$lname=$row['LasttName'];		
?>
<html lang="en">
	<head>
		<title> Tutor's Homepage</title>
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
.style1 {
	font-size: 18px;
	color: #5f870e;
}
.style101 {font-size: 50px; color: #FF0000; }
.style4 {font-size: 24px}
.style5 {font-size: 24px; color: #5f870e; }
.style6 {color: #FF0000}
.style7 {font-size: 35px; color: #5f870e;}
-->
        </style>
</head>
	<body id="page1">
		<div class="main"></br></br> <a class="style101">  E-Planet..! </a> <a class="style5">Get A Benefit For Yourself</a>
<!--header -->
			<header>
			<div class="wrapper">
				<form id="search" method="post">
					<fieldset>
						 <div id="header_right">
							<h4><a href="logout.php">Log Out</a> </h4>
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
						<li class="active"><a href="tutorhome1.php"><span>Homepage</span></a></li>
						<li><a href="courses1.php"><span>Study Material</span></a></li>
						<li class="last"><a href="palak.php"><span>Solve Queries</span></a></li>

					</ul>
				</nav>				
				<p class="style5">
				  <marquee behavior="alternate">
			      Welcome Tutor to <blink> E-Planet...! </blink>
				  </marquee> 
			  </p>
			  
	<img src="virtual_classroom.jpg" alt=" " align="center">
			</header>		
<!--header end-->
		</div>
<!--content -->

		<script type="text/javascript"> Cufon.now(); </script>
	</body>
</html>