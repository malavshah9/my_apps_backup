
<html>
<head>
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
$id=$_GET["id"];
$conn=new mysqli($localhost,$user,$password,$database);
$q="select * from product where p_id=".$id;
$result=$conn->query($q);
$row=$result->fetch_assoc();
echo '<table class="table">';
echo '<thead>
<h1 align="center">Scheme Kart</h1>
</thead>';
echo '<tr colspan="5">';
echo '<td><img src="'.$row["img"].'"></td>';
echo '</tr>';

echo "</table>";
?>

</body>
</html>