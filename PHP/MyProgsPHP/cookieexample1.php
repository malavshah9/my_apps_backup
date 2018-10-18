<?php
    if(isset($_POST["sub"]))
    {
        $val=$_POST["cook"];
        setcookie("ThisIsCookieVarriable",$val,time()+(86400*30));
        if(isset($_COOKIE["ThisIsCookieVarriable"]))
        {
        header('location:cookieexample2.php');
        }
        else
        {
            $_COOKIE["ThisIsCookieVarriable"]=$val;
            echo 'Cookie can`t Set';
        }
    }
?>

<html>
<head><title>Set Cookie</title></head>
<body>
<center>
    <table border="3px">
    <form action="#" method="post">
        <tr><td>Enter Value For Cookie</td><td><input type="text" name="cook" ></td></tr>
        <tr><td colspan="2"><input type="submit" value="Set Cookie" name="sub"></td></tr>
    
    </form>
    </table>
</center>
</body>
</html>