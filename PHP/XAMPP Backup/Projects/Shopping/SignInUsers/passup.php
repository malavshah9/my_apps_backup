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
require '../Shared/Classes/classusr.php';
$cnn=new usr_all;
$id=$_SESSION["id"];
$conn=new usr_all;
$result=$conn->selectbyid($id);
$row=$result->fetch_assoc();
include '../Shared/nav1.php';

if(isset($_POST["but1"]))
{
	$op=$_POST["opass"];
$np=$_POST["npass"];
$cnp=$_POST["cpass"];

    if($np==$cnp)
    {
		$result=$cnn->checkpass($id,$op);
		if($result===true)
		{
			$result=$cnn->uppass($id,$np);
			if($result===true)
			{
				header('location:usrpro.php');
			}
			else
			{
				echo "Password cant changed successfully due unknown reason";
				header('location:urpro.php');
			}
			
		}
		else
			{
				echo "Entered Old Password can`t match with database old password";
			}
        
    }
	else
	{
		echo "Password and Confirm Password do not match";
	}
}

?>


					
			<section class="header_text sub">
				<h4><span>Update Password</span></h4>
			</section>			

        
 
 


			<section class="main-content">				
				<div class="row">
					<div class="span5">					
					</div><div class="span7">					
						<h4 class="title"><span class="text"><strong>Update</strong> Form</span></h4>
						<form action="passup.php" method="post" class="form-stacked">
							<fieldset>
                             <img src="<?php echo $row["img"]; ?>" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
								
								<div class="control-group">
									<label class="control-label">Old Password</label>
									<div class="controls">
										<input type="text" name="opass" class="input-xlarge">
									</div>
								</div>
								
								
                                <div class="control-group">
									<label class="control-label">New Password:</label>
									<div class="controls">
										<input type="text" name="npass" class="input-xlarge">
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label">Confirm New Password:</label>
									<div class="controls">
										<input type="text" name="cpass"class="input-xlarge">
                                        
									</div>
								</div>					
                                </div>		                            
								<div class="control-group">
									<p></p>
								</div>
								<hr>
								<div class="actions" align="center"><input tabindex="9" class="btn btn-inverse large" type="submit" name="but1" value="Update Password"></div>
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