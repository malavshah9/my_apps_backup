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
<?php
$id=$_GET["id2"];
require 'allclass.php';
$cnn=new product_all;
$result=$cnn->selectbyid($id);
$row=$result->fetch_assoc();
$pid=$row["p_id"];
$pname=$row["p_name"];
$pcolor=$row["p_color"];
$pprice=$row["p_price"];
$manu=$row["manuf"];
$war=$row["warranty"];
$soh=$row["soh"];
$img=$row["img"];
?>
<form action="update3.php?img=<?php echo $img; ?>" method="post" enctype="multipart/form-Data">
<table class="table">
<tr><td>Product ID</td><td><input type="number" name="pid" value="<?php echo $pid; ?>"></td></tr>
<tr><td>Product Name</td><td><input type="text" name="pname" value="<?php echo $pname; ?>"></td></tr>
<tr><td>Product Color</td><td><input type="text" name="pcolor" value="<?php echo $pcolor; ?>"></td></tr>
<tr><td>Product Price</td><td><input type="number" name="pprice" value="<?php echo $pprice; ?>"></td></tr>
<tr><td>Product Manufacturer</td><td><input type="text" name="manu" value="<?php echo $manu; ?>"></td></tr>
<tr><td>Warranty</td><td><input type="number" name="warr" value="<?php echo $war; ?>"></td></tr>
<tr><td>Quantity Held</td><td><input type="number" name="quant" value="<?php echo $soh; ?>"></td></tr>
<tr><td>Product Image</td><td><img src="<?php echo $img; ?>" height="150px" width="200px"></td><td><input type="file" name="txtimage"></td></tr>
<tr><td></td><td><input type="submit" name="in" value="Update"></td></tr>
</table>
</form>

</body>
</html>