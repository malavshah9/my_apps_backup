<html>
<body>
<?php
if(isset($_POST["bttn"]))
{
$no=$_POST["txt"];
echo $no;
}
?>
<form method="post" action="demo.php">
<input type="text" name="txt">
<input type="submit" value="hey" name="bttn">
</form>
</body>
</html>