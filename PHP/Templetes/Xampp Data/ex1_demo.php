<html>
<head><title>ex1_demo</title></head>
<body>
<?php
if(isset ($_POST["sub"]))
{
$no1=$_POST["no"];
$n1=$no1;
$i=1;
$num=1;
$ans=0;
while($no1>0)
{
$i=$no1%10;
$ans=$ans+($i*$i*$i);
$no1=$no1/10;
}
if($ans==$n1)
{
echo "Yes,It is a armstrong number";
}
else
{
	echo"NO";
}
}
?>
</body>
</html>