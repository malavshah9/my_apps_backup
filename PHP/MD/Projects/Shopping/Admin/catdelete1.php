<?php
require 'classcat.php';
$cnn=new cat_all;
$pid=$_GET["id1"];
$result=$cnn->deletebyid($pid);
if($result===true)
{
    /*echo "Success";*/
    header('location:tabcat.php');
}
else
{
    echo "Not Deleted";
}

?>