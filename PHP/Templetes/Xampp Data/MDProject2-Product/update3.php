<?php
$localhost="localhost";
$user="root";
$password="";
$database="shopping_cart";
$conn=new mysqli($localhost,$user,$password,$database);
$img=$_POST["img"];
$pid=$_POST["pid"];
$pname=$_POST["pname"];
$pcolor=$_POST["pcolor"];
$pprice=$_POST["pprice"];
$manu=$_POST["manu"];
$war=$_POST["warr"];
$qua=$_POST["quant"];
$qu="update product set p_name='". $pname ."', p_color='". $pcolor  ."', p_price='". $pprice  ."', manuf='". $manu  ."', warranty='". $war  ."', soh='". $qua  ."', img='". $img  ."' where p_id='". $pid ."'";
if($conn->query($qu)===true)
{
    header('location:display.php');
}
else
{
    echo $qu;
}

?>