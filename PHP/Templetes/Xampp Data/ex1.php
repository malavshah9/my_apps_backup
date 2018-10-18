<html>
<head><title>ex1</title></head>
<body>
<?php
if(isset ($_POST["sub1"]))
{
$no1=$_POST ["no1"];
$no2=$_POST["no2"];
$ans=1;
$i=1;
while($i<=$no2)
{
	$ans=$ans*$no1;
	$i++;
}
echo "Ansi is ".$ans;
}
?>
<form action="ex1.php" method="post">
<input type="number" name="no1">
<input type="number" name="no2">
<input type="text" name="ans" value="<?php echo"Power is ".$ans;  ?>">
<input type="submit" name="sub1" value="Submit1">
</form>

<form action="ex1_demo.php" method="post">
<input type="number" name="no">

<input type="submit" name="sub" value="Submit1">
</form>


</body>
</html>