<html>
<head></head>
<h1><font color="#5f870e"><marquee> Results..!!</marquee></font></h1></br></br></br>
<body bgcolor = "black">
<img src = "ans.jpg" align = 'right'/>
<?php
   
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];
    $answer7 = $_POST['question-7-answers'];
    $answer8 = $_POST['question-8-answers'];
   
    $totalCorrect = 0;
    $totalIncorrect = 0;
    
if ($answer1 == "C") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer2 == "A") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer3 == "D") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer4 == "C") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer5 == "A") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer6 == "B") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer7 == "D") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer8 == "D") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}


    
      echo "<h3>";
       echo "<div align = 'center' id='results'> <font color = 'blue' size= '6'>Total Correct Answers : $totalCorrect </div>";
    echo "<div align = 'center' id='results'>Total Incorrect Answers : $totalIncorrect </div>";
    echo "<div align = 'center' id='results'>Total Marks : $totalCorrect/8 </font></div>";
    echo "</h3>";
    
?>
<html>
<head></head>
<form action = "ans33.php">
<center><input type="submit" value="Show Answers" style="font-size:15pt;color:white;background-color:green;border:2px solid #336600;padding:3px;height: 50px; width: 150px;"></center>
</form>

</html>
