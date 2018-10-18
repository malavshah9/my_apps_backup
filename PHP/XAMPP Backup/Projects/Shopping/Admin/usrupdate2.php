<?php
session_start();
require 'classusr.php';
$cnn=new usr_all;

   $i=$_POST["id"];
  
        $nam=$_POST["nm"];
        $mo=$_POST["mob"];
        $ad=$_POST["ad"];
        $im=$_POST["im"];
        $ge=$_POST["ge"];
        $result=$cnn->update($i,$nam,$mo,$ad,$im,$ge);
if($result===true)
{
    header('location:tabusr.php');
}
else
{
    
}
?>