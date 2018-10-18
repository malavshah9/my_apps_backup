<?php
	session_start();
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
include '../Shared/nav1.php';
	if(empty($_SESSION["name"]))
	{
session_destroy();
$name="Please Sign In";
$id="0";
 $_SESSION["name"]="";
$_SESSION["id"]="";
echo '<h1>Please Sign In.</h1>';
	}
    else
    {
session_destroy();
 $_SESSION["name"]="";
$_SESSION["id"]="";
echo '<h1>You had signed out</h1>';
echo '<a href="usr1.php>Click Here to Sign In Again</a>';
    }
    ?>

    </body>
    </html>