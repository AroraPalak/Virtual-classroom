
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all"></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?php
$dateFormat = "d F Y -- g:i a";
$targetDate = time() + (15*60);//Change the 25 to however many minutes you want to countdown
$actualDate = time();
$secondsDiff = $targetDate - $actualDate;
$remainingDay	 = floor($secondsDiff/60/60/24);
$remainingHour	= floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))/60);
$remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))-($remainingMinutes*60));
$actualDateDisplay = date($dateFormat,$actualDate);
$targetDateDisplay = date($dateFormat,$targetDate);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quiz System</title>

<script type="text/javascript">
  var days = <?php echo $remainingDay; ?>  
  var hours = <?php echo $remainingHour; ?>  
  var minutes = <?php echo $remainingMinutes; ?>  
  var seconds = <?php echo $remainingSeconds; ?> 
function setCountDown ()
{
  seconds--;
  if (seconds < 0){
	  minutes--;
	  seconds = 59
  }
  if (minutes < 0){
	  hours--;
	  minutes = 59
  }
  if (hours < 0){
	  days--;
	  hours = 23
  }
  document.getElementById("remain").innerHTML = days+" days, "+hours+" hours, "+minutes+" minutes, "+seconds+" seconds";
  SD=window.setTimeout( "setCountDown()", 1000 );
  if (minutes == '00' && seconds == '00') { seconds = "00"; window.clearTimeout(SD);
//	document.write(<input type='submit' value='Submit Quiz' onClick = 'return confirm('Are you sure you want to submit the quiz?')'/>);
   		window.alert("Time is up. Press OK to continue."); // change timeout message as required
		//
		 document.forms[0].submit();
		
		 
 	} 

}

</script>
</head>
<body onload="setCountDown();" bgcolor="black">

 <font color="green">Start Time: <?php echo $actualDateDisplay; ?><br />
 End Time:<?php echo $targetDateDisplay; ?><br />
 <div id="remain"><?php echo "$remainingDay days, $remainingHour hours, $remainingMinutes minutes, $remainingSeconds seconds";?></div></font>

   


<form action="ans3.php" method="post" id="quiz">
<font color = '#5f870e'><h1><div align = 'center'><marquee>Maths Test</marquee> </h2></font></br></br>
<img src = "test.jpg" align = 'right'/>
<ol style="list-style-type:1">

   <font color = 'blue' size="5"><li><h3>The ratio of the number of boys and girls in a college is 7 : 8. If the percentage increase in the number of boys and girls be 20% and 10% respectively, what will be the new ratio?</h3></li>
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

    <div>
	    	<font color = '#5f870e' size="4">

        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
        <label for="question-1-answers-A">A) 8 : 9  </label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
        <label for="question-1-answers-B">B) 17 : 18  </label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
        <label for="question-1-answers-C">C) 21 : 22  </label>
    </div>
    	

    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
        <label for="question-1-answers-D">D) Cannot be determined </label>
    </div></font>
<li><h3>An observer 1.6 m tall is 203 away from a tower.The angle of elevation from his eye to the top of the tower is 30?. The heights of the tower is:</h3></li>
    
    <div>
		    	<font color = '#5f870e' size="4">

        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
        <label for="question-2-answers-A"> 21.6 m </label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
        <label for="question-2-answers-B">B) 23.2 m </label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
        <label for="question-2-answers-C">C) 24.72 m </label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
        <label for="question-2-answers-D">D) None of these </label>
    </div></font>
<li><h3>If 35 + 125 = 17.88, then what will be the value of 80 + 65 ?</h3></li>
    
    <div>
		<font color = '#5f870e' size="4">

        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
        <label for="question-3-answers-A">A) 13.41 </label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
        <label for="question-3-answers-B">B) 20.46 </label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
        <label for="question-3-answers-C">C) 21.66 </label>
    </div>
    
    <div>
         <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
        <label for="question-3-answers-D">D) 22.35 </label>
    </div></font>

<li><h3>Gauri went to the stationers and bought things worth Rs. 25, out of which 30 paise went on sales tax on taxable purchases. If the tax rate was 6%, then what was the cost of the tax free items?</h3></li>
    
    <div>
		<font color = '#5f870e' size="4">

        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
        <label for="question-4-answers-A">A) Rs. 15 </label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
        <label for="question-4-answers-B">B) Rs. 15.70 </label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
        <label for="question-4-answers-C">C) Rs. 19.70 </label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
        <label for="question-4-answers-D">D) Rs. 20 </label>
    </div></font>

<li><h3>A grocer has a sale of Rs. 6435, Rs. 6927, Rs. 6855, Rs. 7230 and Rs. 6562 for 5 consecutive months. How much sale must he have in the sixth month so that he gets an average sale of Rs. 6500?
</h3></li>
    
    <div>
		<font color = '#5f870e' size="4">

        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
        <label for="question-5-answers-A">A) Rs. 4991 </label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
        <label for="question-5-answers-B">B) Rs. 5991  </label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
        <label for="question-5-answers-C">C) Rs. 6001 </label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
        <label for="question-5-answers-D">D) Rs. 6991 </label>
    </div></font>

<li><h3>In a camp, there is a meal for 120 men or 200 children. If 150 children have taken the meal, how many men will be catered to with remaining meal?</h3></li>
    
    <div>
		<font color = '#5f870e' size="4">

        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
        <label for="question-6-answers-A">A) 20 </label>
    </div>
    
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
        <label for="question-6-answers-B">B) 30 </label>
    </div>
    
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
        <label for="question-6-answers-C">C) 40 </label>
    </div>
    
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
        <label for="question-6-answers-D">D) 50 </label>
    </div></font>

<li><h3>A wheel that has 6 cogs is meshed with a larger wheel of 14 cogs. When the smaller wheel has made 21 revolutions, then the number of revolutions mad by the larger wheel is:</h3></li>
    
    <div>
		<font color = '#5f870e' size="4">

        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
        <label for="question-7-answers-A">A) 4 </label>
    </div>
    
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
        <label for="question-7-answers-B">B) 9 </label>
    </div>
    
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
        <label for="question-7-answers-C">C) 12  </label>
    </div>
    
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
        <label for="question-7-answers-D">D) 49 </label>
    </div></font>

<li><h3>A number consists of two digits. If the digits interchange places and the new number is added to the original number, then the resulting number will be divisible by:</h3></li>
    
    <div>
		<font color = '#5f870e' size="4">

        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
        <label for="question-8-answers-A">A) 3 </label>
    </div>
    
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
        <label for="question-8-answers-B">B) 5 </label>
    </div>
    
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
        <label for="question-8-answers-C">C) 9 </label>
    </div>
    
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
        <label for="question-8-answers-D">D) 11 </label>
    </div>
</font>
</font>
</ol>
<div align = "center">
<input type="submit" value="Submit Quiz" style="font-size:15pt;color:white;background-color:green;border:2px solid #336600;padding:3px;height: 50px; width: 150px;" onClick = "return confirm('Are you sure you want to submit the quiz?')" /></div>
</form>
</body>
</html>