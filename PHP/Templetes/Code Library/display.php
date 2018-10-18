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
$conn=new mysqli($localhost,$user,$password,$database);
$q="select * from product";
$result=$conn->query($q);
echo '<table border="5" class="table">';
echo '<thead>
<th>Product Id</th>
<th>Product Name</th>
<th>Product Color</th>
<th>Product Price</th>
<th>Manufacturer</th>
<th>Warranty</th>
<th>Stock On Hand</th>
<th>Image</th>
<th>Action</th>
</thead>';
while($row=$result->fetch_assoc())
{
echo "<tr>";
echo '<td>'.$row["p_id"].'<td>'.$row["p_name"].'<td>'.$row["p_color"].'</td>'.'<td>'.$row["p_price"].'</td>'.'<td>'.$row["manuf"].'</td>'.'<td>'.$row["warranty"].'</td>'.'<td>'.$row["soh"].'</td>';
echo '<td>'.'<img src="'.$row["img"].'" height="150px" width="150px"></img></td>';
echo '<td>'.'<a href="delete1.php?id1='.$row["p_id"].'"><span class="glyphicon glyphicon-trash"></span>||</a>';
echo '<a href="update1.php?id2='.$row["p_id"].'"><span class="glyphicon glyphicon-pencil"></span></a></td>';

echo "</tr>";
}
echo "</table>";
?>

</body>
</html>