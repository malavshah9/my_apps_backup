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
$database="demo1";
$conn=new mysqli($localhost,$user,$password,$database);
$q="select * from test1";
$result=$conn->query($q);
echo '<table border="5" class="table">';
while($row=$result->fetch_assoc())
{
echo "<tr>";
echo '<td>'.$row["news_id"].'<td>'.$row["title"].'<td>'.$row["news_desc"].'</td>';
echo "</tr>";
}
echo "</table>";
?>

</body>
</html>