 <?php
 session_start();
 ?>
 <html>
     <head>
		
         <?php include '../shared/Jai/link.php' ?>
					<?php include '../shared/Jai/nav.php'?>
</head>
<body>
  <?php
   
/*    if(!(empty($_SESSION["id"])))
    {
      header('location:index.php');
    }
  */ 
 /*   $conn=new product_all;
    $result=$conn->select_all();*/
	if(isset($_POST["but2"]))
{
	$id=$_POST["idd"];
	$nm=$_POST["nm1"];
	$pas=$_POST["pass"];
	$add=$_POST["add1"];
	$gend=$_POST["gen"];
	$img=$_FILES["txtphoto"]["name"];
		$mob=$_POST["mobi"];
	$r=md5(rand());
	$token=substr($r,0,10);

require '../Shared/Classes/classusr.php';

if($img!=null)
{
$target_dir="../Shared/User Pictures/";
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
	//$img=null;
	if($gend=="Male")
	{
		$img='../Shared/User Pictures/b.jpg';
	}
	else
	{
			$img='../Shared/User Pictures/g.jpg';
	}
}
$conn=new usr_all;
$result=$conn->insert($id,$nm,$pas,$add,$gend,$img,$mob,$token);
if($result===true)
{
	echo "<h1>We had sent you verification mail.Kindly check your email and verify your account to proceed further.</h1>";
	$conn->verify($id,$nm,$token);
echo '<h1><p class="reset"><a tabindex="4" href="../Users/verifyrepeat.php?token='.$token.'&id='.$id.'&name='.$name.'" title="Click here to resend the email.">Resend Email.</a></p></h1>';
	
}
else
{
    echo "Entered User id Already taken";
}
}
	
	
	
	
	
	
	
    ?>
<div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-8">
	 			<h2>New User Register</h2>
	 			<div class="hline"></div>
		 			<form role="form">
                          <div class="form-group">
					    <label for="InputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" name="idd"require>
					  </div>
					  <div class="form-group">
					    <label for="InputName1">Your Name</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" name="nm1">
					  </div>
					 
					  <div class="form-group">
					    <label for="InputSubject1">Password</label>
					    <input type="password" class="form-control" id="exampleInputEmail1" name="pass" require>
					  </div>
                       <div class="form-group">
					    <label for="InputName1">Address</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" name="add1">
					  </div>
                       <div class="form-group">
					    <label for="InputName1">Gender</label><br/>
					  <input type="radio" value="Male" name="gen" checked>Male<input type="radio" value="Female" name="gen">Female
					  </div>
                      <div class="form-group">
					    <label for="InputSubject1">Profile Pic</label>
					    <input type="file" class="form-control" id="exampleInputEmail1" name="txtphoto">
					  </div>
                      <div class="form-group">
					    <label for="InputSubject1">Mobile No</label>
					    <input type="number" class="form-control" id="exampleInputEmail1"  name="mobi" require>
					  </div>
					 
					  <center><button type="submit" class="btn btn-theme" name="but2">Sign Up</button></center>
					</form>
			</div><! --/col-lg-8 -->
			
			</body>
            </html>