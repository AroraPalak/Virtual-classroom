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
    
if ($answer1 == "A") 
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

if ($answer3 == "C") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer4 == "D") 
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

if ($answer6 == "C") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer7 == "C") 
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

if ($answer9 == "D") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

if ($answer10 == "C") 
{ 
$totalCorrect++;
}
else
{
 $totalIncorrect++;
}

    
      echo "<h3>";
       echo "<div align = 'center' id='results'>'Total Correct Answers :' $totalCorrect </div>";
    echo "<div align = 'center' id='results'>'Total Incorrect Answers :' $totalIncorrect </div>";
    echo "<div align = 'center' id='results'>'Total Marks :' $totalCorrect/10 </div>";
    echo "</h3>";
    
?>