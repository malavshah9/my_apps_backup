<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
	session_start();
	include 'Shared/link.php';
	require 'Shared/Classes/classusr.php';
    $id=$_GET["id"];
    $name=$_GET["name"];
    $token=$_GET["token"];
    $conn=new usr_all;
    $result=$conn->verificationupdate($id,$token);
    if($result===false)
    {
        header('location:signup.php');
    }

	?>
  </head>

  <body>

    <!-- Fixed navbar -->
    <?php
include 'Shared/newnav.php';
	//session_destroy();
	 if(empty($_SESSION["id"]))
	 {
    //include 'Shared/nav1.php';
	 }
	 else
	 {
	//	 include 'Shared/nav2.php';
	 }
    ?>

	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>You had successfully verified.</h3> 
<h3><a href="index.php">Click here to go to Home page.</a></h3>                
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->	
     <?php
	include 'Shared/footer.php';
	 ?>
  </body>
</html>
