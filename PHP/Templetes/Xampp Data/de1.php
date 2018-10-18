<?php
session_start();
?>
<html>
<head>
<title>Hello1</title>
<script src="js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" ></script>
</head>
<body>

 <?php
 $val1="";
if(isset($_POST["sub1"]))
{
if(empty($_POST["txt1"]))
{
$val1="default";
}
else
{
$val1=$_POST["txt1"];    
}
$_SESSION["h1"]=$val1;
setcookie("g1",$val1,86400,"/   ");
}
 ?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<div class="form-group">
<input type="text" name="txt1" class="form-control">

<input name="sub1" type="submit" class="btn btn-default form-control"  >Submit</button>

</div>
</form>


</body>
</html>