<html>
<head><title>PHP Form Validations</title>
<?php
    $nameerror="";
    $conerror="";
    $emailerror="";
    $adderror="";
    if(isset($_POST["sub"]))
    {   
        $email=$_POST["email"];
        $name=$_POST["name"];
        $contact=$_POST["mobile"];
        $add=$_POST["add"];
        if(empty($_POST["name"]))
        {
            $nameerror="Please Enter Name";
        }
        if(!preg_match("/^[a-zA-Z]/",$name))
        {
            $nameerror="Enter Valid Name";
        }
        if(empty($_POST["mobile"]))
        {
            $conerror="Please Enter Contact Info.";
        }
        
        if(empty($_POST["email"]) || !filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $emailerror="Please Enter Email.";
        }
        
        if(empty($_POST["add"]))
        {
            $adderror="Please Enter Address";
        }
    }
?>
</head>
<body>
<center>
<table border="2px">
<form action="#" method="post">
<tr><td>Name</td><td><input type="text" name="name"></td></tr>
<tr><td colspan="2"><span class="error"><?php echo $nameerror; ?></span></td></tr>

<tr><td>Contact Info</td><td><input type="text" name="mobile"></td></tr>
<tr><td colspan="2"><span class="error"><?php echo $conerror; ?></span></td></tr>

<tr><td>Email</td><td><input type="text" name="email"></td></tr>
<tr><td colspan="2"><span class="error"><?php echo $emailerror; ?></span></td></tr>

<tr><td>Address</td><td><input type="text" name="add"></td></tr>
<tr><td colspan="2"><span class="error"><?php echo $adderror; ?></span></td></tr>

<tr><td colspan="2"><input type="submit" value="Check Validations" name="sub"></td></tr>


</form>
</table>
</center>
</body>
</html>