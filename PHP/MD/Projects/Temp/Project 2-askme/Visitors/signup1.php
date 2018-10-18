<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
	session_start();
	include '../Shared/link.php';
	require '../Shared/Classes/classqueandans.php';
	require '../Shared/Classes/classcat.php';


	?>
  </head>

  <body>

    <!-- Fixed navbar -->
    <?php
	if(empty($_SESSION["id"]))
	{
	include '../Shared/newnav.php';
	}
	else
	{
	include '../Shared/newnav2.php';	
	}
    ?>

	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Enter More Details</h3>
                <strong>You can also skip this details and add it in Update Profile Section.</strong> 

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->	

	 <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-8">
	 			<h4>Enter Details</h4>
	 			<div class="hline"></div>
		 			<form action="signuplog.php" method="post">
					  <div class="form-group">
					    <label for="InputName1">Select Gender:</label>
					    <input type="radio" value="Male"  name="gen">Male
					    <input type="radio" value="Female"  name="gen">Female            
					  </div>
					  <div class="form-group">
					    <label for="InputEmail1">Enter Mobile No:</label>
					    <input type="number" class="form-control" name="mob">
					  </div>
					  <div class="form-group">
					    <label for="InputEmail1">Profile Picture</label>
					    <input type="file" class="form-control" name="txtphoto">
					  </div>
                      <button type="submit" class="btn btn-theme" name="skip"><h4>Skip This Step</h4></button>					 
                      <button type="submit" class="btn btn-theme" name="next"><h4>Next</h4></button>
					</form>
			</div><! --/col-lg-8 -->
	 		<div class="col-lg-4">
                <img src="../Shared/UserProfile/d1.png" class="img-circle" alt="Cinque Terre" width="100%" height="100%">
             </div>
	 	</div><! --/row -->
	 </div><! --/container -->

     <?php
	include '../Shared/footer.php';
	 ?>
  </body>
</html>
