 
 <html>
     <head>
				 <?php include '../shared/Jai/link.php'; ?>
				 <?php include '../shared/Jai/nav.php'; ?>

</head>
<div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-8">
				 <h2>Log In Page !!</h2>
				 
	 			<div class="hline"></div>
		 			<form role="form" action="login1.php" method="post">
					  <div class="form-group">
					    <label for="InputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1"require name="email">
					  </div>
					  <div class="form-group">
					    <label for="InputSubject1">Password</label>
					    <input type="password" class="form-control" id="exampleInputEmail1"require name="pass">
					  </div>
					 
					  <center><button type="submit" class="btn btn-theme" name="sub">Log In</button></center>
					</form>
			</div><! --/col-lg-8 -->
            </html>