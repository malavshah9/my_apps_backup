    <?php
	session_start();

	require '../Shared/Classes/classlike.php';
	$conn = new likeq();

    $id=$_POST['id'];
	$uid=$_SESSION["id"];
$result=$conn->insert($id,$uid);




?>


  