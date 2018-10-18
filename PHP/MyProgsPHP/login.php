<html>
<head><title>Log In Form</title></head>
<?php
    if(isset($POST["sub"]))
    {
        $mail=$_POST["email"];
        $pass=$_POST["pass"];
        echo $mail."<br>".$pass;
        include 'DataConnecion.php';
        $con=new Connection();
        $result=$con->LogInQuery($mail,$pass);
        if($result==true)
        {
            header('location:CRUDOperation.php');
        }
        else
        {
            echo 'Please Enter Appropriate Email and Password';
        }
    }
?>
<center>
    <table border="2px">
    <form action="#" method="post">
    <tr><td>Email</td><td><input type="email" name="email" required></td></tr>
    <tr><td>Password</td><td><input type="password" name="pass" required></td></tr>
    <tr><td colspan="2"><input type="submit" name="sub" value="LogIn"></td></tr>
    </form>
    </table>
</center>
</html>