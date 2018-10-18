<html>
<head><title>Crud Operation With PHP</title></head>
<body>
<table border="2px">
<tr><td>Id</td><td>Title</td><td>Status</td><td>Action</td></tr>
<?php
include 'DataConnecion.php';
$obj=new Connection();
$result=$obj->SelectAllData();
while($row=$result->fetch_assoc())
{
    echo '<tr><td>'.$row["Id"].'</td><td>'.$row["Title"].'</td><td>'.$row["Status"].'</td>
    <td><a href="update.php?id='.$row["Id"].'"><input type="button" value="Update"></a>
    <a href="delete.php?id='.$row["Id"].'">
    <input type="button" value="Delete">
    </a></td></tr>';
}
echo '</table>';
if(isset($_POST["sub"]))
{
    $id=$_POST["id"];
    $title=$_POST["title"];
    $status=$_POST["status"];
    $result=$obj->InsertAllData($id,$title,$status);
    if($result==true)
    {
        header('location:CRUDOperation.php');
    }
    else
    {
        echo 'Data Can`t Inserted Successfully!!!';
    }
}
?>
<table border="2px">
<form action="#" method="post">
    <tr><td>ID</td><td><input type="text" name="id"></td></tr>
    <tr><td>Title</td><td><input type="text" name="title"></td></tr>
    <tr><td>Status</td><td><input type="radio" name="status" value="Running">Running
                            <input type="radio" name="status" value="Completed">Completed
                        </td></tr>
    <tr><td rowspan="2"><input type="submit" value="Submit" name="sub"></td></tr>
</form>
</table>
</body>
</html>