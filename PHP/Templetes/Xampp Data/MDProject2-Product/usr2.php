<html>
<head>
 <style>
.i{
    font-size:125px;
    color:blue;
}
.g{
    font-size:35px;
    color:green;
}

.s{
    font-size:35px;
    color:orange;
}
</style>
 <script src="bootstrapdemo/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrapdemo/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrapdemo/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrapdemo/js/bootstrap.min.js" ></script>

</head>

<body>
<?php
$localhost="localhost";
$user="root";
$password="";
$database="shopping_cart";
$_id=$_GET["id"];
$conn=new mysqli($localhost,$user,$password,$database);
$q="select * from product where p_id=".$_id;
$result=$conn->query($q);
$row=$result->fetch_assoc();
echo '<table class="table">';
echo '<thead>
<h1 align="center" class="i">Scheme Kart</h1>
</thead>';
echo '<tr colspan="5">';
echo '<td><img src="'.$row["img"].'" width="100%" class="img-responsive"></td>';
echo '</td>';



?>
<td align="center">
	<div class="span5">
								<address>
									<strong class="g">Brand:</strong> <span  class="s"><?php echo $row["p_name"]; ?></span><br>
									<strong class="g">Product Code:</strong> <span  class="s"><?php echo $row["p_id"]; ?></span><br>
									<strong class="g">Reward Points:</strong> <span  class="s">0</span><br>
									<strong class="g">Availability:</strong> <span  class="s"><?php echo $row["soh"]; ?></span><br>								
								</address>									
								<h4><strong class="g">Price: INR <?php echo $row["p_price"]; ?> </strong></h4>
							</div>
							<div class="span5">
								<form class="form-inline">
									
									<p>&nbsp;</p>
									<label class="g">Qty:</label>
									<input type="text" class="span1" placeholder="1">
									<button class="btn btn-inverse" type="submit">Add to cart</button>
								</form>
							</div>				

</td></tr></table>
</body>
</html>