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

require 'classusr.php';
$cnn=new usr_all;
$result=$cnn->selectbyid($id);
$row=$result->fetch_assoc();
$uid=$row["usr_id"];
$uname=$row["usr_name"];
$mobile=$row["mobile"];
$add=$row["address"];
$img=$row["img"];
$gen=$row["gender"];
?>
<form action="usrupdate2.php" method="post">
<table class="table">

<tr><td>User ID</td><td><input type="text" name="id" value="<?php echo $id; ?>"></td></tr>
<tr><td>User Name</td><td><input type="text" name="nm" value="<?php echo $uname; ?>"></td></tr>
<tr><td>Mobile</td><td><input type="text" name="mob" value="<?php echo $mobile; ?>"></td></tr>
<tr><td>Address</td><td><input type="text" name="ad" value="<?php echo $add; ?>"></td></tr>
<tr><td>Image</td><td><input type="text" name="im" value="<?php echo $img; ?>"></td></tr>
<tr><td>Gender</td><td><input type="radio" class="input-xlarge" <?php if($gen=="Male"){ echo "Checked";} ?> name="ge" value="Male">Male
<input type="radio" class="input-xlarge" <?php if($gen=="Female"){ echo "Checked";} ?> name="ge" value="Female">Female</td></tr>
<tr><td></td><td><input type="submit" name="in" value="Update"></td></tr>
</table>
</form>

</body>
</html>