<!-- "loginvalid.php" 
		Page showing validation for student login. It links studl.php and main.php.
-->
<?php
session_start();
$EmailErr = $PasswordErr = $err = "";
$email = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{function test_input($data)
		{$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
	if (empty($_POST["emailid"])) 
		{$EmailErr = "Email is required... If new user click on registration";
					echo $EmailErr;

		} 
	else 
		{$email = test_input($_POST["emailid"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				$EmailErr = "Invalid email format"; 
				echo $EmailErr;
			}
		}
	if (empty($_POST["password"]))
		{$PasswordErr = "password is required";
							echo $PasswordErr;

		}
		
	else 
		{$password = test_input($_POST["password"]);
		}
	Include('connect.php');
	$email = $_POST['emailid'];
	$password = $_POST['password'];
	$val="SELECT * FROM reg WHERE EmailId = '$email' && Password='$password'" or die(mysql_error());
	$res=mysql_query($val);
	$row= mysql_fetch_array($res) or die(mysql_error());
	$MEMID = $row['MemID'];
	if($row["EmailId"]==$email && $row["Password"]==$password)
		{$_SESSION['MEMID']=$MEMID; 
		header('Location: http://localhost/vc/main.php');
		}
	else {
		
		echo "Invalid email/password";
	}
	}
?>
