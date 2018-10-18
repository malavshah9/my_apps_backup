<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
	session_start();
	include '../Shared/link.php';
	require '../Shared/Classes/classqueandans.php';
	require '../Shared/Classes/classcat.php';

$cid=$_GET["id"];
	$c1=new cat();
	$r1=$c1->catone($cid);
	
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
				<h3>Every question has Answer!!!</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

<div class="container mtb">
	 	<div class="row">
		 <div class="col-lg-8">
<?php
while($row=$r1->fetch_assoc())
{
echo 	'<div class="col-lg-8">'.
	 			'<! -- Blog Post 1 -->'.
		 		'<p><img class="img-responsive" src="'.$row["question_image"].'"></p>'.
		 		'<a href="single-post.html"><h3 class="ctitle">'.$row["question_title"].'</h3></a>'.
		 		'<p><csmall>'.$row["question_date"].'</csmall></csmall> | <csmall2>By:'.$row["user_uname"].'</csmall2></p>'.
		 		'<p>'.$row["question_description"].'</p>'.
		 		'<p><a href="single-post.php?id='.$row["question_pk_id"].'"><h4>[Read Answer]</h4></a></p>'.
		 		'<div class="hline"></div>'.
		 		'<div class="spacing"></div>'.
		 		'</div><! --/col-lg-8 -->';
	

}

?>
			</div>
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
		 		<?php
		include '../Shared/sidebar.php';
		?>
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->



			 </div><! --/row -->

	 </div><! --/container -->
	
	
	 <?php
	include '../Shared/footer.php';
	 ?>
  </body>
</html>
