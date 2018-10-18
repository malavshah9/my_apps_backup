<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
	session_start();
	include '../Shared/link.php';
	require '../Shared/Classes/classqueandans.php';
	require '../Shared/Classes/classcat.php';


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

    ?>

<?php
$id=$_GET["id"];
	$c1=new qa();
	$r1=$c1->selectq($id);
$row=$r1->fetch_assoc();
?>
   

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Every question has Answer!!!</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	 
	<!-- *****************************************************************************************************************
	 BLOG CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- SINGLE POST -->
	 		<div class="col-lg-8">
	 			<! -- Blog Post 1 -->
		 		<p><img class="img-responsive" src="<?php echo $row["answer_image"]; ?>"></p>
		 		<a href="single-post.html"><h3 class="ctitle"><?php echo $row["question_title"]; ?></h3></a>
		 		<p><csmall><?php echo $row["question_date"]; ?></csmall> | <csmall2>By:<?php echo $row["user_uname"]; ?></csmall2></p>
		 		<p><b><?php echo $row["question_description"]; ?></b> </p>
				 <div class="hline"></div>
		 		<p>
		 		<?php
	$c2=new qa();
	$r2=$c2->selectans($id);
while($row2=$r2->fetch_assoc())
{
echo '<blockquote>'.$row2["answer_description"].'</blockquote>';
echo '<p><csmall>'.$row2["answer_date"].'</csmall></csmall> | <csmall2>By:'.$row2["user_uname"].'</csmall2></p>';
	
		 		echo '<div class="spacing"></div>'.
		 		'<h6>SHARE:</h6>'.
		 		'<p class="share">'.
		 			'<a href="#"><i class="fa fa-twitter"></i></a>'.
		 			'<a href="#"><i class="fa fa-facebook"></i></a>'.
		 			'<a href="#"><i class="fa fa-tumblr"></i></a>'.
		 			'<a href="#"><i class="fa fa-google-plus"></i></a>'.
		 		'</p>';

}
?>
<form action="../Users/ans1.php?id=<?php echo $id; ?>" method="post">
		<textarea name="ans_desc"></textarea>
        <script>
            CKEDITOR.replace( 'ans_desc' );
        </script>
		
      <button type="submit" class="btn btn-theme" name="post">Post Your Answer</button>
	  </form>
	  </p>
			</div><! --/col-lg-8 -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
		 		<?php
		include '../Shared/sidebar.php';
		?>
			 </div>
	 	</div><! --/row -->
	 </div><! --/container -->


	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	   <?php
	include '../Shared/footer.php';
	 ?>

  </body>
</html>
