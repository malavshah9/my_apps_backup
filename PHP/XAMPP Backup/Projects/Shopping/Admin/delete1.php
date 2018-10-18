<?php
require 'classpro.php';
$cnn=new product_all;

$pid=$_GET["id1"];
$result=$cnn->deletebyid($pid);
if($result===true)
{
    header('location:tabpro.php');
}
else
{
    echo $qu;
}

?>