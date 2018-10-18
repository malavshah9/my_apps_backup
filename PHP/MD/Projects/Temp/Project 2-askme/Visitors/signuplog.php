<?php
   session_start();
    require '../Shared/Classes/classusr.php';
     
if(isset($_POST["signup"]))
{
    $nm=$_POST["nm"];
    $id=$_POST["email1"];
    $pass=$_POST["pass1"];
    $token=substr((md5(rand())),0,10);
    $cnn=new usr_all;
    $result=$cnn->insert($id,$nm,$pass,$token);
    if($result===true)
    {
        $_SESSION["id"]=$id;
        $cnn->verify($id,$nm,$token);
        header('location:signup1.php');
    }
    else
    {
        echo "Not Successfully";
      // header('location:signup.php');
    }

}
else if(isset($_POST["skip"]))
{
    $conn=new usr_all;

           $result=$conn->isverified($id);
        if($result==true)
        {
            $_SESSION["id"]=$id;
            header('location:index.php');
        }
        else
        {
            header('location:usrverify.php?id='.$id);
        }
 
//User Verify
}
else if(isset($_POST["next"]))
{
    $gen=$_POST["gen"];
    $mob=$_POST["mob"];
    $img=null;
   // $img=$_FILES["txtphoto"]["name"];
    $cn=new usr_all;
   $id=$_SESSION["id"];
    $result=$cn->insert1($id,$gen,$mob,$img);
    if($result==true)
    {
               $result=$cn->isverified($id);
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
        header('location:signup1.php');
        echo "<h1>Kindly Check Details</h1>";
    }

}
else
{

}


?>
