<?php
require 'classcat.php';

require 'classpro.php';
?>
<?php
if(isset($_POST["b1"]))
{
$nm=$_POST["name"];
$col=$_POST["color"];
$price=$_POST["price"];
$manu=$_POST["manu"];
$warr=$_POST["warr"];
$soh=$_POST["soh"];
$cat=$_POST["cat"];
$pro_desc=$_POST["desc"];
$img=$_FILES["txtphoto"]["name"];
if($img!=null)
{
$target_dir="../Shared/Product Images/";
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
else
{
    $img=null;
}
$conn=new product_all;
$result=$conn->insert($nm,$col,$price,$manu,$warr,$soh,$target_file,$cat,$pro_desc);
if($result===true)
{
    header('location:tabpro.php');
}
else
{
    echo "Can`t Successfully Inserted";
}
}
?>
