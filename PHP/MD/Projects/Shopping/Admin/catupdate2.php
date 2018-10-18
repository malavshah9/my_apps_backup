<?php
session_start();
require 'classcat.php';
$cnn=new cat_all;

   $i=$_POST["id"];
  
        $nam=$_POST["nm"];
        $result=$cnn->update($i,$nam);
if($result===true)
{
    header('location:tabcat.php');
}
else
{
    
}
?>