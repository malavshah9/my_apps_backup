<!doctype html>
<html>
<body>
<?php 

$arr1=array(
    array(1,"M",1),
    array(1,1,1),
    array(1,1,1),
);
$arr2=array(
    array(1,1,1),
    array(1,1,1),
    array(1,1,1),
);
$arr3=array(
    array(0,0,0),
    array(0,0,0),
    array(0,0,0),
);
 for($i=0;$i<3;$i++)
    {
        for($j=0;$j<3;$j++)
        {
            echo $arr1[$i][$j]."  ";
        }
        echo "<br>";
    }
if(isset($_POST["btnadd"]))
{
    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<3;$j++)
        {
            $arr3[$i][$j]=$arr1[$i][$j]+$arr2[$i][$j];
            echo $arr3[$i][$j]."  ";
        }
        echo "<br>";
    }
}
if(isset($_POST["btnmul"]))
{
    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<3;$j++)
        {
         for($k=0;$k<3;$k++)
        {   
            $arr3[$i][$j]+=($arr1[$i][$k]*$arr2[$k][$j]);
            
        }
        echo $arr3[$i][$j]."  ";
      }
    echo "<br>" ;
    }
}
?>

<form method="post" action="arr.php">
<input type="submit" name="btnadd" value="add">
<input type="submit" name="btnmul" value="mul">
</form>

</body>
</html>