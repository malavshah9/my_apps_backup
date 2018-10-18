<!doctype html>
<html>
<body>
<?php 
if(isset($_POST["btlength"]))
{
    $x=$_POST["str1"];
    echo strlen($x);

}
if(isset($_POST["btreplace"]))
{
    $x=$_POST["str1"];
    echo str_replace('k','j',$x);
}
if(isset($_POST["btwcount"]))
{
    $x=$_POST["str1"];
    echo str_word_count($x);
}
if(isset($_POST["btcompare"]))
{
    $x=$_POST["str1"];
    $y=$_POST["str2"];
    echo strcmp($x,$y);
}
if(isset($_POST["btchunk"]))
{
    $x=$_POST["str1"];
    echo chunk_split($x,3,'.');
}
if(isset($_POST["btreverse"]))
{
    $x=$_POST["str1"];
    echo strrev($x);
}
if(isset($_POST["btrepeat"]))
{
    $x=$_POST["str1"];
    echo str_repeat($x,2);
}
if(isset($_POST["btexploide"]))
{
    $x=$_POST["str1"];
    $y=$_POST["str2"];
    echo explode(" ",$x[3]);
}
?>
<form action="string.php" method="post">
<input type="text" name="str1">
<input type="text" name="str2">
<input type="submit" name="btreplace" value="replace">
<input type="submit" name="btlength" value="length">
<input type="submit" name="btwcount" value="word count">
<input type="submit" name="btcompare" value="compare">
<input type="submit" name="btchunk" value="chunk">
<input type="submit" name="btreverse" value="reverse">
<input type="submit" name="btrepeat" value="repeat">
<input type="submit" name="btexploide" value="exploide" >
</form>
</body>
</html>