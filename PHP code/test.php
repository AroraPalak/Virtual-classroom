<!DOCTYPE html>
<!-- "test.php" 
		Page showing tests for registered courses.
-->
<?php
	session_start();
	Include('connect.php');
	$memid=$_SESSION['MEMID'];
	$val="SELECT * FROM reg WHERE MemId = '$memid' " or die(mysql_error());
	$res=mysql_query($val);
	$row= mysql_fetch_array($res) or die(mysql_error());
	$fname=$row['FirstName'];	$lname=$row['LastName'];	
	$class=$row['Class'];
?>
<html lang="en">
	<head>
		<title> Course Test </title>
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
	<body id="page3">
		<div class="main"> </br></br> <a class="style101">  E-Planet..! </a> <a class="style5">Get A Benefit For Yourself</a>
			<header>	</br></br> 
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
			</header>
			<article id="content"> </br></br>
<?php
	ob_start();
	echo' </br> <h3> <div align="center"> * To give test, select the course </div> </h3> </class> </br></br></br> ';
	$a="SELECT CourseName from course where MemID='$memid' ";
	$b=mysql_query($a) or die(mysql_error());
	echo '<newstyle class="style8"> ';
	while($row = mysql_fetch_array($b, MYSQL_ASSOC))
		{$sub= $row['CourseName'];		
		if($sub=='English')
			{if($class=='V')
				echo '<p class="pad_bot1"><a href="engV.php">English for Class V</a></p>';
			else if($class=='VI')
				echo '<p class="pad_bot1"><a href="engVI.php">English for Class VI</a></p>';
			else if($class=='VII')
				echo '<p class="pad_bot1"><a href="engVII.php">English for Class VII</a></p>';
			else if($class=='VIII')
				echo '<p class="pad_bot1"><a href="engVIII.php">English for Class VIII</a></p>';
			else if($class=='IX')
				echo '<p class="pad_bot1"><a href="engIX.php">English for Class IX</a></p>';
			else if($class=='X')
				echo '<p class="pad_bot1"><a href="engX.php">English for Class X</a></p>';
			else if($class=='XI')
				echo '<p class="pad_bot1"><a href="engXI.php">English for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="starttest.php">English for Class XII</a></p>';
			}
		if($sub=='Hindi')
			{if($class=='V')
				echo '<p class="pad_bot1"><a href="hinV.php">Hindi for Class V</a></p>';
			else if($class=='VI')
				echo '<p class="pad_bot1"><a href="hinVI.php">Hindi for Class VI</a></p>';
			else if($class=='VII')
				echo '<p class="pad_bot1"><a href="hinVII.php">Hindi for Class VII</a></p>';
			else if($class=='VIII')
				echo '<p class="pad_bot1"><a href="hinVIII.php">Hindi for Class VIII</a></p>';
			else if($class=='IX')
				echo '<p class="pad_bot1"><a href="hinIX.php">Hindi for Class IX</a></p>';
			else if($class=='X')
				echo '<p class="pad_bot1"><a href="hinX.php">Hindi for Class X</a></p>';
			else if($class=='XI')
				echo '<p class="pad_bot1"><a href="hinXI.php">Hindi for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="hinXII.php">Hindi for Class XII</a></p>';
			}
		if($sub=='Mathematics')
			{if($class=='V')
				echo '<p class="pad_bot1"><a href="mathV.php">Mathematics for Class V</a></p>';
			else if($class=='VI')
				echo '<p class="pad_bot1"><a href="starttest2.php">Mathematics for Class VI</a></p>';
			else if($class=='VII')
				echo '<p class="pad_bot1"><a href="mathVII.php">Mathematics for Class VII</a></p>';
			else if($class=='VIII')
				echo '<p class="pad_bot1"><a href="mathVIII.php">Mathematics for Class VIII</a></p>';
			else if($class=='IX')
				echo '<p class="pad_bot1"><a href="mathIX.php">Mathematics for Class IX</a></p>';
			else if($class=='X')
				echo '<p class="pad_bot1"><a href="mathX.php">Mathematics for Class X</a></p>';
			else if($class=='XI')
				echo '<p class="pad_bot1"><a href="mathXI.php">Mathematics for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="starttest2.php">Mathematics for Class XII</a></p>';
			}
		if($sub=='Science')
			{if($class=='V')
				echo '<p class="pad_bot1"><a href="sciV.php">Science for Class V</a></p>';
			else if($class=='VI')
				echo '<p class="pad_bot1"><a href="sciVI.php">Science for Class VI</a></p>';
			else if($class=='VII')
				echo '<p class="pad_bot1"><a href="sciVII.php">Science for Class VII</a></p>';
			else if($class=='VIII')
				echo '<p class="pad_bot1"><a href="sciVIII.php">Science for Class VIII</a></p>';
			else if($class=='IX')
				echo '<p class="pad_bot1"><a href="starttest1.php">Science for Class IX</a></p>';
			else if($class=='X')
				echo '<p class="pad_bot1"><a href="sciX.php">Science for Class X</a></p>';
			}
		if($sub=='Social Studies')
			{if($class=='V')
				echo '<p class="pad_bot1"><a href="sstV.php">Social Studies for Class V</a></p>';
			else if($class=='VI')
				echo '<p class="pad_bot1"><a href="sstVI.php">Social Studies for Class VI</a></p>';
			else if($class=='VII')
				echo '<p class="pad_bot1"><a href="sstVII.php">Social Studies for Class VII</a></p>';
			else if($class=='VIII')
				echo '<p class="pad_bot1"><a href="sstVIII.php">Social Studies for Class VIII</a></p>';
			else if($class=='IX')
				echo '<p class="pad_bot1"><a href="sstIX.php">Social Studies for Class IX</a></p>';
			else if($class=='X')
				echo '<p class="pad_bot1"><a href="sstX.php">Social Studies for Class X</a></p>';
			}
		if($sub=='Physics')
			{if($class=='XI')
				echo '<p class="pad_bot1"><a href="phyXI.php">Physics for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="phyXII.php">Physics for Class XII</a></p>';
			}
		if($sub=='Chemistry')
			{if($class=='XI')
				echo '<p class="pad_bot1"><a href="chemXI.php">Chemistry for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="chemXII.php">Chemistry for Class XII</a></p>';
			}
		if($sub=='Biology')
			{if($class=='XI')
				echo '<p class="pad_bot1"><a href="bioXI.php">Biology for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="bioXII.php">Biology for Class XII</a></p>';
			}
		if($sub=='Accounts')
			{if($class=='XI')
				echo '<p class="pad_bot1"><a href="accXI.php">Accounts for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="accXII.php">Accounts for Class XII</a></p>';
			}
		if($sub=='Economics')
			{if($class=='XI')
				echo '<p class="pad_bot1"><a href="ecoXI.php">Economics for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="ecoXII.php">Economics for Class XII</a></p>';
			}
		if($sub=='Business Studies')
			{if($class=='XI')
				echo '<p class="pad_bot1"><a href="bsXI.php">Business Studies for Class XI</a></p>';
			else if($class=='XII')
				echo '<p class="pad_bot1"><a href="bsXII.php">Business Studies for Class XII</a></p>';
			}
		}
	echo '</newstyle>';
?>	
			</article>
		</div>
		<script type="text/javascript"> Cufon.now(); </script>
	</body>
</html>