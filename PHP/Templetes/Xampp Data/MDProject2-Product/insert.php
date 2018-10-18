
<html>
<head>
 <script src="bootstrapdemo/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrapdemo/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrapdemo/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrapdemo/js/bootstrap.min.js" ></script>

</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<table class="table">
<tr><td>Product ID</td><td><input type="number" name="pid"></td></tr>
<tr><td>Product Name</td><td><input type="text" name="pname"></td></tr>
<tr><td>Product Color</td><td><input type="text" name="pcolor"></td></tr>
<tr><td>Product Price</td><td><input type="number" name="pprice"></td></tr>
<tr><td>Product Manufacturer</td><td><input type="text" name="manu"></td></tr>
<tr><td>Warranty</td><td><input type="number" name="warr"></td></tr>
<tr><td>Quantity Held</td><td><input type="number" name="quant"></td></tr>
<tr><td>Upload Image</td><td><input type="text" name="img"></td></tr>


<tr><td></td><td><input type="submit" name="in" value="Insert"></td></tr>
</table>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
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

$q="insert into product values (". $pid .",'". $pname ."','". $pcolor ."','". $pprice ."','". $manu ."','". $war ."','". $qua ."','". $img ."')";

if($result=$conn->query($q)===true)
{
    echo "Succesfull Inserted";
    }
else
{
    echo $q;
    echo "Not Successfully Inserted";
}


}
?>

</body>
</html>         