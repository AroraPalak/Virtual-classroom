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
   		window.alert("Time is up. Press OK to continue."); // change timeout message as requi#5f870e
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

   
<form action="ans1.php" method="post" id="quiz">
<font color = '#5f870e'><h1><div align = 'center'><marquee>English Test on Tenses</marquee> </h1></font></br></br>
<img src = "test.jpg" align = 'right'/>
<ol style="list-style-type:1">

    <font color = 'blue' size="5"><li><h3>Have you ever met Tom?" "Yes, we _____ at the concert.</h3></li>

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

    <font color = '#5f870e' size="4"><div>
        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
        <label for="question-1-answers-A">A) had met </label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
        <label for="question-1-answers-B">B) met </label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
        <label for="question-1-answers-C">C)  were meeting</label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
        <label for="question-1-answers-D">D) have met </label>
    </div>
	</font>
<li><h3><font color = 'blue' size="5">Television _____ only for the last fifty years.</font></h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
        <label for="question-2-answers-A">A) exists </label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
        <label for="question-2-answers-B">B) has existed</label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
        <label for="question-2-answers-C">C) is existing</label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
        <label for="question-2-answers-D">D) was existing</label>
    </div></font>
<li><h3><font color = 'blue' size="5">At the meeting yesterday the president _____ to solve he problem.</font></h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
        <label for="question-3-answers-A">A) promised</label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
        <label for="question-3-answers-B">B) had promised </label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
        <label for="question-3-answers-C">C) was promised </label>
    </div>
    
    <div>
         <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
        <label for="question-3-answers-D">D) has promised </label>
    </div></font>
<li><h3><font color = 'blue' size="5">I _____ anyone so amusingly absent-minded.</font></h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
        <label for="question-4-answers-A">A) could never known </label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
        <label for="question-4-answers-B">B) never know </label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
        <label for="question-4-answers-C">C) have never known </label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
        <label for="question-4-answers-D">D) has never known </label>
    </div></font>
<li><h3><font color = 'blue' size="5">Which sentence is correct?</font></h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
        <label for="question-5-answers-A">A) We've been here since two hours. </label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
        <label for="question-5-answers-B">B) We've been here for two hours.</label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
        <label for="question-5-answers-C">C) We are here since two hours.</label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
        <label for="question-5-answers-D">D) It's two hours we are here.</label>
    </div></font>
<li><h3><font color = 'blue' size="5">I've heard about the book, but I _____ it yet.</font></h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
        <label for="question-6-answers-A">A) haven't read correct </label>
    </div>
    
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
        <label for="question-6-answers-B">B) hadn't read </label>
    </div>
    
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
        <label for="question-6-answers-C">C) didn't read </label>
    </div>
    
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
        <label for="question-6-answers-D">D) don't read </label>
    </div></font>
<li><h3><font color = 'blue' size="5">This old man was a general in the war. Now he _____ on a pension.</font></h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
        <label for="question-7-answers-A">A) 's lived </label>
    </div>
    
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
        <label for="question-7-answers-B">B) lives </label>
    </div>
    
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
        <label for="question-7-answers-C">C) is living </label>
    </div>
    
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
        <label for="question-7-answers-D">D) 's been living </label>
    </div></font>
<li><h3><font color = 'blue' size="5">The last time _____ to the library was last week.</font></h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
        <label for="question-8-answers-A">A) I was </label>
    </div>
    
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
        <label for="question-8-answers-B">B) I have gone </label>
    </div>
    
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
        <label for="question-8-answers-C">C) I went </label>
    </div>
    
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
        <label for="question-8-answers-D">D) I have been </label>
    </div></font>
<li><h3><font color = 'blue' size="5">Why does this steak smell so strange?" "I _____ it, you know.</font></h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
        <label for="question-9-answers-A">A) have burnt </label>
    </div>
    
    <div>
        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
        <label for="question-9-answers-B">B) was burning </label>
    </div>
    
    <div>
        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
        <label for="question-9-answers-C">C) had burnt </label>
    </div>
    
    <div>
        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
        <label for="question-9-answers-D">D) burn </label>
    </div></h3></li></font>
    <li><h3><font color = 'blue' size="5">I don't remember what _____ last night at two a.m.</font></h3></li>
	<font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
        <label for="question-10-answers-A">A) I have been doing </label>
    </div>
    
    <div>
        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
        <label for="question-10-answers-B">B) I was doing </label>


    
    <div>
        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
        <label for="question-10-answers-C">C) was I doing </label>
    </div>
    
    <div>
        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
        <label for="question-10-answers-D">D) I done </label>
    </div></br>
	</font>
<div align = "center">
</form>
</body>
<input type="submit" value="Submit Quiz" style="font-size:15pt;color:white;background-color:green;border:2px solid #336600;padding:3px;height: 50px; width: 150px;" onClick = "return confirm('Are you sure you want to submit the quiz?')"/></div>

</html>


