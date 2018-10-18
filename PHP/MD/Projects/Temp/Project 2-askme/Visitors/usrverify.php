<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
	session_start();
	include '../Shared/link.php';
	require '../Shared/Classes/classqueandans.php';
	require '../Shared/Classes/classcat.php';
    $id=$_GET["id"];

	?>
  </head>

  <body>

    <!-- Fixed navbar -->
    <?php
include '../Shared/newnav.php';
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
				<h3>We had sent you Verification mail so kindly go to your mail account and verify your account to proceed further.</h3> 
                
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->	
<div class="container">
    <form action="verifyrepeat.php?id=<?php echo $id; ?>" method="post">

                      <button type="submit" class="btn btn-theme" name="verify"><strong>Click here to send that mail again.</strong></button>
                

                </form>
</div>
     <?php
	include '../Shared/footer.php';
	 ?>
  </body>
</html>
