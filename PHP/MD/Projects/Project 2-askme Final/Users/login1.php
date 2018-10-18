<?php
if(isset($_POST["sub"]))
{
$uid=$_POST["email"];
$pass=$_POST["pass"];
require '../Shared/Classes/classusr.php';
$cnn=new usr_all;
$result=$cnn->loginselect($uid,$pass);

if($result->num_rows===1)
{
	
	$row=$result->fetch_assoc();
	//header('location:index.php');
		//$_SESSION["pass"]=$pass;
			//$row=$result->fetch_assoc();
				$_SESSION["id"]=$row["user_pk_email_id"];
	$_SESSION["name"]=$row["user_uname"];
	$id=$uid;
	$name=$row["user_uname"];
	$token=$row["user_token"];
	$flag="True";
	if($row["user_verify"]===$flag)
	{
	//	echo $row["user_verify"];
	$_SESSION["id"]=$row["user_pk_email_id"];
	$_SESSION["name"]=$row["user_uname"];
//	echo $_SESSION["id"];
//	echo $_SESSION["name"];
	header('location:index.php');
	}
	else
	{
		
		header('location:notverified.php');	
		echo "You had not verified your account.";
		
	echo "<h1>We had sent you verification mail.Kindly check your email and verify your account to proceed further.</h1>";
	
echo '<h1><p class="reset"><a tabindex="4" href="../Users/verifyrepeat.php?token='.$token.'&id='.$id.'&name='.$name.'" title="Click here to resend the email.">Resend Email.</a></p></h1>';

		
	}
}
else
{
	header('location:login1.php');
	echo "Enter Appropriate Password";
	//echo $uid,$pass;
}
	
}
else
{
	header('location:../index.php');
}


?>