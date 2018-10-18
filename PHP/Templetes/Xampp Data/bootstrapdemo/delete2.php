<?php

$localhost="localhost";
$user="root";
$password="";
$database="demo1";
$conn=new mysqli($localhost,$user,$password,$database); 
$idd=$_GET["id"];
$q="delete from test1 where news_id=".$idd;
if($conn->query($q)===true)
{   
    header('location:delete1.php');

}
else
{
    echo "Not deleted succesfully";
}


?>