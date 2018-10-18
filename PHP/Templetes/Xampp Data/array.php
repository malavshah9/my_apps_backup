<html>
<body>
<?php 
$arr=array(10,15,5,20,25);
$min1=$arr[0];

if(isset($_POST["btdrop"]))
{
    $x=$_POST["drop"];
if($x=="1")
{
     for($i=0;$i<5;$i++)
    {
             if($arr[$i]<$min1)
             {$min1=$arr[$i];}
    }
    echo $min1;
}
else if($x=="3")
{
    for($i=4;$i>=0;$i--)
    {
        echo $arr[$i];
    echo "<br>";
    }
    
}
else if($x=="2")
{
    for($i=0;$i<5;$i++)
    {
        for($j=$i+1;$j<5;$j++)
        {
            if($arr[$j]<$arr[$i])
            {
                $temp=$arr[$i];
                $arr[$i]=$arr[$j];
                $arr[$j]=$temp;
            }
        }
    }
    for($i=0;$i<5;$i++)
    {
        echo $arr[$i];
        echo "<br>";
    }
}
else
{
    echo "choose something";
}
}
?>
<form method="post" action="array.php">
<select name="drop">
<option value="1">min</option>
<option value="2">sort</option>
<option value="3">reverse</option>
</select>
<input type="submit" value="check" name="btdrop">
</form>
</body>
</html>