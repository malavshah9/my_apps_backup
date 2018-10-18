<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
	session_start();
	include '../Shared/link.php';
	require '../Shared/Classes/classqueandans.php';
	require '../Shared/Classes/classcat.php';
	require '../Shared/Classes/classlike.php';
	$ob=new likeq();
	$ob1=new likeq();
	if(empty($_SESSION["id"]))
	{
		$uid="No";
	}
	else
	{
		$uid=$_SESSION["id"];
	}

	$c1=new qa();
	$r1=$c1->newsfeedq();

	?>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script>

function rate1(ctr){
	var sessName = <?php echo json_encode($uid) ?>;
	if(sessName==="No")
	{
		window.location.replace("../Visitors/Signup.php");
	}
	else
	{
	
	 $.ajax({
        type:'POST',
        url:'../Users/likelog.php',
        data:'id='+ctr,
        success:function(msg){
            $().html();
            }
    
    });
     $('#'+ctr).hide();
      $('#d'+ctr).slideToggle();
	  	var cnt=$('#c'+ctr).html();
			  $.ajax({
        type:'POST',
        url:'../Users/likecntlog.php',
        data:'id='+ctr,
        success:function(msg){
            $('#c'+ctr).html(msg+'  Likes');
            }
    
    });
	 // 	
 
}
}
function rate2(ctr){
	
       $.ajax({
        type:'POST',
        url:'../Users/dislikelog.php',
        data:'idc='+ctr,
        success:function(msg){
            $().html();
            }
    
    });
     $('#d'+ctr).hide();
      $('#'+ctr).slideToggle();
	  	var cnt=$('#c'+ctr).html();
			  $.ajax({
        type:'POST',
        url:'../Users/likecntlog.php',
        data:'id='+ctr,
        success:function(msg){
            $('#c'+ctr).html(msg+'  Likes');
            }
    
    });
 
}



</script>

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
			if($uid=="No")
			{
											while($row=$r1->fetch_assoc())
											{
												$cnt=$ob->likecounter($row["question_pk_id"]);
											echo 	'<div class="col-lg-8">'.
															'<! -- Blog Post 1 -->'.
															'<p><img class="img-responsive" src="'.$row["question_image"].'"></p>'.
															'<a href="single-post.php?id='.$row["question_pk_id"].'"><h3 class="ctitle">'.$row["question_title"].'</h3></a>'.
															'<p><csmall>'.$row["question_date"].'</csmall></csmall> | <csmall2>By:'.$row["user_uname"].'</csmall2></p>'.
															'<p>'.$row["question_description"].'</p>'.
															 '<input  class="btn btn-theme" type="button" id="'.$row["question_pk_id"].'"  value="Like"  onClick="rate1('.$row["question_pk_id"].')" />
<input class="btn btn-theme" type="button" id="d'.$row["question_pk_id"].'"  value="Dislike"  onClick="rate2('.$row["question_pk_id"].')" style="display:none;" />'.
															'<p id="c'.$row["question_pk_id"].'">'.$cnt.'  Likes</p><p><a href="single-post.php?id='.$row["question_pk_id"].'"><h4>[Read Answer]</h4></a></p>'.
															'<div class="hline"></div>'.
															'<div class="spacing"></div>'.
															'</div><! --/col-lg-8 -->';

											}
			}
			else
			{
			
while($row=$r1->fetch_assoc())
{
		$cnt=$ob->likecounter($row["question_pk_id"]);
			echo 	'<div class="col-lg-8">'.
						'<! -- Blog Post 1 -->'.
						'<p><img class="img-responsive" src="'.$row["question_image"].'"></p>'.
						'<a href="single-post.php?id='.$row["question_pk_id"].'"><h3 class="ctitle">'.$row["question_title"].'</h3></a>'.
						'<p><csmall>'.$row["question_date"].'</csmall></csmall> | <csmall2>By:'.$row["user_uname"].'</csmall2></p>'.
						'<p>'.$row["question_description"].'</p>';
						$islike=$ob1->checklike($_SESSION["id"],$row["question_pk_id"]);
						if($islike=="True")
						{
						echo '<input class="btn btn-theme" type="button" id="d'.$row["question_pk_id"].'"  value="Dislike"  onClick="rate2('.$row["question_pk_id"].')"  />'.
						 '<input  class="btn btn-theme" type="button" id="'.$row["question_pk_id"].'"  value="Like"  onClick="rate1('.$row["question_pk_id"].')" style="display:none;" />';
						}
						else
						{
						 echo '<input  class="btn btn-theme" type="button" id="'.$row["question_pk_id"].'"  value="Like"  onClick="rate1('.$row["question_pk_id"].')"  />'.

					 '<input class="btn btn-theme" type="button" id="d'.$row["question_pk_id"].'"  value="Dislike"  onClick="rate2('.$row["question_pk_id"].')" style="display:none;"  />';							
						}
echo '<input class="btn btn-theme" type="button" id="d'.$row["question_pk_id"].'"  value="Dislike"  onClick="rate2('.$row["question_pk_id"].')" style="display:none;" />'.
						'<p id="c'.$row["question_pk_id"].'">'.$cnt.'  Likes</p><p><a href="single-post.php?id='.$row["question_pk_id"].'"><h4>[Read Answer]</h4></a></p>'.
							'<div class="hline"></div>'.
						'<div class="spacing"></div>'.
		'</div><! --/col-lg-8 -->';

											}





			}
											?>
		</div>
	 		<! -- SIDEBAR -->
	 	<div class="col-lg-4" id="a">
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
