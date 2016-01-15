
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

   

<form action="ans2.php" method="post" id="quiz">
<font color = '#5f870e'><h1><div align = 'center'><marquee>Science Test</marquee></h1></font></br></br>
<img src = "test.jpg" align = 'right'/>
<ol style="list-style-type:1">

    <font color = 'blue' size="5"><li><h3>What is the formula for a solid state at room temperature?
</h3></li>
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
        <label for="question-1-answers-A">A) 
Hg </label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
        <label for="question-1-answers-B">B) NH3 (g) </label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
        <label for="question-1-answers-C">C) CaCO3 (s)</label>
    </div>
    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
        <label for="question-1-answers-D">D) NaCl (aq) </label>
    </div></font>
<li><h3>Which of these properties are radioactive?</h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
        <label for="question-2-answers-A">A) Actinides </label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
        <label for="question-2-answers-B">B)
 Metalloids </label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
        <label for="question-2-answers-C">C) 
Halogens
 </label>
    </div>
    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
        <label for="question-2-answers-D">D) Lanthanides
 </label>
    </div></font>
<li><h3>What is a compound?</h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
        <label for="question-3-answers-A">A) a pure substance made up of one type of atom
 </label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
        <label for="question-3-answers-B">B) pure substances made up of 2 or more types of atoms </label>
    </div>
    
    <div>
        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
        <label for="question-3-answers-C">C) 
made up of 10 atoms
 </label>
    </div>
    
    <div>
         <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
        <label for="question-3-answers-D">D) two words in one word </label>
    </div></font>
<li><h3> Which of these properties are all non-metals and tend to create salts with metals? </h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
        <label for="question-4-answers-A">A) 
Lanthanides
 </label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
        <label for="question-4-answers-B">B) Halogens </label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
        <label for="question-4-answers-C">C)
 Metalloids </label>
    </div>
    
    <div>
        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
        <label for="question-4-answers-D">D) 
Noble Gases </label>
    </div></font>
<li><h3> NaHCO3 indicates one molecule of baking soda and best represents the _____ for baking soda. </h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
        <label for="question-5-answers-A">A) chemical name </label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
        <label for="question-5-answers-B">B) chemical equation
 </label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
        <label for="question-5-answers-C">C) chemical formula </label>
    </div>
    
    <div>
        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
        <label for="question-5-answers-D">D) 
chemical symbol </label>
    </div></font>
<li><h3> Which of these properties are uncreative, colourless and odourless in room temperature? </h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
        <label for="question-6-answers-A">A) Metalloids </label>
    </div>
    
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
        <label for="question-6-answers-B">B) 
Halogens
 </label>
    </div>
    
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
        <label for="question-6-answers-C">C) Noble Gases
 </label>
    </div>
    
    <div>
        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
        <label for="question-6-answers-D">D) Oxygen </label>
    </div></font>
<li><h3> Which of these mixtures are easily separated with a filter and is a cloudy mixture? </h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
        <label for="question-7-answers-A">A) Colloids
 </label>
    </div>
    
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
        <label for="question-7-answers-B">B) Suspensions
 </label>
    </div>
    
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
        <label for="question-7-answers-C">C) Solutions </label>
    </div>
    
    <div>
        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
        <label for="question-7-answers-D">D) 
Mechanical Mixture </label>
    </div></font>
<li><h3>A chemistry poster indicated information on the number of particles in a newly discovered atom. According to the information in the poster the atomic number is: Protons: 113  Electrons: 113  Neutrons: 281 </h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
        <label for="question-8-answers-A">A) 113 </label>
    </div>
    
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
        <label for="question-8-answers-B">B) 
226
 </label>
    </div>
    
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
        <label for="question-8-answers-C">C) 394 </label>
    </div>
    
    <div>
        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
        <label for="question-8-answers-D">D) 
507
9 </label>
    </div></font>
<li><h3>Which of these properties are extremely reactive and are silvered coloured and shiny?
</h3></li>
    <font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
        <label for="question-9-answers-A">A) Transition Metals
 </label>
    </div>
    
    <div>
        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
        <label for="question-9-answers-B">B) Alkaline-earth Metals
 </label>
    </div>
    
    <div>
        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
        <label for="question-9-answers-C">C) Alkali Metals </label>
    </div>
    
    <div>
        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
        <label for="question-9-answers-D">D) 
Halogens </label>
    </div></font>
    <li><h3>What is an atom?</h3></li>
	<font color = '#5f870e' size="4">
    <div>
        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
        <label for="question-10-answers-A">A) 
largest part of a element
 </label>
    </div>
    
    <div>
        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
        <label for="question-10-answers-B">B) smallest part of a element
  </label>


    
    <div>
        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
        <label for="question-10-answers-C">C) larger than a substance
 </label>
    </div>
    
    <div>
        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
        <label for="question-10-answers-D">D) part of the nucleus </label>
    </div></font></br>
<div align = "center">
<input type="submit" value="Submit Quiz" style="font-size:15pt;color:white;background-color:green;border:2px solid #336600;padding:3px;height: 50px; width: 150px;"onClick = "return confirm('Are you sure you want to submit the quiz?')" /></div>
</form>
</body>
</html>