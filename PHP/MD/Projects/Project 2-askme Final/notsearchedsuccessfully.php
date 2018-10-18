<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
	session_start();
	include 'Shared/link.php';
	require 'Shared/Classes/classqueandans.php';
	require 'Shared/Classes/classcat.php';

	$c1=new qa();
	$r1=$c1->newsfeedq();

	?>
  </head>

  <body>

    <!-- Fixed navbar -->
    <?php
	if(empty($_SESSION["id"]))
	{
	include 'Shared/newnav.php';
	}
	else
	{
	include 'Shared/newnav2.php';	
	}

    ?>

	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Every question has Answer!!!</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

<div class="container mtb">
	 <div class="row">
		 <div class="col-lg-8">
										<h1>Sorry,0 Results Found.Try Another !!!</h1>
		</div>
	 		<! -- SIDEBAR -->
	 	<div class="col-lg-4">
		<?php
		include 'Shared/sidebar.php';
		?>
		 </div>
	 	</div><! --/row -->
	 </div><! --/container -->



			 </div><! --/row -->

	 </div><! --/container -->
	
	
	 <?php
	include 'Shared/footer.php';
	 ?>
  </body>
</html>
