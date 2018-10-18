   <?php
	session_start();
	require '../Shared/Classes/classlike.php';
	$conn = new likeq();
$id=$_POST["idc"];


	$uid=$_SESSION["id"];
$result=$conn->delete($id,$uid);


  
		 ?>