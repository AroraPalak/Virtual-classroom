<?php
// define variables and set to empty values
$EmailErr = $PasswordErr = "";
$email = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	


function test_input($data)
 {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


if (empty($_POST["emailid"])) 
{
     $EmailErr = "Email is required... If new user click on registration";
	 	   					echo $EmailErr;

   } 
else 
{
     $email = test_input($_POST["emailid"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
       $EmailErr = "Invalid email format";
	   					echo $EmailErr;
	   
     }
   }


//

      if (empty($_POST["password"]))
 {
     $PasswordErr = "password is required";
	 							echo $PasswordErr;

}
else 
{
     $password = test_input($_POST["password"]);
}


Include('connect.php');


$email = $_POST['emailid'];
$password = $_POST['password'];



//write your sql code
$val="SELECT * FROM admin WHERE UserName = '$email'" or die(mysql_error());
$res=mysql_query($val);
$row= mysql_fetch_array($res) or die(mysql_error());
if($row["UserName"]==$email && $row["Password"]==$password)
{
	header('Location: http://localhost/Vc/adminhp.php');

}
else
{
echo "Invalid email id and/or password";
}
}
?>
