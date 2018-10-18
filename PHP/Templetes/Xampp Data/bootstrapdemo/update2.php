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
$localhost="localhost";
$user="root";
$password="";
$database="demo1";
$conn=new mysqli($localhost,$user,$password,$database);


$newsid=$_GET["id"];

$qu="select * from test1 where news_id=".$newsid;
$result=$conn->query($qu);
$row=$result->fetch_assoc();
$newstitle=$row["title"];

$newsdesc=$row["news_desc"];
?>

<form action="update3.php" method="post">
<table>
<tr><td><input type="text" name="newsid" value="<?php echo $newsid; ?>"></td></tr>
<tr><td><input type="text" name="title" value="<?php echo $newstitle; ?>"></td></tr>
<tr><td><input type="text" name="news_desc" value="<?php echo $newsdesc; ?>"></td></tr>
<tr><td><input type="submit" name="update" value="Update"></td></tr>
</table>
</form>

</body>
</html>