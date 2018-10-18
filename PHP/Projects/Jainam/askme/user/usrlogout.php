<?php
session_start();
	if(empty($_SESSION["id"]))
	{

    header('location:../Visitors/usrloginandregister.php');
$name="Please Sign In";
$id="0";
	}
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    include '../Shared/links.php';
    ?>
  </head>
  <body>
   
    <?php
    include '../Shared/usrnav.php';
    require '../Shared/Classes/classpro.php';
 /*   $conn=new product_all;
    $result=$conn->select_all();*/
    ?>
	
	       <?php
//include '../Shared/nav1.php';
	if(empty($_SESSION["id"]))
	{
session_destroy();
$name="Please Sign In";
$id="0";
$_SESSION["id"]="";
echo '<h1>Please Sign In.</h1>';
	}
    else
    {
session_destroy();

$_SESSION["id"]="";
echo '<h1>You had signed out</h1>';
echo '<a href="../Visitors/usrloginandregister.php">Click Here to Sign In Again</a>';
    }
    ?>


	
	
	
	
	
	
	
	
	
	
	
	
  </body>
</html>
