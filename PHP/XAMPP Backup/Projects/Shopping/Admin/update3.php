<?php
require 'allclass.php';
$cnn=new product_all;
$im=$_GET["img"];
//echo $im;
$pid=$_POST["pid"];
$pname=$_POST["pname"];
$pcolor=$_POST["pcolor"];
$pprice=$_POST["pprice"];
$manu=$_POST["manu"];
$war=$_POST["warr"];
$qua=$_POST["quant"];
$i=$_FILES["txtimage"]["name"];
if($i==="")
{
    $img=$im;
}
else
{
    unlink($im);
    $target_dir="../Shared/Product Images/";
$target_file=$target_dir.basename($_FILES["txtimage"]["name"]);
if(move_uploaded_file($_FILES["txtimage"]["tmp_name"],$target_file))
{
    $img=$target_file;
    //echo $img;
}
else
{
    echo "Product Images Can`t uploaded successfully";
}

}
$result=$cnn->update($pid,$pname,$pcolor,$pprice,$manu,$war,$qua,$img,$qua);
if($result===true)
{
   header('location:tabpro.php');
}
else
{
    echo $qu;
}

?>