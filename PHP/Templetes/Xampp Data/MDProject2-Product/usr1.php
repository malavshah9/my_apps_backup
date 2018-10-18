<html>
<head>
<style>
.a
{
    background-color:lightblue;
}
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
.body
{
    background-color: #e40046;
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
$conn=new mysqli($localhost,$user,$password,$database);
$q="select * from product";
$result=$conn->query($q);

?>
<div>
<h1 align="center" class="i">Scheme Kart</h1>

  <p class="g">Shop Fast, Ship Fast</p>
</div>
<div class="page-header">
  <h1>Watches <small>Branded</small></h1>
</div>
<div >
<div class="row">
<?php
while($row=$result->fetch_assoc())
{
        $i=0;
        for($i=0;$i<=0;$i++)
        {
        echo ' <div class="col-sm-6 col-md-4">';
   echo '<div class="thumbnail">';
     echo '<img src="'.$row["img"].'"alt="...">';
      echo '<div class="caption">';
        echo '<h3 class="g">'.$row["p_name"].'</h3>';
        echo '<p class="s">Manufacturer is '.$row["manuf"].'</p>';
        echo '<p><a href="#" class="btn btn-primary" role="button">Add To Cart</a> <a href="usr2.php?id='.$row["p_id"].'"'.' class="btn btn-default" role="button">View</a></p>';
      echo '</div>';
    echo '</div>';
  echo '</div>';
}
}
  ?>
</div>

</div>

</body>

</html>