<?php
$localhost="localhost";
$user="root";
$password="";
$database="shopping_cart";
$conn=new mysqli($localhost,$user,$password,$database);
$pid=$_GET["id1"];
$qu="delete from  product where p_id='". $pid ."'";
if($conn->query($qu)===true)
{
    header('location:display.php');
}
else
{
    echo $qu;
}

?>