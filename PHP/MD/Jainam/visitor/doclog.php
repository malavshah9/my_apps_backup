	<?php
      session_start();
	if(isset($_POST["sub"]))
	{
	$id=$_POST["eid"];
	$pass=$_POST["pass"];
	require '../Shared/classes/classdoc.php';
$cnn=new doc_all;
$result=$cnn->loginselect($id,$pass);
    
    
if($result->num_rows===1)
{
	
	$row=$result->fetch_assoc();
	
	/*	$_SESSION["eid"]=$id;*/
		
	$id=$id;
	$name=$row["doc_name"];
	$token=$row["doc_token"];
	$flag=1;
	if($row["doc_verify"]==$flag)
	{
	//	echo $row["user_verify"];
	$_SESSION["id"]=$id;
	$_SESSION["pass"]=$row["doc_pass"];
		
	header('location:../visitor/index.php');
	}
	else
	{
		
	//	header('location:notverified.php');	
		echo "You had not verified your account.";
		
	echo "<h1>We had sent you verification mail.Kindly check your email and verify your account to proceed further.</h1>";
	
echo '<h1><p class="reset"><a tabindex="4" href="../doctor_mst/verifyrepeat.php?token='.$token.'&eid='.$id.'&name='.$name.'" title="Click here to resend the email.">Resend Email.</a></p></h1>';

		
	}
} 
	else
	{
		//header('location:doclog.php');
		echo "Enter Appropriate Password";
		echo "<br>";
		echo $id;
		echo "<br>";
		echo $pass;
	}
		
}	

	else
	{
		//header('location:../visitor/index.php');
		
	}

	
    
    ?>