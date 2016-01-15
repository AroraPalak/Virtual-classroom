<html>
<head></head>
<h1><font color="#5f870e"><marquee> Results..!!</marquee></font></h1></br></br></br>
<body bgcolor = "black">
<img src = "ans.jpg" align = 'right'/>
<form>
<input type="hidden" name="question-1-answers"  value="0" />
<input type="hidden" name="question-2-answers"  value="0" />
<input type="hidden" name="question-3-answers"  value="0" />
<input type="hidden" name="question-4-answers"  value="0" />
<input type="hidden" name="question-5-answers"  value="0" />
<input type="hidden" name="question-6-answers"  value="0" />
<input type="hidden" name="question-7-answers"  value="0" />
<input type="hidden" name="question-8-answers"  value="0" />
<input type="hidden" name="question-9-answers"  value="0" />
<input type="hidden" name="question-10-answers"  value="0" />
</body>
</form>
</html>
<?php
    
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];
    $answer7 = $_POST['question-7-answers'];
    $answer8 = $_POST['question-8-answers'];
    $answer9 = $_POST['question-9-answers'];
    $answer10 = $_POST['question-10-answers'];
   

    $totalCorrect = 0;
    $totalIncorrect = 0;
    
if ($answer1 == "B") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer2 == "B") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer3 == "A") 
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

if ($answer5 == "B") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer6 == "A") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer7 == "B") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer8 == "C") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer9 == "A") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer10 == "B") 
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
    echo "<div align = 'center' id='results'>Total Marks : $totalCorrect/10 </font></div>";
    echo "</h3>";
    ?>
	
<html>
<head></head>
<form action = "ans11.php">
<center><input type="submit" value="Show Answers" style="font-size:15pt;color:white;background-color:green;border:2px solid #336600;padding:3px;height: 50px; width: 150px;"></center>
</form>

</html>

