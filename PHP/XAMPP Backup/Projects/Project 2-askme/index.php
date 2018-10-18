<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
	session_start();
	include 'Shared/link.php';
	?>
  </head>

  <body>

    <!-- Fixed navbar -->
    <?php
 $_SESSION["id"]=1;
    $_SESSION["name"]="Hello";
	//session_destroy();
	 if(empty($_SESSION["id"]))
	 {
    include 'Shared/nav1.php';
	 }
	 else
	 {
		 include 'Shared/nav2.php';
	 }
    ?>

	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h3>India`s Biggest Community to Discuss on the Questions</h3>
					<h1>Every Question has solution!!!</h1>
					<?php 
					//<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
					//<h5>More Lorem Ipsum added here too.</h5>				
					?>
				</div>
				<?php 
				//<div class="col-lg-8 col-lg-offset-2 himg">
				//	<img src="Shared/theme/assets/img/browser.png" class="img-responsive">
				//</div>
				?>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->

	
	
	 <?php
	include 'Shared/footer.php';
	 ?>
  </body>
</html>
