<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
	session_start();
	 if(empty($_SESSION["id"]))
		 {
			 header('location:../Visitors/signup.php');
		 }
	include '../Shared/link.php';
	require '../Shared/Classes/classqueandans.php';
	require '../Shared/Classes/classcat.php';
	require '../Shared/Classes/classq.php';
		$c1=new qa();
	$r1=$c1->newsfeedq();
	
	?>

<script src="../Shared/ckeditor/ckeditor.js"></script>

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
    $conn=new cat();
    $result=$conn->catfornewsfeed();
 
    ?>

	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Ask Question</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

<div class="container mtb">
	<div class="row">
					<div class="col-lg-8">
     
														<form action="askqlog.php" method="post">
															<div class="form-group">
															<label for="InputName1">Select Subject</lable>
															<select class="form-control" name="selectsubject">
															<?php
                                                                while($row=$result->fetch_assoc())
                                                                {
                                                                    echo '<option value="'.$row["pk_cart_id"].'">'.$row["cat_name"].'</option>';

                                                                }

																
															?>
															</select>
															</div>
															<div class="form-group">
														<label for="InputName1">Question Title</label>
														<input type="text" class="form-control"  name="qtitle">
															</div>
					
															
																				<div class="form-group">
														<label for="InputName1">Image</label>
														<input type="file" class="form-control"  name="txtphoto">
															</div>
					
															<div class="form-group">
										
														<label for="InputName1">Questiton Description</lable>
														<textarea name="q_desc"></textarea>
															<script>
																CKEDITOR.replace( 'q_desc' );
															</script>
															</div>
														
															
															
																<button type="submit" class="btn btn-theme" name="post">Ask Your Question</button>

														</form>
					</div>
		
	
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
		 		<?php
		include '../Shared/sidebar.php';
		?>
	 		</div>
</div><! --/row -->
</div><! --/container -->



	
	
	 <?php
	include '../Shared/footer.php';
	 ?>
  </body>
</html>
