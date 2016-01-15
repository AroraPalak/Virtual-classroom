<?php
// define variables and set to empty values
$FnameErr = $LnameErr = $AddressErr = $ContactNoErr = $EmailErr = $PasswordErr = $ReenterPasswordErr = $CourseErr =  "";
$Fname = $Lname = $Address = $ContactNo = $Email = $Password = $ReenterPassword = $Course = "";
$ctr=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	


function test_input($data)
 {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

//firstname

  if (empty($_POST["fname"])) {

     $FnameErr = "First Name is required";
	 $ctr++;
   } 
else {
     $Fname = test_input($_POST["fname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$Fname))
 {
       $FnameErr = "Only letters and white space allowed"; 
	   $ctr++;
     }
   }


//lname

 if (empty($_POST["lname"])) 
{
     $LnameErr = "last Name is required";
	 $ctr++;
   } 
else 
{
     $Lname = test_input($_POST["lname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$Lname)) 
{
       $LnameErr = "Only letters and white space allowed"; 
	   $ctr++;
     }
   }


//

if (empty($_POST["address"]))
 {
     $AddressErr = "Address is required";
	 $ctr++;
   }
 else 
{
     $Address = test_input($_POST["address"]);
	 
   }


//


   if (empty($_POST["contact"])) 
{
     $ContactNoErr = "contact number is required";
	 $ctr++;
   } 
else
 {
     $ContactNo = test_input($_POST["contact"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[0-9]*$/",$ContactNo))
  {
$ContactNoErr= "only numbers and whitespace allowed";
$ctr++;
 }
}

//

 if (empty($_POST["email"])) 
{
     $EmailErr = "Email is required";
	 $ctr++;
   } 
else 
{
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
       $EmailErr = "Invalid email format"; 
	   $ctr++;
     }
   }


//

      if (empty($_POST["password"]))
 {
     $PasswordErr = "password is required";
	 $ctr++;
}
else 
{
     $Password = test_input($_POST["password"]);
}



   if (empty($_POST["rpassword"]))
 {
     $ReenterPasswordErr = "password is required";
	 $ctr++;
}
else
{
if(test_input($_POST["rpassword"]) != test_input($_POST["password"]))
{
$ReenterPasswordErr = "password do not match";
$ctr++;
 }
else
{
$ReenterPassword = test_input($_POST["rpassword"]);
}
}
if(empty($_POST["chk1"])) {

     $CourseErr = "Course must be selected";
	 $ctr++;
   } 






//if no error found, write your sql query, so that data will be submitted.
//include connect.php page for database connection
Include('connect.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword=$_POST['rpassword'];
$dob = $_POST['dob'];
$class = $_POST['class'];
$course = $_POST['chk1'];

//write your sql code
if ($ctr==0){
$sql="insert into reg(FirstName,LastName,EmailId,Password,Address,ContactNo,DOB,Class) VALUES('$fname', '$lname', '$email', '$password', '$address', '$contact','$dob', '$class')";
$res=mysql_query($sql) or die(mysql_error());
$a="select MemID from reg where FirstName='$fname' ";
$b=mysql_query($a) or die(mysql_error());
while($row = mysql_fetch_array($b, MYSQL_ASSOC))
{
	$t=$row['MemID'];
}
for($i=0;$i<sizeof($course);$i++)
{
	
$sql1="insert into course(CourseName,MemID) VALUES('".$course[$i]."','$t') ";
$res1=mysql_query($sql1) or die(mysql_error());
}

if($res1 && $res)
{
echo "Record successfully inserted";
}
else
{
echo "There is some problem in inserting record";
}
}
}
?>

<html>
<head> 
     <title>registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">		
</head>
<body background="xyz.jpg">

<!---wrapper class is just a work as a large container -->
<div class="wrapper">

<!---main class is box contain for element  -->	
<div class="main">

<!---Change form width .formcls table {width: 1100px;}  and .formcls{width: 1100px;} -->	
	<form  id="form" class="formcls" name="reg" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	
	
	<table>
	<caption>Registration Form</caption>
	   <tr><th><draw><span class="error">* required field</span> </draw></th></tr>
	  
	  <tr>
	    <th><div align="right">First Name:</div></th>
	    <td ><input type="text" name="fname" value="<?php echo $Fname;?>" required /><span class="error">* <?php echo $FnameErr;?></span></td>

	  </tr>
	  <tr>
	    <th><div align="right">Last Name:</div></th>
	    <td><input type="text" name="lname" required /><span class="error">* <?php echo $LnameErr;?></span></td>

	  </tr>
	 
	  <tr>
	    <th><div align="right">Address:</div></th>
	    <td><textarea name="address" rows="5" cols="30" value="<?php echo $Address;?>"  required></textarea><span class="error">* <?php echo $AddressErr;?></span></td>

	  </tr>
	  <tr>
	    <th><div align="right">Contact No.:</div></th>
	    <td><input type="text" name="contact" required/><span class="error">* <?php echo $ContactNoErr;?></span></td>

	  </tr>
	
	 <tr>
	    <th><div align="right">Email Id:</div></th>
	    <td><input type="text" name="email" required /><span class="error">* <?php echo $EmailErr;?></span></td>

	  </tr>
	 <tr>
	    <th><div align="right">Password:</div></th>
	    <td><input type="password" name="password" required /><span class="error">* <?php echo $Password;?></span></td>
	  </tr>
 <tr>
	    <th><div align="right">Re-enter Password:</div></th>
	    <td><input type="password" name="rpassword" required /><span class="error">* <?php echo $ReenterPasswordErr;?></span></td>

	  </tr>
 <tr>
	    <th><div align="right">DOB:</div></th>
	    <td><input type="date" name="dob" /></td>
	  </tr>
<tr>

	    <th><div align="right">Select Class:</div></th>
	    <td><select name="class">
<option value= "V">V</option>
<option value= "VI">VI</option>
<option value= "VII">VII</option>
<option value= "VIII">VIII</option>
<option value= "IX">IX</option>
<option value= "X">X</option>
<option value= "XI">XI</option>
<option value= "XII">XII</option>

</td>
</tr>

<tr>
<th align="right">Select Courses:</th>
<td><div class="courselist"><ul >

<ol>
<label>English</label><input type="checkbox" style="width: 50px; height:15px" name="chk1[]" value="English">
</ol>
<ol><label>Hindi<input type="checkbox" style="width: 50px; height:15px" name="chk1[]" value="Hindi"></label></ol>
<ol><label>Mathematics</label><input type="checkbox" style="width: 50px; height:15px" name="chk1[]" value="Mathematics"></ol>
<ol><label>Social Studies</label><input type="checkbox" style="width: 50px; height:15px" name="chk1[]" value="Social Studies"></ol>
<ol><label>Science</label><input type="checkbox" style="width: 50px; height:15px" name="chk1[]" value="Science"></ol>
<ol><label>Biology</label><input type="checkbox"  style="width: 50px; height:15px" name="chk1[]" value="Biology"></ol>
<ol><label>Chemistry</label><input type="checkbox"  style="width: 50px; height:15px"name="chk1[]" value="Chemistry"></ol>
<ol><label>Physics</label><input type="checkbox"  style="width: 50px; height:15px" name="chk1[]" value="Physics"></ol>
<ol><label>Accounts</label><input type="checkbox"  style="width: 50px; height:15px" name="chk1[]" value="Accounts"></ol>
<ol><label>Business Studies</label><input type="checkbox" style="width: 50px; height:15px" name="chk1[]" value="Business Studies"></ol>
<ol><label>Economics</label><input type="checkbox" style="width: 50px; height:15px" name="chk1[]" value="Economics"></ol>

</ul>
</div>
</td>
 </tr>
 
  
        <tr>
	<th></th>
	    <td><input name="submit" id="sub-btn" type="submit" value="Register"> </td>
	  </tr>
</table>

	

	 


	</form>
	</div>
	</div>
</body>
</html>
