<html>
<head><title>ex1_demo</title></head>
<body>
<?php
if(isset ($_POST["fact1"]))
{
	$i=0;
	 $i=fac();
	
}
else if(isset($_POST["p"]))
{
	$n=$_POST["pow1"];
	$c=$_POST["pow2"];
	$j=0;
	$j= po($n,$c);
	
}
else if(isset ($_POST["armbtn"]))
{
	arm();
}
else if (isset($_POST["c1"]))
{	
	$ans=0;
	$ans=add();
}
else
{
	echo"Error";
}
function po($n,$c)
{
	$no1=$n;
$no2=$c;
$ans=1;
$i=1;
while($i<=$no2)
{
	$ans=$ans*$no1;
	$i++;
}
echo "Ans is ".$ans;
}
function arm()
{
	$no1=$_POST["arm1"];
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


function fac()
{
	$a=$_POST["fact"];
	$i=1;
	$ans=1;
	while($i<=$a)
	{
		$ans=$ans*$i;
		$i++;
	}
	return $ans;
}
function add()
{
	$no1=$_POST["num1"];
	$no2=$_POST["num2"];
	$ans=$no1+$no2;
	return $ans;
}
?>
</body>
</html>