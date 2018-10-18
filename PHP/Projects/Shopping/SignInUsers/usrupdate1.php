<?php
session_start();
?>
<?php

    $i=$_SESSION["id"];
  require '../Shared/Classes/classusr.php';
$im=$_GET["img"];
        $nam=$_POST["nm"];
        $mo=$_POST["mob"];
        $ad=$_POST["ad"];
        $ge=$_POST["gen"];
        $conn=new usr_all;
        $imgg=$_FILES["txtphoto"]["name"];
if($imgg==="")
{
    $img=$im;
}
else
{
    unlink($im);
    $target_dir="../Shared/User Profile Pics/";
$target_file=$target_dir.basename($_FILES["txtphoto"]["name"]);
if(move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$target_file))
{
    $img=$target_file;
    //echo $img;
}
else
{
    echo "Product Images Can`t uploaded successfully";
}
}
        $result=$conn->update($i,$nam,$mo,$ad,$img,$ge);


//$qu="update usr set usr_name='". $nam ."', mobile='". $mo ."', address='". $ad  ."', img='". $im  ."', gender='". $ge  ."' where usr_id='". $i ."'";

if($result===true)
{
   header('location:usrpro.php');
   // echo $qu;
}
else
{
    echo "Can`t Updated your profile successfully";
}



?>