<?php
session_start();
/*if(!(empty($_SESSION["name"])))
	{
		header('location:../Users/userprofile.php');
	}*/
require 'Shared/Classes/classusr.php';
if(isset($_POST["verify"]))
{
$id=$_GET["id"];
	$conn=new usr_all;
	$result=$conn->selectbyid($id);
	$row=$result->fetch_assoc();
	$token=$row["user_token"];
	$name=$row["user_uname"];
		$conn->verify($id,$name,$token);
		header('location:usrverify.php');
}
?>