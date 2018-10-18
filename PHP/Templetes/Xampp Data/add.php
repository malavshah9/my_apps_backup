<html>
<body>
<?php
$ans1=0;
if(isset($_POST["btsub"]))
{
    
    $ans1=sub();
}
 function sub(){
    $no1=$_POST["no11"];
    $no2=$_POST["no22"];
    $ans1=$no1-$no2;
    echo $ans1;
    return $ans1;
}
?>
<?php
if(isset($_POST["btdiv"]))
{
    div();
    
}
 function div(){

    $no1=$_POST["no111"];
    $no2=$_POST["no222"];
    $ans2=$no1/$no2;
    echo $ans2;
}
?>
<?php
if(isset($_POST["btmul"]))
{
    mul();
    
}
 function mul(){

    $no1=$_POST["no1111"];
    $no2=$_POST["no2222"];
    $ans3=$no1*$no2;
    echo $ans3;
}
?>
<?php
  
if(isset($_POST["btpower"]))
{
    power();
}
 function power(){
$power=$_POST["power"];
$power1=$_POST["power1"];
$ansp=1;
while($power1>0)
{
$ansp=$ansp*$power;
$power1--;
}
echo $ansp;
}
?>
<?php
if(isset($_POST["btfact"]))
{
    fact();
}
 function fact(){
    $fact=$_POST["fact"];
    $fact1=1;
    while($fact>0)
    {
        $fact1=$fact1*$fact;
        $fact--;
    }
    echo $fact1;
}
?>
<?php
if(isset($_POST["btadd"]))
{
    add();

}
 function add(){

    $no1=$_POST["no1"];
    $no2=$_POST["no2"];
    $ans=$no1+$no2;
    echo $ans;
}
?>
<?php
if(isset($_POST["btnarm"]))
{
  arm();
}
function arm(){ 
$r=1;
$ansa=0;
$no=$_POST["txtarm"];
$x=$no;
while($no>0)
{
$r=$no%10;
$ansa+=$r*$r*$r;
$no=$no/10;
}
if($x==$ansa)
{
echo $x ."this is armstrong number";
}
else
{
echo $x ."this is not armstrong number";
}
}
?>
<form method="post" action="add.php">
<input type="number" name="no1" />
<input type="number" name="no2"/>
<input type="submit" name="btadd" value="+"/>
<input type="number"  value="<?php echo $ans1; ?>" />
<br>
<input type="number" name="no11"/>
<input type="number" name="no22"/>
<input type="submit" name="btsub" value="-"/>
<br>
<input type="number" name="no111"/>
<input type="number" name="no222"/>
<input type="submit" name="btdiv" value="/"/>
<br>
<input type="number" name="no1111"/>
<input type="number" name="no2222"/>
<input type="submit" name="btmul" value="*"/>
<br>
<input type="number" name="fact" value="<?php echo $fact1; ?>" />
<input type="submit" name="btfact" value="fact"/>
<br>
<input type="number" name="power"/>
<input type="number" name="power1" />
<input type="submit" name="btpower" value="power"/>
<br>
<input type="number" name="txtarm">
<input type="submit" name="btnarm" value="armstrong">
<br>


</form>
</body>
</html>