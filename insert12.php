<?php
mysql_connect("localhost", "root", "");
mysql_select_db("blogname");
?>
<html>
<head>
<style type="text/css">
<!--
body,td,th {
	font-size: 25px;
	color: darkgreen;
}
body 

{	
background-color: #FFFFFF;
.style1 {color: #FFCCFF}
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
h1 {
	font-size: 25px;
	color: darkgreen;
}
h2 {
	font-size: 20px;
}
h3 {
	font-size: 15px;
}

}
-->
</style></head>

<title>show me my blog</title>

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
</head>
<body>

}
<img src="blog12.png" width="1900" height="400" alt="no image available">
 <style type="text/css">
<!--
body {
	font-size: 25px;
	color: darkgreen;
<body>
<p>here is my blog</p>
</style>
<?php
$sql = mysql_query("SELECT * FROM posts ORDER BY id DESC");
while($row = mysql_fetch_array($sql)){
$name = $row['name'];
$class = $row['class'];
$content = $row['Content'];
?>
<table border='2'>
<tr><td><?php echo $name; ?></td></tr>
<hr>
<tr><td><?php echo $class; ?></td></tr>
<tr><td><?php echo $content; ?></td></tr>
</table>

<?php
}
?>

</form>
</body>
</html>
