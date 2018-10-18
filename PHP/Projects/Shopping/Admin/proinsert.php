<?php
require 'classcat.php';
?>
<html>
<head><title>Insert Product Form</title></head>
<body>
<form action="proinsert1.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>Product Name</td><td><input type="text" name="name"></tr>

<tr><td>Product Color</td><td><input type="text" name="color"></tr>
<tr><td>Product Price</td><td><input type="text" name="price"></tr>
<tr><td>Product Manufacturer</td><td><input type="text" name="manu"></tr>
<tr><td>Product Warranty</td><td><input type="text" name="warr"></tr>

<tr><td>Stock On Hand</td><td><input type="text" name="soh"></tr>

<tr><td>Image</td><td><input type="file" name="txtphoto"></tr>
<tr><td>Select Category</td><td><select name="cat">
<?php
$conn=new cat_all;
$result=$conn->select_all();
while($row=$result->fetch_assoc())
{
    echo '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
}

?>
</select></tr>
<tr><td>Product Description</td><td><textarea name="desc"></textarea></td></tr>
<tr><td></td><td><input type="submit" name="b1"></td></tr>
</table>
</form>
</body>
</html>