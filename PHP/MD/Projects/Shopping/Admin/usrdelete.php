<?php
require 'classusr.php';
$cnn=new usr_all;
$pid=$_GET["id1"];
$result=$cnn->deletebyid($pid);
if($result===true)
{
    /*echo "Success";*/
    header('location:tabusr.php');
}
else
{
    echo "Not Deleted";
}

?>