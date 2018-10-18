<?php
    $id=$_GET["id"];
    include 'DataConnecion.php';
    $con=new Connection();
    $result=$con->DeleteData($id);
    if($result==true)
    {
        header('location:CRUDOperation.php');
    }
    else
    {
        echo 'Can`t Deleted Successfully';
    }
?>