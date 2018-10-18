    <?php
	session_start();
	require '../Shared/Classes/classq.php';
		 if(empty($_SESSION["id"]))
		 {
			 header('location:../Visitors/signup.php');
		 }
		 else
		 {
		 if(isset($_POST["post"]))
		 {
		  $frompage=$_SERVER['HTTP_REFERER'];
		$catid=$_POST["selectsubject"];
		$qtitle=$_POST["qtitle"];
		//$img=$_FILES["txtphoto"]["name"];
		 date_default_timezone_set('Asia/Kolkata');
$date =  date("F , j , M ,Y  g:i a T");
		$img=null;
		$uid=$_SESSION["id"];
		$qdesc=$_POST["q_desc"];
		$cnn=new q();
		$result=$cnn->insert($qtitle,$qdesc,$img,$uid,$date,$catid);
if($result===true)
{
    header('location:../Visitors/index.php');
}
else
{
    header('location:'.$frompage);
      
}
		 }
		 }
		 ?>