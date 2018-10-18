<?php
session_start();
if(!(empty($_SESSION["name"])))
	{
		header('location:../SignInUsers/usrpro.php');
	}
require '../Shared/Classes/classusr.php';

$id=$_GET["id"];
	$name=$_GET["name"];
	$token=$_GET["token"];
	$conn=new usr_all;
		$conn->verify($id,$name,$token);
		header('location:../Visitors/usrloginandregister.php');

?>