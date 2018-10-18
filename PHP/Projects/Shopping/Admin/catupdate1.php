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

require 'classcat.php';
$cnn=new cat_all;
$result=$cnn->selectbyid($id);
$row=$result->fetch_assoc();
$uid=$row["cat_id"];
$uname=$row["cat_name"];
?>
<form action="catupdate2.php" method="post">
<table class="table">

<tr><td>Category ID</td><td><input type="text" name="id" value="<?php echo $id; ?>"></td></tr>
<tr><td>Category Name</td><td><input type="text" name="nm" value="<?php echo $uname; ?>"></td></tr>
<tr><td></td><td><input type="submit" name="in" value="Update"></td></tr>
</table>
</form>

</body>
</html>