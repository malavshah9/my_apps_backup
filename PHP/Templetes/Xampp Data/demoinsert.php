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
<table>
<tr><td><input type="text" name="newsid"></td></tr>
<tr><td><input type="text" name="title"></td></tr>
<tr><td><input type="text" name="news_desc"></td></tr>
<tr><td><input type="submit" name="insert" value="INSERT"></td></tr>
</table>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$localhost="localhost";
$user="root";
$password="";
$database="demo1";
$conn=new mysqli($localhost,$user,$password,$database);
$_id=$_POST["newsid"];
$_title=$_POST["title"];
$_desc=$_POST["news_desc"];
$qu="select * from test1";
$result=$conn->query($qu);
while($row=$result->fetch_assoc())
{

$temp=$row["news_id"];
if($temp==$_id)
{
	$f=1;
    echo "Duplication of id not allowed";
      break;
}
else
{
	$f=0;
}

}
if($f==0)
{
$conn=new mysqli($localhost,$user,$password,$database);
$q="insert into test1 values (". $_id .",'". $_title ."','". $_desc ."')";
if($result=$conn->query($q)===true)
{
    echo "Succesfull Inserted";
    $q="select * from test1";
$result=$conn->query($q);
echo '<table border="5" class="table">';
while($row=$result->fetch_assoc())
{
echo "<tr>";
echo '<td>'.$row["news_id"].'<td>'.$row["title"].'<td>'.$row["news_desc"].'</td>';
echo "</tr>";
}
echo "</table>";
}
else
{
    echo "Not Successfully Inserted";
}

}
}
?>

</body>
</html>