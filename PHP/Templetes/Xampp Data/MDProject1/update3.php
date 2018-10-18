<?php
$localhost="localhost";
$user="root";
$password="";
$database="demo1";
$conn=new mysqli($localhost,$user,$password,$database);
$rollno=$_POST["rollno"];
$name=$_POST["name"];
$mobileno=$_POST["mobileno"];
$fees=$_POST["fees"];
$year=$_POST["sl1"];
$gender=$_POST["rd1"];


$qu="update student_tbl set roll_no='". $rollno ."', name='". $name ."', mobile_no='". $mobileno  ."', fees='". $fees  ."', gender='". $gender  ."', year='". $year  ."' where roll_no='". $rollno ."'";
if($conn->query($qu)===true)
{
    header('location:update1.php');
}
else
{
    echo $qu;
}

?>