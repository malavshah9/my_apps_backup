<?php
session_start();
if(isset($_POST["post"]))
{
  $frompage=$_SERVER['HTTP_REFERER'];
    require '../Shared/Classes/classans.php';
    if(empty($_SESSION["id"]))
    {
        header('location:../Visitors/signup.php');
    }
    else
    {
        $qid=$_GET["id"];
        $conn=new ans();
        $ans=$_POST["ans_desc"];
        //$img=$_POST["txtphoto"];
        $img=null;
        $uid=$_SESSION["id"];
   date_default_timezone_set('Asia/Kolkata');
$date =  date("F , j , M ,Y  g:i a T");
$result=$conn->insert($ans,$img,$uid,$qid,$date);
if($result===true)
{
    header('location:'.$frompage);
}
else
{
    header('location:'.$frompage);
      
}


    }
}
?>