<html>
<head></head>
<body bgcolor = "black">
<font color = "green" size="5">
<?php
$file = fopen("F:/xampp/htdocs/Vc/uploads/tenses.txt","r");

while(! feof($file))
  {
  echo fgets($file). "<br />";
  
  }
  

fclose($file);
?> 
</font>

<iframe width="854" height="510" src="https://www.youtube.com/embed/L99YoxPHNDc" frameborder="0" allowfullscreen></iframe>

</body>
</html>