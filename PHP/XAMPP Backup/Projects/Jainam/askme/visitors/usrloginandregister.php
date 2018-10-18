<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
session_start();
    include '../Shared/links.php';
    ?>
  </head>
  <body>
   
    <?php
    include '../Shared/usrnav.php';
    if(!(empty($_SESSION["id"])))
    {
      header('location:index.php');
    }
    //require '../Shared/Classes/classpro.php';
 /*   $conn=new product_all;
    $result=$conn->select_all();*/
    ?>
<center>
<form action="usrloginpassword.php" method="post" >
	<div class="container">
    <div id="content">
        <div class="container-fluid">
          <div class="lock-container">
            <h1>Log In</h1>
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <input class="form-control" type="text" placeholder="Enter Your Username" value="" name="id" ><br>
                <input type="submit" value="Enter Password" name="sub1" class="btn btn-success">
                         <span class="pull-right"><a href="#">Forget Password ??</a></span><span><a href="usrregister.php">Register</a></span>
    
              </div>
            </div>
          </div>
        </div>
    </div>
 </div>   
 </form>
</center>
	
	
	
	<?php
include '../Shared/usrfooterbar.php';
?>

  </body>
</html>
