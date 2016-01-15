<!DOCTYPE html>
<!-- "courses.php" 
		Page showing student's registered courses.
-->
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
		<title> My Courses </title>
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
			.style8 {font-size: 27px; color: #5f870e;}
			-->
        </style>
	</head>
	<body id="page2">
		<div class="main"> </br></br> <a class="style101">  E-Planet..! </a> <a class="style5">Get A Benefit For Yourself</a>
			<header>	</br></br> 
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
			</header>
			<article id="content"> </br></br>
<?php
	ob_start();
	echo' </br> <h3> <div align="center"> * Select the course to upload the study material </div> </h3> </class> </br></br></br> ';
	$a="SELECT Course,class from teacourse where TechID='$techid' ";
	$b=mysql_query($a) or die(mysql_error());

	echo '<newstyle class="style8"> ';
	while($row = mysql_fetch_array($b, MYSQL_ASSOC))
	{
		$sub= $row['Course'];	
		$class=$row['class'];
		
		if($sub=='English')
			{if($class=='V')
				echo '<p class="pad_bot1"><a href="upengV.php">English for Class V</a></p>';
			else if($class=='VI')
				echo '<p class="pad_bot1"><a href="upengVI.php">English for Class VI</a></p>';
			else if($class=='VII')
				echo '<p class="pad_bot1"><a href="upengVII.php">English for Class VII</a></p>';
			else if($class=='VIII')
				echo '<p class="pad_bot1"><a href="upengVIII.php">English for Class VIII</a></p>';
			else if($class=='IX')
				echo '<p class="pad_bot1"><a href="upengIX.php">English for Class IX</a></p>';
			else if($class=='X')
				echo '<p class="pad_bot1"><a href="upengX.php">English for Class X</a></p>';
			else if($class=='XI')
				echo '<p class="pad_bot1"><a href="upengXI.php">English for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="upengXII.php">English for Class XII</a></p>';
			}
		if($sub=='Hindi')
			{if($class=='V')
				echo '<p class="pad_bot1"><a href="uphinV.php">Hindi for Class V</a></p>';
			else if($class=='VI')
				echo '<p class="pad_bot1"><a href="uphinVI.php">Hindi for Class VI</a></p>';
			else if($class=='VII')
				echo '<p class="pad_bot1"><a href="uphinVII.php">Hindi for Class VII</a></p>';
			else if($class=='VIII')
				echo '<p class="pad_bot1"><a href="uphinVIII.php">Hindi for Class VIII</a></p>';
			else if($class=='IX')
				echo '<p class="pad_bot1"><a href="uphinIX.php">Hindi for Class IX</a></p>';
			else if($class=='X')
				echo '<p class="pad_bot1"><a href="uphinX.php">Hindi for Class X</a></p>';
			else if($class=='XI')
				echo '<p class="pad_bot1"><a href="uphinXI.php">Hindi for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="uphinXII.php">Hindi for Class XII</a></p>';
			}
		if($sub=='Mathematics')
			{if($class=='V')
				echo '<p class="pad_bot1"><a href="upmathV.php">Mathematics for Class V</a></p>';
			else if($class=='VI')
				echo '<p class="pad_bot1"><a href="upmathVI.php">Mathematics for Class VI</a></p>';
			else if($class=='VII')
				echo '<p class="pad_bot1"><a href="upmathVII.php">Mathematics for Class VII</a></p>';
			else if($class=='VIII')
				echo '<p class="pad_bot1"><a href="upmathVIII.php">Mathematics for Class VIII</a></p>';
			else if($class=='IX')
				echo '<p class="pad_bot1"><a href="upmathIX.php">Mathematics for Class IX</a></p>';
			else if($class=='X')
				echo '<p class="pad_bot1"><a href="upmathX.php">Mathematics for Class X</a></p>';
			else if($class=='XI')
				echo '<p class="pad_bot1"><a href="upmathXI.php">Mathematics for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="upmathXII.php">Mathematics for Class XII</a></p>';
			}
		if($sub=='Science')
			{if($class=='V')
				echo '<p class="pad_bot1"><a href="upsciV.php">Science for Class V</a></p>';
			else if($class=='VI')
				echo '<p class="pad_bot1"><a href="upsciVI.php">Science for Class VI</a></p>';
			else if($class=='VII')
				echo '<p class="pad_bot1"><a href="upsciVII.php">Science for Class VII</a></p>';
			else if($class=='VIII')
				echo '<p class="pad_bot1"><a href="upsciVIII.php">Science for Class VIII</a></p>';
			else if($class=='IX')
				echo '<p class="pad_bot1"><a href="upsciIX.php">Science for Class IX</a></p>';
			else if($class=='X')
				echo '<p class="pad_bot1"><a href="upsciX.php">Science for Class X</a></p>';
			}
		if($sub=='Social Studies')
			{if($class=='V')
				echo '<p class="pad_bot1"><a href="upsstV.php">Social Studies for Class V</a></p>';
			else if($class=='VI')
				echo '<p class="pad_bot1"><a href="upsstVI.php">Social Studies for Class VI</a></p>';
			else if($class=='VII')
				echo '<p class="pad_bot1"><a href="upsstVII.php">Social Studies for Class VII</a></p>';
			else if($class=='VIII')
				echo '<p class="pad_bot1"><a href="upsstVIII.php">Social Studies for Class VIII</a></p>';
			else if($class=='IX')
				echo '<p class="pad_bot1"><a href="upsstIX.php">Social Studies for Class IX</a></p>';
			else if($class=='X')
				echo '<p class="pad_bot1"><a href="upsstX.php">Social Studies for Class X</a></p>';
			}
		if($sub=='Physics')
			{if($class=='XI')
				echo '<p class="pad_bot1"><a href="upphyXI.php">Physics for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="upphyXII.php">Physics for Class XII</a></p>';
			}
		if($sub=='Chemistry')
			{if($class=='XI')
				echo '<p class="pad_bot1"><a href="upchemXI.php">Chemistry for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="upchemXII.php">Chemistry for Class XII</a></p>';
			}
		if($sub=='Biology')
			{if($class=='XI')
				echo '<p class="pad_bot1"><a href="upbioXI.php">Biology for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="upbioXII.php">Biology for Class XII</a></p>';
			}
		if($sub=='Accounts')
			{if($class=='XI')
				echo '<p class="pad_bot1"><a href="upaccXI.php">Accounts for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="upaccXII.php">Accounts for Class XII</a></p>';
			}
		if($sub=='Economics')
			{if($class=='XI')
				echo '<p class="pad_bot1"><a href="upecoXI.php">Economics for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="upecoXII.php">Economics for Class XII</a></p>';
			}
		if($sub=='Business Studies')
			{if($class=='XI')
				echo '<p class="pad_bot1"><a href="upbsXI.php">Business Studies for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="upbsXII.php">Business Studies for Class XII</a></p>';
			}
		}
	echo '</newstyle>';
?>	
			</article>
		</div>
		<script type="text/javascript"> Cufon.now(); </script>
	</body>
</html>