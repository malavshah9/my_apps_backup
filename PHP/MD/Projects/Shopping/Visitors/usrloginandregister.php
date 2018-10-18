<?php
session_start();
if(!(empty($_SESSION["name"])))
	{
		header('location:../SignInUsers/usrpro.php');
	}

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
if(isset($_POST["num1"]))
{
$u1=$_POST["username1"];
$p1=$_POST["password1"];
require '../Shared/Classes/classusr.php';
$cnn=new usr_all;
$result=$cnn->loginselect($u1,$p1);
if($result->num_rows==1)
{
	$row=$result->fetch_assoc();
	$id=$u1;
	$name=$row["usr_name"];
	$token=$row["token"];
	$flag=1;
	if($row["isverify"]==$flag)
	{
	$_SESSION["id"]=$row["usr_id"];
	$_SESSION["name"]=$row["usr_name"];
	header('location:index1.php');
	}
	else
	{
		echo "You had not verified your account.";
		
	echo "<h1>We had sent you verification mail.Kindly check your email and verify your account to proceed further.</h1>";
		$conn=new usr_all;
		$conn->verify($id,$name,$token);
echo '<h1><p class="reset"><a tabindex="4" href="../SignInUsers/verifyrepeat.php?token='.$token.'&id='.$id.'&name='.$name.'" title="Click here to resend the email.">Resend Email.</a></p></h1>';

	}
}

else
{echo "Kindly Check Your Username and Password";}
}
else
{
}
	include '../Shared/nav1.php';
if(isset($_POST["but2"]))
{
	$nm=$_POST["nm1"];
	$id=$_POST["idd"];
	$pas=$_POST["pass"];
	$mob=$_POST["mobi"];
	$add=$_POST["add1"];
	$gend=$_POST["gen"];
	$img=$_FILES["txtphoto"]["name"];
	$r=md5(rand());
	$token=substr($r,0,10);

require '../Shared/Classes/classusr.php';

if($img!=null)
{
$target_dir="../Shared/User Profile Pics/";
$target_file=$target_dir.basename($_FILES["txtphoto"]["name"]);
if(move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$target_file))
{
    $img=$target_file;
    //echo $img;
}
else
{
    echo "Images Can`t uploaded successfully";
}
}
else
{
	$img=null;
}
$conn=new usr_all;
$result=$conn->insert($id,$nm,$pas,$mob,$add,$img,$gend,$token);
if($result===true)
{
	echo "<h1>We had sent you verification mail.Kindly check your email and verify your account to proceed further.</h1>";
	$conn->verify($id,$nm,$token);
	
echo '<h1><p class="reset"><a tabindex="4" href="../SignInUsers/verifyrepeat.php?token='.$token.'&id='.$id.'&name='.$name.'" title="Click here to resend the email.">Resend Email.</a></p></h1>';
}
else
{
    echo "Entered User id Already taken";
}
}
?>
			<section class="header_text sub">
			<img class="pageBanner" src="../Shared/themes/images/pageBanner.png" alt="New products" >
				<h4><span>Login or Regsiter</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" name="username1" placeholder="Enter your username" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="password" name="password1" placeholder="Enter your password" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input name="num1" tabindex="3" class="btn btn-inverse large" type="submit" value="Sign into your account">
									<hr>
									<p class="reset">Recover your <a tabindex="4" href="../SignInUsers/forgetpassword.php" title="Recover your username or password">username or password</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-stacked" enctype="multipart/form-Data">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input name="nm1" type="text" placeholder="Enter your username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email address:</label>
									<div class="controls">
										<input name="idd" type="email" placeholder="Enter your email" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password:</label>
									<div class="controls">
										<input name="pass" type="password" placeholder="Enter your password" class="input-xlarge">
									</div>
								</div>	
								<div class="control-group">
									<label class="control-label">Mobile</label>
									<div class="controls">
										<input name="mobi" type="number" placeholder="Enter your mobile number" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Profile Pic</label>
									<div class="controls">
										<input type="file" name="txtphoto" placeholder="Use your photo." class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Gender</label>
									<div class="controls">
										<input name="gen" type="radio" value="Male" class="input-xlarge">Male
										
										<input name="gen" type="radio" value="Female" class="input-xlarge">Female
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Address</label>
									<div class="controls">
										<textarea name="add1"></textarea>
									</div>
								</div>
															                            
								<div class="control-group">
									<p>Now that we know who you are. I'm not a mistake! In a comic, you know how you can tell who the arch-villain's going to be?</p>
								</div>
								<hr>
								<div class="actions"><input name="but2" tabindex="9" class="btn btn-inverse large" type="submit" value="Create your account"></div>
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