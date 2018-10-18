<html>
<head><title>Ex2</title></head>
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
	$a=$_POST["sel"];
	if($a=="add")
	{
	$ans=$no1+$no2;
	}
	else if($a=="sub")
	{
	$ans=$no1-$no2;
	}
	else if($a=="mul")
	{
	$ans=$no1*$no2;
	}
	else if($a=="div")
	{
	$ans=$no1/$no2;
	}
	else
	{
		return 0;
	}
	return $ans;
}
?>

<table border="25">
<form method="post" action="ex2.php">
<tr><td>Factorial<td><input type="text" name="fact"><td><input type="submit" value="Factorial" name="fact1"><td><input type="text" name="ans1" value="<?php if(isset($_POST["fact1"])){ echo"fact is".$i;} else { echo"";} ?>"</tr>
<tr><td>Power<td><input type="text" name="pow1"><td><input type="text" name="pow2"><td><input type="submit" value="Find Power" name="p"><td><input type="text" name="ans2" value="<?php echo"power  is".$j; ?>"></tr>
<tr><td>Armstrong<td><input type="text" name="arm1"><td><input type="submit" name="armbtn" value="Find Armstrong??"></tr>
<tr><td>Calc<td><input type="text" name="num1"><td><input type="text" name="num2">
<td><select name="sel">
<option value="add">+</option>
<option value="sub">-</option>
<option value="mul">*</option>
<option value="div">/</option>
</select>
<td><input type="submit" value="Calculate" name="c1"><td><input type="text" name="ans4" value="<?php echo"calc  is".$ans; ?>"></tr>
</form>
</table>

</body>
</html>