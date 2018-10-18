
<html>
<head>
<style>
.a
{
    background-color:lightblue;
}
</style>
 <script src="bootstrapdemo/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrapdemo/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrapdemo/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrapdemo/js/bootstrap.min.js" ></script>
<div class="jumbotron">
  <h1 class="a">Scheme Kart</h1>
  <p>Shop Fast, Ship Fast</p>
</div>

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
echo '<table class="table">';
echo '<thead>
<h1 align="center">Scheme Kart</h1>
</thead>';
while($row=$result->fetch_assoc())
{
echo "<tr>";
echo '<div class="row">';
echo '<div class="col-sm-6 col-md-4">';
 echo   '<div class="thumbnail">';

     echo '<div class="caption">';
       echo '<h3>'.$row["p_name"].'</h3>';
       echo '<p>'.'<img src="'.$row["img"].'">'.'</p>';
    echo '<p><a href="usrdisplay1.php?id='.$row["p_id"].'"' .'class="btn btn-primary" role="button">'.$row["p_price"].'</a> <a href="usrdisplay1.php?id='.$row["p_id"].'"'.' class="btn btn-default" role="button">View</a></p>';
     echo '</div>';
   echo '</div>';
 echo '</div>';
echo '</div>';

echo "</tr>";
}
echo "</table>";
?>

</body>
</html>