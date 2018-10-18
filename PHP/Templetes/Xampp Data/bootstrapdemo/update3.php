<?php
$localhost="localhost";
$user="root";
$password="";
$database="demo1";
$conn=new mysqli($localhost,$user,$password,$database);
$_id=$_POST["newsid"];
$_title=$_POST["title"];
$_desc=$_POST["news_desc"];

$qu="update test1 set title='". $_title ."', news_desc='". $_desc ."' where news_id='". $_id ."'";
if($conn->query($qu)===true)
{
    header('location:delete1.php');
}

?>