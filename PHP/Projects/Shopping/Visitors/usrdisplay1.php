

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
			<section class="header_text sub">
			<img class="pageBanner" src="../Shared/themes/images/pageBanner.png" alt="New products" >
				<h4><span>Product Detail</span></h4>
			</section>
<?php
require '../Shared/Classes/classpro.php';
$id=$_GET["id"];
$conn=new product_all;
$result=$conn->selectbyid($id);
$row=$result->fetch_assoc();

?>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href="<?php echo $row["img"]; ?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<?php echo $row["img"]; ?>"></a>												
								<ul class="thumbnails small">								
									<li class="span1">
										<a href="<?php echo $row["img"]; ?>" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="<?php echo $row["img"]; ?>" alt=""></a>
									</li>								
									<li class="span1">
										<a href="<?php echo $row["img"]; ?>" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="<?php echo $row["img"]; ?>" alt=""></a>
									</li>													
									<li class="span1">
										<a href="<?php echo $row["img"]; ?>" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="<?php echo $row["img"]; ?>" alt=""></a>
									</li>
									<li class="span1">
										<a href="<?php echo $row["img"]; ?>" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="<?php echo $row["img"]; ?>" alt=""></a>
									</li>
								</ul>
							</div>
							<div class="span5">
								<address>
									<strong>Brand:</strong> <span><?php echo $row["p_name"]; ?></span><br>
									<strong>Product Code:</strong> <span><?php echo $row["p_id"]; ?></span><br>
									<strong>Reward Points:</strong> <span><?php echo "0"; ?></span><br>
									<strong>Availability:</strong> <span><?php echo $row["soh"]; ?></span><br>								
								</address>									
								<h4><strong>Price:<?php echo $row["p_price"]; ?></strong></h4>
							</div>
							<div class="span5">
								<form class="form-inline">
									<label class="checkbox">
										<input type="checkbox" value=""> Option one is this and that
									</label>
									<br/>
									<label class="checkbox">
									  <input type="checkbox" value=""> Be sure to include why it's great
									</label>
									<p>&nbsp;</p>
									<label>Qty:</label>
									<input type="text" class="span1" placeholder="1">
									<button class="btn btn-inverse" type="submit">Add to cart</button>
								</form>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home"><?php echo $row["p_desc"]; ?></div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Size</th>
													<td>Large, Medium, Small, X-Large</td>
												</tr>		
												<tr class="alt">
													<th><?php echo $row["p_color"]; ?></th>
													<td>Orange, Yellow</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div>						
							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
	<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
							
							
								<?php
require '../Shared/Classes/classprojoincat.php';
$conn=new prod_cat_join;
$cname="Watches";
$result=$conn->pro_by_cat_name($cname);
while($row=$result->fetch_assoc())
{
	echo 			'<li class="span3">'.
					'<div class="product-box">'.
					'<span class="sale_tag"></span>'.											
					'<a href="usrdisplay1.php?id='.$row["p_id"].'"><img alt="" src="'.$row["img"].'"></a><br/>'.
					'<a href="usrdisplay1.php?id='.$row["p_id"].'" class="title">'.$row["p_name"].'</a><br/>'.
					'<a href="usrdisplay1.php?id='.$row["p_id"].'" class="category">'.$row["cat_name"].'</a>'.
					'<p class="price">'.$row["p_price"].'</p>'.
					'</div>'.
					'</li>';
}
?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li class="active"><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.html">Adidas</a></li>
								<li><a href="products.html">Nike</a></li>
								<li><a href="products.html">Dunlop</a></li>
								<li><a href="products.html">Yamaha</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
													<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
													<a href="#" class="category">Suspendisse aliquet</a>
													<p class="price">$261</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
													<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
													<a href="#" class="category">Urna nec lectus mollis</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block">								
							<h4 class="title"><strong>Best</strong> Seller</h4>								
							<ul class="small-product">
								<li>
									<a href="#" title="Praesent tempor sem sodales">
										<img src="themes/images/ladies/1.jpg" alt="Praesent tempor sem sodales">
									</a>
									<a href="#">Praesent tempor sem</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="themes/images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Luctus quam ultrices rutrum</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="themes/images/ladies/3.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="#">Fusce id molestie massa</a>
								</li>   
							</ul>
						</div>
					</div>
				</div>
			</section>			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.html">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
    </body>
</html>