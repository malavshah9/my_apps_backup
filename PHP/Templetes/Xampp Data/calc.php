<?php
session_start();
?>
<!doctype html>
<html>
<body>
<form method="post" action="calc.php">
<table border="2">
<tr><td colspan="3"><input type="text" name="txtno" value="<?php
$no1=0;$no2=0;$flag=0;$ans=0;
if(isset($_POST["btn"]))
{
echo $_POST["txtno"].$_POST["btn"];
}
else if(isset($_POST["btn_plus"]))
{
    $_SESSION["no1"]=$_POST["txtno"];
    $_SESSION["flag"]="1";
    echo "";
    }
    else if(isset($_POST["btn_sub"]))
{
    $_SESSION["no1"]=$_POST["txtno"];
    $_SESSION["flag"]="2";
    echo "";
    }
    else if(isset($_POST["btn_div"]))
{
    $_SESSION["no1"]=$_POST["txtno"];
    $_SESSION["flag"]="3";
    echo "";
    }
    else if(isset($_POST["btn_mul"]))
{
    $_SESSION["no1"]=$_POST["txtno"];
    $_SESSION["flag"]="4";
    echo "";
    }
    if(isset($_POST["btn_clr"]))  
{echo "";}
if(isset($_POST["btn_eq"]))  
{
    $no1=$_SESSION["no1"];
    $no2=$_POST["txtno"];
    $flag=$_SESSION["flag"];
    if($flag=="1")
    {
     echo $no1+$no2;   
    }
    if($flag=="2")
    {
     echo $no1-$no2;   
    }
    if($flag=="3")
    {
     echo $no1/$no2;   
    }
    if($flag=="4")
    {
     echo $no1*$no2;   
    }  
}
if(isset($_POST["btn_back"]))
{
  $x=$_POST["txtno"];
$y=strlen($x);

    echo substr($x,0,$y-1);
     }
?>">
<tr><td><input type="submit" name="btn" value="1">
<td><input type="submit" name="btn" value="2">
<td><input type="submit" name="btn" value="3">
<tr><td><input type="submit" name="btn" value="4">
<td><input type="submit" name="btn" value="5">
<td><input type="submit" name="btn" value="6">
<tr><td><input type="submit" name="btn" value="7">
<td><input type="submit" name="btn" value="8">
<td><input type="submit" name="btn" value="9">
<tr><td><input type="submit" name="btn" value="0">
<td><input type="submit" name="btn_plus" value="+">
<td><input type="submit" name="btn_sub" value="-">
<tr><td><input type="submit" name="btn_div" value="/">
<td><input type="submit" name="btn_mul" value="*">
<td><input type="submit" name="btn_clr" value="clear">
<tr><td colspan="3" align="center"><input type="submit" name="btn_eq" value="=">
<tr><td><input type="submit" name="btn_back" value="<-">
</form>
</body>
</html>