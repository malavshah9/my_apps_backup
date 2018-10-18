
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="../Shared/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="../Shared/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="../Shared/themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="../Shared/themes/css/flexslider.css" rel="stylesheet"/>
		<link href="../Shared/themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="../Shared/themes/js/jquery-1.7.2.min.js"></script>
		<script src="../Shared/bootstrap/js/bootstrap.min.js"></script>				
		<script src="../Shared/themes/js/superfish.js"></script>	
		<script src="../Shared/themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div class="container">
			<div class="navbar-inner main-menu">				
						<?php
	include '../Shared/nav1.php';
			?>	
		</div>
				
		
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="../Shared/themes/images/carousel/banner-2.jpg" alt="" />
						</li>
						<li>
							<img src="../Shared/themes/images/carousel/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
				We stand for top quality products. Our genuine suppliers always give you the best products. 
				<br/>Don't miss to shop from our site.
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Watches <strong>For Men</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>

<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">	

<?php
require '../Shared/Classes/classprojoincat.php';
$conn=new prod_cat_join;
$cname="Watches";
$result=$conn->pro_by_cat_name($cname);
while($row=$result->fetch_assoc())
{

echo '<li class="span3">';
echo '<div class="product-box">';
echo '<p><a href="usrdisplay1.php?id='.$row["p_id"].'">'.'<img src="'.$row["img"].'"  alt="" height="250px" width="250px" /></a></p>';
echo '<a class="title" href="usrdisplay1.php?id='.$row["p_id"].' ">'.$row["p_name"].'</a></p>';
echo '<a class="category" href="usrdisplay1.php?id='.$row["p_id"].'" >'.$row["cat_name"].'</a></p>';
echo '<p class="price">'.$row["p_price"].'</p>';

														
}echo '</div>';
?>
	</ul>
										</div>				

<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Best <strong>Trending Mobiles</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>

<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">	

<?php

$conn1=new prod_cat_join;
$cname="Mobile";
$result=$conn1->pro_by_cat_name($cname);
while($row=$result->fetch_assoc())
{

echo '<li class="span3">';
echo '<div class="product-box">';
echo '<p><a href="usrdisplay1.php?id='.$row["p_id"].'">'.'<img src="'.$row["img"].'"  alt="" height="250px" width="250px" /></a></p>';
echo '<a class="title" href="usrdisplay1.php?id='.$row["p_id"].' ">'.$row["p_name"].'</a></p>';
echo '<a class="category" href="usrdisplay1.php?id='.$row["p_id"].'" >'.$row["cat_name"].'</a></p>';
echo '<p class="price">'.$row["p_price"].'</p>';
echo '</div>';
														
}
?>
	</ul>
										</div>				


						
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 5000,
						animationSpeed: 1000,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
</body>
</html>