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
				<h3>Login & Signup Here!!!</h3> 

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->	

	 <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-6">
	 			<h4>Sign Up</h4>
	 			<div class="hline"></div>
		 			<form action="signuplog.php" method="post">
					  <div class="form-group">
					    <label for="InputName1">Your Name</label>
					    <input type="text" class="form-control"  name="nm">
					  </div>
					  <div class="form-group">
					    <label for="InputEmail1">Email Address</label>
					    <input type="email" class="form-control" name="email1">
					  </div>
					  <div class="form-group">
					    <label for="InputEmail1">Password</label>
					    <input type="password" class="form-control" name="pass1">
					  </div>
					 
                      <button type="submit" class="btn btn-theme" name="signup">Sign Up</button>
					</form>
			</div><! --/col-lg-8 -->
	 		<div class="col-lg-6">
		 		<h4>Log In</h4>
		 		<div class="hline"></div>
		 		<form action="loginlog.php" method="post">
					  <div class="form-group">
					    <label for="InputEmail1">Email Address</label>
					    <input type="email" class="form-control"  name="email2">
					  </div>
					  <div class="form-group">
					    <label for="InputEmail1">Password</label>
					    <input type="password" class="form-control" name="pass2">
					  </div>
					 
                      <button type="submit" class="btn btn-theme" name="login" >Log In</button>
					</form>

	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->

     <?php
	include '../Shared/footer.php';
	 ?>
  </body>
</html>
