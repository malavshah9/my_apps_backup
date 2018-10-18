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

<?php

$id=$_SESSION["id"];

require '../Shared/Classes/classusr.php';
$conn=new usr_all;
$result=$conn->selectbyid($id);
$row=$result->fetch_assoc();
$name=$row["usr_name"];
$mob=$row["mobile"];
$add=$row["address"];
$img=$row["img"];
$gen=$row["gender"];
include '../Shared/nav1.php';

?>


					
			<section class="header_text sub">
				<h4><span>Update Details</span></h4>
			</section>			

        
 
 


			<section class="main-content">				
				<div class="row">
					<div class="span5">					
					</div><div class="span7">					
						<h4 class="title"><span class="text"><strong>Update</strong> Form</span></h4>
						<form action="usrupdate1.php?img=<?php echo $img; ?>" method="post" enctype="multipart/form-Data" class="form-stacked">
							<fieldset>
                            	
								<div class="control-group">
									<label class="control-label">Name</label>
									<div class="controls">
										<input type="text" name="nm" value="<?php echo $name; ?>" class="input-xlarge">
									</div>
								</div>
								
								
                                <div class="control-group">
									<label class="control-label">Mobile:</label>
									<div class="controls">
										<input type="number" name="mob" value="<?php echo $mob; ?>" class="input-xlarge">
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label">Address:</label>
									<div class="controls">
										<input type="text" name="ad" value="<?php echo $add; ?> ">
                                            </textarea>
									</div>
								</div>					
                                <div class="control-group">
									<label class="control-label">Profile Pic:</label>
									<div class="controls">
									 <img src="<?php echo $img; ?>" class="img-circle" alt="You had not set any profile pic!!" width="304" height="236"> 
									 <div class="controls">
										<input type="file" name="txtphoto" placeholder="Choose your photo" class="input-xlarge">
									</div>
								
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label">Gender:</label>
									<div class="controls">
										<input type="radio" class="input-xlarge" <?php if($gen=="Male"){ echo "Checked";} ?> name="gen" value="Male">Male
                                        
										<input type="radio" class="input-xlarge" <?php if($gen=="Female"){ echo "Checked";} ?> name="gen" value="Female">Female
									</div>
								</div>		                            
								<div class="control-group">
									<p></p>
								</div>
								<hr>
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" name="but1" value="Update"></div>
							</fieldset>
						</form>					
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
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>