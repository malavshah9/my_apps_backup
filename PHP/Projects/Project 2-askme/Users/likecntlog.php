    <?php
	session_start();
if(empty($_SESSION["id"]))
{
//	header('location:../Visitors/signup.php');
}
	require '../Shared/Classes/classlike.php';
	$conn = new likeq();

    $id=$_POST['id'];
//	$uid=$_SESSION["id"];
//$uid="mdshah9574@gmail.com";

$result=$conn->likecounter($id);
echo $result;




?>


  