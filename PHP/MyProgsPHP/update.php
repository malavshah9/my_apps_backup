<html>
<head><title>Update Form</title></head>
<body>
<?php
    $id=$_GET["id"];
    include 'DataConnecion.php';
    $con=new Connection();
    $result=$con->SelectOneData($id);
    $row=$result->fetch_assoc();
    if(isset($_POST["sub"]))
    {
        $title=$_POST["title"];
        $status=$_POST["status"];
        $result=$con->UpdateData($id,$title,$status);
        if($result==true)
        {
            header('location:CRUDOperation.php');
        }
        else
        {
            echo 'Can`t Updated Successfully';
        }
    }
?>
<table border="2px">
<form action="#" method="post">
    <tr><td>Title</td><td><input type="text" name="title" value="<?php echo $row["Title"]; ?>"></td></tr>
    <tr><td>Status</td><td><input type="radio" name="status" value="Running" <?php if($row["Status"]=="Running") echo 'checked';?> >Running
                            <input type="radio" name="status" value="Completed" <?php if($row["Status"]=="Completed") echo 'checked';?>>Completed
                        </td></tr>
    <tr><td rowspan="2"><input type="submit" value="Submit" name="sub"></td></tr>
</form>
</table>
</body>
</html>

