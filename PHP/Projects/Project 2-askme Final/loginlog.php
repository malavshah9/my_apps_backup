<?php
session_start();
if(isset($_POST["login"]))
{
    $id=$_POST["email2"];
    $pass=$_POST["pass2"];
    require 'Shared/Classes/classusr.php';
    $cnn=new usr_all;
    $result=$cnn->loginselect($id,$pass);
    if($result->num_rows===1)
    {
        //Check if User had verified or not?
        $result=$cnn->isverified($id);
        if($result==true)
        {
            $_SESSION["id"]=$id;
            header('location:index.php');
        }
        else
        {
            header('location:usrverify.php?id='.$id);
        }
    }
    else
    {
        header('location:signup.php');
        echo "<h1> Kindly Check your username or password </h1>";
    }
    
}
?>
