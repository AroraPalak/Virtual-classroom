<?php
mysql_connect("localhost", "root", "");
mysql_select_db("registration");
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


<style>
h1 {
    font-size:300%;
}

h2 {
    font-size:150%;
}

p {
    font-size:100%;
}
</style>
</head>

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


<img src="blog12.png" width="1900" height="400" alt="no image available">


<div align="center" style="border:0px solid green">
<form action='palak.php' method='post'>
<h2><font color = "green">Name: <input type='text' name='name' /></font></h2>
<h2><font color = "green">Class: <input type='text' name='class' /></font></h2><br/>
<h2><font color = "green">Content: <textarea name="content" rows="5" cols="25" value=""></textarea></font></h2></font><br/><br/>
<input type='submit' name='submit' value='POST' style="font-size:15pt;color:white;background-color:green;border:2px solid #336600;padding:3px;height: 50px; width: 100px;"/>
</div>
<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$class = $_POST['class'];
$content = $_POST['content'];
mysql_query("INSERT INTO posts(name, class, content) VALUES('$name', '$class', '$content')");
//echo "Data has been posted, click <a href='palak.php'>here</a> to see it!";

}else{
?>



<?php
}
?>

<?php
$sql = mysql_query("SELECT * FROM posts ORDER BY id DESC");
while($row = mysql_fetch_array($sql)){
$name = $row['name'];
$class = $row['class'];
$content = $row['Content'];
?>

<table border='1'>

<tr><td><?php echo $name; ?></td></tr>
<tr><td><?php echo $class; ?></td></tr></br>
<tr><td><?php echo $content; ?></td></tr></br>
</table>


<?php
}
?>

</body>
</html>
