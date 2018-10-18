<html>
<head><title>Model View Controller With Database</title></head>
<body>
<table border="2px">
<tr><td>Title</td><td>Status</td><td>Action</td></tr>
<?php
    while($row=$result->fetch_assoc())
    {
        echo '<tr><td>'.$row["Title"].'</td><td>'.$row["Status"].'</td>
        <td><a href="index.php?id='.$row["Id"].'"><input type="button" value="Delete"></a></td></tr>';
    }
?>
</table>
</body>
</html>