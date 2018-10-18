<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
	<?php
		if(empty($_SESSION["name"]))
	{
$name="Please Sign In";
$id="0";
	}
    else
    {

  $name=$_SESSION["name"];
$id=$_SESSION["id"];
    }  
                        ?>
						
						<div id="top-bar" class="container">
						<div class="row">
						<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
						</div>
							<div class="span8">
							<div class="account pull-right">
						<ul class="user-menu">				
							 <li><a href="#"><?php echo "<strong>Hello,".$name."</strong>"; ?></a></li>			
							
						<li><a href="usrpro.php">My Account</a></li>
							<li><a href="index1.php">Your Cart</a></li>
							<li><a href="usrexit.php">Checkout</a></li>					
							<li><a href="usr1.php">Login</a></li>
						</ul>
							</div>
							</div>
							</div>
							</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.html">Woman</a>					
								<ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">Man</a></li>			
							<li><a href="./products.html">Sport</a>
								<ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>
							</li>							
							<li><a href="./products.html">Hangbag</a></li>
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="<?php echo "img/io.jpg"; ?>" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/banner-2.jpg" alt="" />
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
$localhost="localhost";
$user="root";
$password="";
$database="shopping_cart";
$conn=new mysqli($localhost,$user,$password,$database);
$q='select p.*,c.* from product p,cat_tbl c where p.fk_cat_id=c.cat_id and cat_name="'.'watches"';
$result=$conn->query($q);
while($row=$result->fetch_assoc())
{

echo '<li class="span3">';
echo '<div class="product-box">';
echo '<p><a href="usrdisplay1.php?id='.$row["p_id"].'">'.'<img src="'.$row["img"].'"  alt="" /></a></p>';
echo '<a class="title" href="usrdisplay1.php?id='.$row["p_id"].' ">'.$row["p_name"].'</a></p>';
echo '<a class="category" href="usrdisplay1.php?id='.$row["p_id"].'" >'.$row["cat_name"].'</a></p>';
echo '<p class="price">'.$row["p_price"].'</p>';
echo '</div></li>';
														
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