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
$q="select * from student_tbl";
$result=$conn->query($q);
echo '<table border="5" class="table">';
echo '<thead>
<th>Roll No</th>
<th>Name</th>
<th>Mobile No</th>
<th>Fees</th>
<th>Gender</th>
<th>Year</th>
</thead>';
while($row=$result->fetch_assoc())
{
echo "<tr>";
echo '<td>'.$row["roll_no"].'<td>'.$row["name"].'<td>'.$row["mobile_no"].'</td>'.'<td>'.$row["fees"].'</td>'.'<td>'.$row["gender"].'</td>'.'<td>'.$row["year"].'</td>';
echo "</tr>";
}
echo "</table>";
?>

</body>
</html>